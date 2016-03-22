<?php

class Training_Animal_Model_Mysql4_Animal extends Mage_Core_Model_Mysql4_Abstract
{

    //Tell the resource model which table and PK column
    protected function _construct()
    {
        $this->_init('training/animal', 'entity_id');
    }

}