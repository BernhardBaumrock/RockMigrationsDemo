<?php namespace ProcessWire;
/**
 * Remove the search template and page.
 */
$upgrade = function(RockMigrations $rm) {
  $rm->deleteTemplate('search');
};

$downgrade = function(RockMigrations $rm) {
  $rm->createTemplate('search');
  $rm->addFieldToTemplate('title', 'search');
  $rm->createPage('Search', 'search', 'search', 1, [Page::statusHidden]);
};
