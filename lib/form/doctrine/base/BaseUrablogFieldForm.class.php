<?php

/**
 * UrablogField form base class.
 *
 * @package    form
 * @subpackage urablog_field
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseUrablogFieldForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'category_id' => new sfWidgetFormDoctrineSelect(array('model' => 'UrablogCategory', 'add_empty' => true)),
      'user_id'     => new sfWidgetFormDoctrineSelect(array('model' => 'UrablogUser', 'add_empty' => false)),
      'blog_id'     => new sfWidgetFormDoctrineSelect(array('model' => 'UrablogBlogBox', 'add_empty' => false)),
      'title'       => new sfWidgetFormInput(),
      'article'     => new sfWidgetFormTextarea(),
      'is_active'   => new sfWidgetFormInputCheckbox(),
      'expires_at'  => new sfWidgetFormDateTime(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => 'UrablogField', 'column' => 'id', 'required' => false)),
      'category_id' => new sfValidatorDoctrineChoice(array('model' => 'UrablogCategory', 'required' => false)),
      'user_id'     => new sfValidatorDoctrineChoice(array('model' => 'UrablogUser')),
      'blog_id'     => new sfValidatorDoctrineChoice(array('model' => 'UrablogBlogBox')),
      'title'       => new sfValidatorString(array('max_length' => 255)),
      'article'     => new sfValidatorString(array('max_length' => 4000)),
      'is_active'   => new sfValidatorBoolean(),
      'expires_at'  => new sfValidatorDateTime(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('urablog_field[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UrablogField';
  }

}