<?php

/**
 * BaseComment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $quote_id
 * @property string $contenu
 * @property string $auteur
 * @property string $mail
 * @property Quote $Quote
 * 
 * @method integer getQuoteId()  Returns the current record's "quote_id" value
 * @method string  getContenu()  Returns the current record's "contenu" value
 * @method string  getAuteur()   Returns the current record's "auteur" value
 * @method string  getMail()     Returns the current record's "mail" value
 * @method Quote   getQuote()    Returns the current record's "Quote" value
 * @method Comment setQuoteId()  Sets the current record's "quote_id" value
 * @method Comment setContenu()  Sets the current record's "contenu" value
 * @method Comment setAuteur()   Sets the current record's "auteur" value
 * @method Comment setMail()     Sets the current record's "mail" value
 * @method Comment setQuote()    Sets the current record's "Quote" value
 * 
 * @package    quotes
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseComment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('comment');
        $this->hasColumn('quote_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('contenu', 'string', null, array(
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
             'notnull' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Quote', array(
             'local' => 'quote_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $validate0 = new Doctrine_Template_Validate();
        $this->actAs($timestampable0);
        $this->actAs($validate0);
    }
}