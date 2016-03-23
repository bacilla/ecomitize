<?php

class Ecomitize_Faq_Block_Adminhtml_Form_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        if (Mage::getSingleton('adminhtml/session')->getExampleData()) {
            $data = Mage::getSingleton('adminhtml/session')->getExamplelData();
            Mage::getSingleton('adminhtml/session')->getExampleData(null);
        } elseif (Mage::registry('example_data')) {
            $data = Mage::registry('example_data')->getData();
        } else {
            $data = array();
        }

        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'action' => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method' => 'post',
            'enctype' => 'multipart/form-data',
        ));

        $form->setUseContainer(true);

        $this->setForm($form);

        $fieldset = $form->addFieldset('example_form', array(
            'legend' => Mage::helper('faqs')->__('Question data')
        ));

        $fieldset->addField('question', 'text', array(
            'label' => Mage::helper('faqs')->__('Question'),
            'class' => 'required-entry',
            'required' => true,
            'style' => 'width: 794px',
            'name' => 'question',
            'note' => Mage::helper('faqs')->__('Question text.'),
        ));

        $fieldset->addField('answer', 'textarea', array(
            'label' => Mage::helper('faqs')->__('Answer'),
            'class' => 'required-entry',
            'required' => true,
            'name' => 'answer',
        ));

        $fieldset->addField('is_active', 'select', array(
            'label' => Mage::helper('faqs')->__('Active'),
            'name' => 'is_active',
            'values' => Mage::getModel('adminhtml/system_config_source_yesno')->toArray()
        ));

        $form->setValues($data);

        return parent::_prepareForm();
    }
}