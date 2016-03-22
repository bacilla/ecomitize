<?php

class First_Module_IndexController extends Mage_Core_Controller_Front_Action {

    public function testAction() {

        $this->loadLayout();

        $t = $this->getLayout()->createBlock('core/text')->setText('Hello World');

        $this->getLayout()->getBlock('content')->insert($t);

        $this->renderLayout();
    }

}