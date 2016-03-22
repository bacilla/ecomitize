<?php

/* Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$installer->run("
DROP TABLE IF EXISTS training_animal_entity;
CREATE TABLE training_animal_entity (
    entity_id INT(11) unsigned AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL DEFAULT '',
    type VARCHAR(255) NOT NULL DEFAULT '',
    edible TINYINT(1) unsigned NOT NULL DEFAULT 1,
    comment TEXT NULL,
    updated_at DATETIME,
    created_at DATETIME
) Engine=InnoDB DEFAULT CHARSET=utf8;
");

$installer->endSetup();