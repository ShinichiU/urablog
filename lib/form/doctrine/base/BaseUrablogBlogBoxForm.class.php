<?php

/**
 * UrablogBlogBox form base class.
 *
 * @package    form
 * @subpackage urablog_blog_box
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseUrablogBlogBoxForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'user_id'    => new sfWidgetFormDoctrineSelect(array('model' => 'UrablogUser', 'add_empty' => false)),
      'title'      => new sfWidgetFormInput(),
      'discri'     => new sfWidgetFormTextarea(),
      'is_active'  => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => 'UrablogBlogBox', 'column' => 'id', 'required' => false)),
      'user_id'    => new sfValidatorDoctrineChoice(array('model' => 'UrablogUser')),
      'title'      => new sfValidatorString(array('max_length' => 255)),
      'discri'     => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'is_active'  => new sfValidatorBoolean(),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('urablog_blog_box[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UrablogBlogBox';
  }

}