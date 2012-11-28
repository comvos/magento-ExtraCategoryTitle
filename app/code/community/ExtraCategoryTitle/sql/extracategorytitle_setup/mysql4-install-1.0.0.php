<?php
/**
 * Created by comvos online medien GmbH
 * http://www.comvos.de/
 * User: senders
 * Date: 27.11.12
 * Time: 11:50
 */ 
/* @var $installer Mage_Catalog_Model_Resource_Eav_Mysql4_Setup
*/
$installer = $this;

$installer->startSetup();

$this->addAttribute('catalog_category', 'extra_category_title', array(
    'type'              => 'varchar',
    'label'             => 'Alternative Title',
    'input'             => 'text',
    'global'            => 'Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE',
    'visible'           => true,
    'required'          => false,
    'unique'            => false,
    'user_defined'      => '1',
    'group'             => 'General',
));

$entityTypeId   = $installer->getEntityTypeId('catalog_category');
$attributeSetId = $installer->getDefaultAttributeSetId($entityTypeId);
$installer->addAttributeToGroup($entityTypeId,$attributeSetId,'General Information','extra_category_title',4);


$installer->endSetup();