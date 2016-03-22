<?php

class Vaimo_Catalog_ProductController extends Mage_Core_Controller_Front_Action
{

    public function listAction()
    {
        $html = Mage::app()
                    ->getLayout()
                    ->createBlock('vaimo_catalog/product')
                    ->setTemplate('catalog/custom.phtml')
                    ->toHtml();

        $this->getResponse()->setBody($html);

    }

}