<?php

class Ecomitize_Faq_Helper_Data extends Mage_Core_Helper_Abstract
{

    public function homeQuestions()
    {
        $collection = Mage::getModel('faqs/questions')
                        ->getCollection()
                        ->addFieldToFilter('is_active', 1)
                        ->setPageSize(5)
                        ->setCurPage(1);

        $collection->getSelect()->order(new Zend_Db_Expr('RAND()'));

        return $collection;
    }

    public function allQuestions()
    {
        $collection = Mage::getModel('faqs/questions')->getCollection()->addFieldToFilter('is_active', 1);

        return $collection;
    }

}