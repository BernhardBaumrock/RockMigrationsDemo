<?php namespace ProcessWire;
$upgrade = function(RockMigrations $rm) {
  d("--- execute upgrade 001 ---");
  d("create field001");
  d("create template001");
}; // dont forget the semicolon!

$downgrade = function(RockMigrations $rm) {
  d("--- execute downgrade 001 ---");
  d("remove field001");
  d("remove template001");
}; // dont forget the semicolon!
