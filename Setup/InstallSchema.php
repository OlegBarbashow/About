<?php

namespace Nevcomp\About\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $tableName = 'nevcom_about_brand';
        $table = $setup->getConnection()->newTable($setup->getTable($tableName));



        $setup->endSetup();
    }
}
