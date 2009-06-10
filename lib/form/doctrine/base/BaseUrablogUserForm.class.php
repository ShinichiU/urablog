<?php

/**
 * UrablogUser form base class.
 *
 * @package    form
 * @subpackage urablog_user
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseUrablogUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'email'      => new sfWidgetFormInput(),
      'user_name'  => new sfWidgetFormInput(),
      'passwd'     => new sfWidgetFormInput(),
      'is_active'  => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => 'UrablogUser', 'column' => 'id', 'required' => false)),
      'email'      => new sfValidatorString(array('max_length' => 255)),
      'user_name'  => new sfValidatorString(array('max_length' => 255)),
      'passwd'     => new sfValidatorString(array('max_length' => 255)),
      'is_active'  => new sfValidatorBoolean(),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('urablog_user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UrablogUser';
  }

}