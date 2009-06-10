<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * UrablogField filter form base class.
 *
 * @package    filters
 * @subpackage UrablogField *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BaseUrablogFieldFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'category_id' => new sfWidgetFormDoctrineChoice(array('model' => 'UrablogCategory', 'add_empty' => true)),
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => 'UrablogUser', 'add_empty' => true)),
      'blog_id'     => new sfWidgetFormDoctrineChoice(array('model' => 'UrablogBlogBox', 'add_empty' => true)),
      'title'       => new sfWidgetFormFilterInput(),
      'article'     => new sfWidgetFormFilterInput(),
      'is_active'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'expires_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'category_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'UrablogCategory', 'column' => 'id')),
      'user_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'UrablogUser', 'column' => 'id')),
      'blog_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'UrablogBlogBox', 'column' => 'id')),
      'title'       => new sfValidatorPass(array('required' => false)),
      'article'     => new sfValidatorPass(array('required' => false)),
      'is_active'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'expires_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('urablog_field_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UrablogField';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'category_id' => 'ForeignKey',
      'user_id'     => 'ForeignKey',
      'blog_id'     => 'ForeignKey',
      'title'       => 'Text',
      'article'     => 'Text',
      'is_active'   => 'Boolean',
      'expires_at'  => 'Date',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}