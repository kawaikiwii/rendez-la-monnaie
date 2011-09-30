<?php

/**
 * BaseRlmPartner
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property enum $type
 * @property string $name
 * @property string $description
 * @property string $logo_l
 * @property string $logo_b
 * @property Doctrine_Collection $RlmPartner
 * 
 * @method enum                getType()        Returns the current record's "type" value
 * @method string              getName()        Returns the current record's "name" value
 * @method string              getDescription() Returns the current record's "description" value
 * @method string              getLogoL()       Returns the current record's "logo_l" value
 * @method string              getLogoB()       Returns the current record's "logo_b" value
 * @method Doctrine_Collection getRlmPartner()  Returns the current record's "RlmPartner" collection
 * @method RlmPartner          setType()        Sets the current record's "type" value
 * @method RlmPartner          setName()        Sets the current record's "name" value
 * @method RlmPartner          setDescription() Sets the current record's "description" value
 * @method RlmPartner          setLogoL()       Sets the current record's "logo_l" value
 * @method RlmPartner          setLogoB()       Sets the current record's "logo_b" value
 * @method RlmPartner          setRlmPartner()  Sets the current record's "RlmPartner" collection
 * 
 * @package    rlm
 * @subpackage model
 * @author     stef
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRlmPartner extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('rlm_partner');
        $this->hasColumn('type', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'E-commerce',
              1 => 'Jeux',
              2 => 'Hi-tech',
             ),
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 4000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 4000,
             ));
        $this->hasColumn('logo_l', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('logo_b', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('RlmGoodDeal as RlmPartner', array(
             'local' => 'id',
             'foreign' => 'partner_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}