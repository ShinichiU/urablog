<?php

/**
 * view actions.
 *
 * @package    urablog
 * @subpackage view
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class viewActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->urablog_field_list = Doctrine::getTable('UrablogField')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->urablog_field = Doctrine::getTable('UrablogField')->find($request->getParameter('id'));
    $this->forward404Unless($this->urablog_field);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new UrablogFieldForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new UrablogFieldForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($urablog_field = Doctrine::getTable('UrablogField')->find($request->getParameter('id')), sprintf('Object urablog_field does not exist (%s).', $request->getParameter('id')));
    $this->form = new UrablogFieldForm($urablog_field);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($urablog_field = Doctrine::getTable('UrablogField')->find($request->getParameter('id')), sprintf('Object urablog_field does not exist (%s).', $request->getParameter('id')));
    $this->form = new UrablogFieldForm($urablog_field);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($urablog_field = Doctrine::getTable('UrablogField')->find($request->getParameter('id')), sprintf('Object urablog_field does not exist (%s).', $request->getParameter('id')));
    $urablog_field->delete();

    $this->redirect('view/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()));
    if ($form->isValid())
    {
      $urablog_field = $form->save();

      $this->redirect('view/edit?id='.$urablog_field['id']);
    }
  }
}
