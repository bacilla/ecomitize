<?php

class Ecomitize_Faq_Block_Questions
    extends Mage_Core_Block_Abstract
    implements Mage_Widget_Block_Interface
{

    protected function _toHtml() {

        $html = '';
        $link_options = $this->getData('link_options');

        if (empty($link_options)) {
            return $html;
        }

        $arr_options = explode(',', $link_options);

        if (is_array($arr_options) && count($arr_options)) {

            $collection = Mage::getModel('faqs/questions')
                ->getCollection()
                ->addFieldToFilter('is_active', 1)
                ->addFieldToFilter('id', $arr_options);


            $html = '<div class="faqs-widget">';
            foreach($collection as $item) {
                $html .= '<div class="q">Q: ' . $item->getData('question') . '<br>' . $item->getData('answer') . '</div>';
            }
            $html .= '</div>';

        }

        return $html;
    }

}