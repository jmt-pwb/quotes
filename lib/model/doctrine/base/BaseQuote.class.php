<?php

/**
 * BaseQuote
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $on_dit
 * @property string $on_dit_pas
 * @property string $auteur
 * @property string $mail
 * @property Doctrine_Collection $Comment
 * 
 * @method string              getOnDit()      Returns the current record's "on_dit" value
 * @method string              getOnDitPas()   Returns the current record's "on_dit_pas" value
 * @method string              getAuteur()     Returns the current record's "auteur" value
 * @method string              getMail()       Returns the current record's "mail" value
 * @method Doctrine_Collection getComment()    Returns the current record's "Comment" collection
 * @method Quote               setOnDit()      Sets the current record's "on_dit" value
 * @method Quote               setOnDitPas()   Sets the current record's "on_dit_pas" value
 * @method Quote               setAuteur()     Sets the current record's "auteur" value
 * @method Quote               setMail()       Sets the current record's "mail" value
 * @method Quote               setComment()    Sets the current record's "Comment" collection
 * 
 * @package    quotes
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseQuote extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('quote');
        $this->hasColumn('on_dit', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '',
             ));
        $this->hasColumn('on_dit_pas', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '',
             ));
        $this->hasColumn('auteur', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('mail', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Comment', array(
             'local' => 'id',
             'foreign' => 'quote_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $validate0 = new Doctrine_Template_Validate();
        $this->actAs($timestampable0);
        $this->actAs($validate0);
    }
}