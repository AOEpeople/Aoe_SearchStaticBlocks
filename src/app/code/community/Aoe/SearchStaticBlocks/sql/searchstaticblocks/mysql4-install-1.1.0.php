<?php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$installer->getConnection()
    ->addColumn($installer->getTable('catalogsearch_query'), 'static_blocks', array(
            'nullable' => false,
            'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
            'comment' => 'Static blocks associated with this query'
        )
    );
$installer->endSetup();
