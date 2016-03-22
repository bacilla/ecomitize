<?php

class First_Module_ModelsController extends Mage_Core_Controller_Front_Action {


    public function storesAction() {

        $stores = Mage::getResourceModel('core/store_collection');
//        $stores = Mage::getModel('core/store')->getCollection();

//        print '<h2 style="color:red;">'.get_class($stores).'</h2>';

        foreach($stores as $store)
        {
            print Mage::getModel('catalog/category')->load($store->getRootCategoryId())->getName();
//            echo '<h2 style="color:red;">'.get_class($store).' - '.$store->getRootCategoryId().'</h2>';
//            echo '<h2>'.$store->getName().' -  '. $store->getCode() .'</h2>';
        }

    }


    public function categoriesAction() {

        $categories = Mage::getResourceModel('catalog/category_collection')
                        ->addFieldToFilter('level', 1);
//                        ->addAttributeToSelect('name');

        foreach($categories as $category)
        {
//            echo '<h2>'. $category->getId().' - '.$category->getName().'</h2>';

            $children = $category->getChildren();

            $childrenIds = explode(',', $children);

            foreach($childrenIds as $child)
            {
                $child = Mage::getModel('catalog/category')->load($child);
                Zend_Debug::dump($child->debug());
            }
        }

    }

}