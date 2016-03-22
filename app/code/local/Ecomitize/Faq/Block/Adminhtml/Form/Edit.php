<?php

class Ecomitize_Faq_Block_Adminhtml_Form_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();

        $this->_objectId = 'id';
        $this->_blockGroup = 'faqs';
        $this->_controller = 'adminhtml_form';
        $this->_mode = 'edit';

        $this->_addButton('save_and_continue', array(
            'label' => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick' => 'saveAndContinueEdit()',
            'class' => 'save',
        ), -100);
        $this->_updateButton('save', 'label', Mage::helper('faqs')->__('Save Question'));
        $this->_updateButton('save', 'onclick', 'tinyMCE.triggerSave(); editForm.submit();');

        $this->_formScripts[] = "
            tinyMCE.init({selector: 'textarea', width: 800, height: 400});

            function saveAndContinueEdit(){
                tinyMCE.triggerSave();
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if (Mage::registry('example_data') && Mage::registry('example_data')->getId())
        {
            return Mage::helper('faqs')->__('Edit Question "%s"', $this->htmlEscape(Mage::registry('example_data')->getName()));
        } else {
            return Mage::helper('faqs')->__('New Question');
        }
    }

    protected function _prepareLayout()
    {
        if ($this->_blockGroup && $this->_controller && $this->_mode) {
            $this->setChild('form', $this->getLayout()->createBlock($this->_blockGroup . '/' . $this->_controller . '_' . $this->_mode . '_form'));
        }
        return parent::_prepareLayout();
    }

}