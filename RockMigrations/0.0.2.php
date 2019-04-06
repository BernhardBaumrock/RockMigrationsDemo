<?php namespace ProcessWire;
/**
 * This migration will place the field in the "home" template beside the "title"
 * field and populate it with some lorem ipsum text. Comments are listed below
 * the code for better readability.
 */
$upgrade = function(RockMigrations $rm) {
  $rm->addFieldToTemplate('loremipsum', 'home', 'headline');
  $rm->setFieldData('title', ["columnWidth" => 33], 'home');
  $rm->setFieldData('headline', ["columnWidth" => 33], 'home');
  $rm->setFieldData('loremipsum', ["columnWidth" => 34], 'home');
  
  // add field loremipsum to template home after field headline
  // set title field column width to 33 in template context home
  // set headline field column width to 33 in template context home
  // set loremipsum field column width to 34 in template context home
};

$downgrade = function(RockMigrations $rm) {
  $rm->removeFieldFromTemplate('loremipsum', 'home');
  $rm->setFieldData('title', ["columnWidth" => 100], 'home');
  $rm->setFieldData('headline', ["columnWidth" => 100], 'home');
};
