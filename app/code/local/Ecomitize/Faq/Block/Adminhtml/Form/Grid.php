<?php

class Ecomitize_Faq_Block_Adminhtml_Form_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('form_grid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('desc');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('faqs/questions')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('id', array(
            'header'    => Mage::helper('faqs')->__('ID'),
            'align'     =>'right',
            'width'     => '50px',
            'index'     => 'id',
        ));

        $this->addColumn('question', array(
            'header'    => Mage::helper('faqs')->__('Question'),
            'align'     =>'left',
            'width'     => '400px',
            'index'     => 'question',
        ));

        $this->addColumn('answer', array(
            'header'    => Mage::helper('faqs')->__('Answer'),
            'align'     =>'left',
            'index'     => 'answer',
        ));

        $this->addColumn('is_active', array(
            'header'    => Mage::helper('faqs')->__('Active'),
            'align'     => 'left',
            'type'      => 'options',
            'index'     => 'is_active',
            'options'   => Mage::getModel('adminhtml/system_config_source_yesno')->toArray()
        ));

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}