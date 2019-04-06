<?php namespace ProcessWire;
/**
 * This migration will create a simple text field.
 */
$upgrade = function(RockMigrations $rm) {
  $rm->createField('loremipsum', 'text');
};

$downgrade = function(RockMigrations $rm) {
  $rm->deleteField('loremipsum');
};
