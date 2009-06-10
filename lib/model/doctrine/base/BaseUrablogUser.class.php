<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseUrablogUser extends sfDoctrineRecord
{
  public function setTableDefinition()
  {
    $this->setTableName('urablog_user');
    $this->hasColumn('email', 'string', 255, array('type' => 'string', 'notnull' => true, 'unique' => true, 'length' => '255'));
    $this->hasColumn('user_name', 'string', 255, array('type' => 'string', 'notnull' => true, 'length' => '255'));
    $this->hasColumn('passwd', 'string', 255, array('type' => 'string', 'notnull' => true, 'length' => '255'));
    $this->hasColumn('is_active', 'boolean', null, array('type' => 'boolean', 'notnull' => true, 'default' => '1'));

    $this->option('charset', 'utf8');
  }

  public function setUp()
  {
    $this->hasMany('UrablogField', array('local' => 'id',
                                         'foreign' => 'user_id'));

    $this->hasMany('UrablogBlogBox', array('local' => 'id',
                                           'foreign' => 'user_id'));

    $timestampable0 = new Doctrine_Template_Timestampable();
    $this->actAs($timestampable0);
  }
}