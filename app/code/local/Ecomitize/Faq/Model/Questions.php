<?php


class Ecomitize_Faq_Model_Questions extends Mage_Core_Model_Abstract
{

    protected function _construct()
    {
        //initialize resource model
        $this->_init('faqs/questions');

        //this is passed to _setResourceModel,
        //which will also set up our collection
        //model by appending _collection
    }

//    public function getCollection()
//    {
//
//    }

}