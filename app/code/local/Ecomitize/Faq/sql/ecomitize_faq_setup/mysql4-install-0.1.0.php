<?php

/* Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

/* Create faqs table and add data to it */

$installer->run("
CREATE TABLE IF NOT EXISTS " . Mage::getSingleton('core/resource')->getTableName('faqs/questions') . " (
  id int(11) NOT NULL AUTO_INCREMENT,
  question text NOT NULL,
  answer text NOT NULL,
  is_active tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

$installer->run(<<<EOF
INSERT INTO faqs (question, answer, is_active) VALUES
('How do I apply?', '<div id="ui-accordion-1-panel-0" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" style="display: block;">\r\n<p>First you need to <a href="https://www.ucas.com/ucas/undergraduate/register" data-di-id="di-id-dcf48908-607c9f56">register for Apply</a> using our online application service. Once you&rsquo;ve registered, you&rsquo;ll be able to <a href="https://www.ucas.com/ucas/undergraduate/login" data-di-id="di-id-e332cfaa-43ae4788">complete your application</a> &ndash; there&rsquo;s quite a lot to fill in but you don&rsquo;t have to do it all at once. We&rsquo;ve got lots of information on <a href="https://www.ucas.com/ucas/undergraduate/apply-and-track/filling-your-application" data-di-id="di-id-2b70f755-cf010cd1">filling in your application</a>.</p>\r\n<p>Different courses have different application deadlines &ndash; check out our <a href="https://www.ucas.com/ucas/undergraduate/getting-started/when-apply" data-di-id="di-id-8bde234e-a4c766f">when to apply&nbsp;page</a> for more information.</p>\r\n</div>', 1),
('Why can’t I log in?', '<div id="ui-accordion-2-panel-0" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" style="display: block;">\r\n<p>Make sure you&rsquo;re trying to log in to the right application system. This will be:</p>\r\n<ul>\r\n<li><a href="https://www.ucas.com/ucas/undergraduate/register" data-di-id="di-id-3b2a9c57-ebbf2f43">Apply</a> if you are still filling in your application</li>\r\n<li><a href="https://www.ucas.com/ucas/undergraduate/login" data-di-id="di-id-dd514577-92318f22">Track</a> if you&rsquo;ve sent your application&nbsp;</li>\r\n</ul>\r\n<p>You will only be able to use Track when you receive a welcome email from us confirming your login details.</p>\r\n<p>If you are unsure of your login details for Apply or Track, you can use the &lsquo;forgotten login&rsquo; link.&nbsp;</p>\r\n</div>', 1),
('What are entry requirements?', '<div id="ui-accordion-3-panel-0" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" style="display: block;">\r\n<p>Entry requirements vary between universities and colleges &ndash; a full list of universities and colleges and their minimum entry criteria can be found in our <a href="http://search.ucas.com/" data-di-id="di-id-bd98d498-e64c1ae4">search tool</a>.&nbsp;If you are unsure you meet this criteria, it is best to contact the university/college admissions team for further guidance.</p>\r\n</div>', 1),
('What is the UCAS Tariff?', '<div id="ui-accordion-4-panel-0" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" style="display: block;">\r\n<p>The UCAS Tariff is a way of allocating points to qualifications. Not all qualifications attract UCAS Tariff points for various reasons. The university or college you''re interested in may accept your qualifications as an appropriate entry route, even if they don''t attract UCAS Tariff points. For more information, check out our <a href="https://www.ucas.com/ucas/undergraduate/getting-started/entry-requirements/tariff" data-di-id="di-id-70ee04cb-2ff19efb">Tariff page</a>.&nbsp;</p>\r\n</div>', 1),
('Where can I find out about funding?', '<div id="ui-accordion-5-panel-0" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" style="display: block;">\r\n<p>We don&rsquo;t arrange student finance, but you can choose to allow us to share some of the details from your application with your regional funding organisation.</p>\r\n<p>Further advice on funding available for UK undergraduates and information on how to apply for this can be found on the <a href="https://www.ucas.com/ucas/undergraduate/finance-and-support/tuition-fees-and-student-loans" data-di-id="di-id-a8343863-87aa9c91">undergraduate student finance section</a> of our website. Information on finance for overseas students can be found on the <a href="https://www.ucas.com/ucas/undergraduate/getting-started/international-and-eu-students/tips-international-applications" data-di-id="di-id-baf2c166-d337969a">Tips for international applications</a>&nbsp;page.&nbsp;</p>\r\n</div>', 1),
('What should I include in my personal statement? ', '<div id="ui-accordion-6-panel-0" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" style="display: block;">\r\n<p>You can read comprehensive advice and watch a video on the&nbsp;<a href="https://www.ucas.com/ucas/undergraduate/getting-started/when-apply/writing-personal-statement" data-di-id="di-id-164ea31f-f18bae0b">Writing a personal statement</a>&nbsp;page. We have also created a <a class="ext" href="http://ucasonline.blogspot.co.uk/2012/09/personal-statements-universities-tell.html" target="_blank" data-di-id="di-id-6e1f656-fafc62b9">UCAS blog post<span class="ext"><span class="element-invisible"> (link is external)</span></span></a> with input from universities which you may find useful.</p>\r\n</div>', 1),
('How do I get a reference? ', '<div id="ui-accordion-7-panel-0" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" style="display: block;">\r\n<p>The reference process will vary depending on how you choose to apply; you can either register and apply through a school, college or centre that is registered with UCAS, or apply as an individual. <a href="https://www.ucas.com/ucas/undergraduate/apply-and-track/how-get-reference" data-di-id="di-id-a3fb08c0-53411cfb">Find out how to get a reference</a>&nbsp;</p>\r\n</div>', 1),
('What will happen when I’ve sent my application?', '<div id="ui-accordion-8-panel-0" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" style="display: block;">\r\n<p>We''ll process it and send you a welcome email confirming the application has been sent to your university choices. This email will also contain your Personal ID, which will enable you to log in to Track to check the progress of your application. Find out more on how to <a href="https://www.ucas.com/ucas/undergraduate/apply-and-track/track-your-application" data-di-id="di-id-74b7ce02-b4c52142">Track your&nbsp;application</a>.</p>\r\n</div>', 1);
EOF
);


/* Add custom attribute to products */

$attrCode = 'custom_attribute';
$attrGroupName = 'Custom';
$attrLabel = 'Custom attribute';
$attrNote = 'Dynamic value';

$objCatalogEavSetup = Mage::getResourceModel('catalog/eav_mysql4_setup', 'core_setup');
$attrIdTest = $objCatalogEavSetup->getAttributeId(Mage_Catalog_Model_Product::ENTITY, $attrCode);

if ($attrIdTest === false) {
    $objCatalogEavSetup->addAttribute(Mage_Catalog_Model_Product::ENTITY, $attrCode, array(
        'group' => $attrGroupName,
        'sort_order' => 7,
        'type' => 'varchar',
        'backend' => '',
        'frontend' => '',
        'label' => $attrLabel,
        'note' => $attrNote,
        'input' => 'text',
        'class' => '',
        'source' => '',
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'visible' => true,
        'required' => false,
        'user_defined' => true,
        'default' => 'dynamic value',
        'visible_on_front' => true,
        'unique' => false,
        'is_configurable' => false,
        'used_for_promo_rules' => true
    ));
}

$attrData = array(
    'custom_attribute'=> 'dynamic value',
);
$storeId = 0;
$productIds = Mage::getModel('catalog/product')->getCollection()->getAllIds();
Mage::getModel("catalog/product_action")->updateAttributes(
    $productIds,
    $attrData,
    $storeId
);

$installer->endSetup();