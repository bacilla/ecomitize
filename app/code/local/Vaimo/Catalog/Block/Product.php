<?php

class Vaimo_Catalog_Block_Product extends Mage_Core_Block_Template
{
    public function getProducts()
    {

        $orderDirection = $this->getOrderDirection();

        $collection = Mage::getResourceModel('catalog/product_collection')
            ->addAttributeToSelect(array('image', 'name', 'vaimo_position'))
            ->addFieldToFilter('vaimo_position', array('neq' => 'NULL'));

        $collection->getSelect()->reset(Zend_Db_Select::ORDER);
        $collection->getSelect()->order('CAST(`vaimo_position` AS SIGNED) ' . $orderDirection);

        Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($collection);
        Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($collection);

        return $collection;
    }

    public function getOrderDirection()
    {
        $orderDirection = $this->getRequest()->getParam('direction') ? $this->getRequest()->getParam('direction') : 'asc';

        if( !in_array($orderDirection, array('asc', 'desc')) )
        {
            $orderDirection = 'asc';
        }

        return $orderDirection;
    }
}