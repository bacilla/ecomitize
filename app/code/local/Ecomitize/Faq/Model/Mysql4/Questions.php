<?php

class Ecomitize_Faq_Model_Mysql4_Questions extends Mage_Core_Model_Mysql4_Abstract
{

    //Tell the resource model which table and PK column
    protected function _construct()
    {
        $this->_init('faqs/questions', 'id');
    }

}