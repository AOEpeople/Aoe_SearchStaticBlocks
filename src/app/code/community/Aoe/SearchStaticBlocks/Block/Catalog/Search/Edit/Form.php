<?php
/**
 * Magento Enterprise Edition
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento Enterprise Edition License
 * that is bundled with this package in the file LICENSE_EE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magentocommerce.com/license/enterprise-edition
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Adminhtml
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://www.magentocommerce.com/license/enterprise-edition
 */

/**
 * Adminhtml tag edit form
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @author      Magento Core Team <core@magentocommerce.com>
 */

class Aoe_SearchStaticBlocks_Block_Catalog_Search_Edit_Form extends Mage_Adminhtml_Block_Catalog_Search_Edit_Form
{

    /**
     * Prepare form fields
     *
     * @return Mage_Adminhtml_Block_Catalog_Search_Edit_Form
     */
    protected function _prepareForm() {
        parent::_prepareForm();

        $form = $this->getForm();
        $fieldset = $form->getElements()->searchById('base_fieldset');

        $fieldset->addField('static_blocks', 'text', array(
            'name'   => 'static_blocks',
            'label'  => Mage::helper('catalog')->__('Static blocks'),
            'title'  => Mage::helper('catalog')->__('Static blocks'),
            'note'  => Mage::helper('catalog')->__('comma separated list of static blocks identifiers'),
        ));

        return $this;
    }
}
