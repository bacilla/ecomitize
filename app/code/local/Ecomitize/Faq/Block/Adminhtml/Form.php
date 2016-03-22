<?php

class Ecomitize_Faq_Block_Adminhtml_Form extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected $_addButtonLabel = 'Add New Question';

    public function __construct()
    {
        parent::__construct();
        $this->_controller = 'adminhtml_form';
        $this->_blockGroup = 'faqs';
        $this->_headerText = Mage::helper('faqs')->__('Questions');
    }

    protected function _prepareLayout()
    {
        $this->setChild( 'grid',
            $this->getLayout()->createBlock( $this->_blockGroup.'/' . $this->_controller . '_grid',
                $this->_controller . '.grid')->setSaveParametersInSession(true) );
        return parent::_prepareLayout();
    }
}