<?php

class Ecomitize_Faq_Model_Options extends Mage_Core_Model_Abstract
{

    public function toOptionArray() {
        return array(
            array('value' => 'print', 'label' => 'Print Button'),
            array('value' => 'email', 'label' => 'Inquiry Email Button'),
        );
    }

}