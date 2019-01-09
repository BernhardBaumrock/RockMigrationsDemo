<?php
/**
 * RockMigrationsDemo
 *
 * @author Bernhard Baumrock, 08.01.2019
 * @license Licensed under MIT
 * @link https://www.baumrock.com
 */
class RockMigrationsDemo extends WireData implements Module {

  /**
   * Initialize the module (optional)
   */
  public function init() {
  }

  /**
   * Handle Install, Uninstall and Upgrades via RockMigrations
   */
  public function ___upgrade($from, $to) {
    $this->modules->get('RockMigrations')->setModule($this)->executeUpgrade($from, $to);
  }
  public function ___install() {
    $this->modules->get('RockMigrations')->setModule($this)->executeInstall();
  }
  public function ___uninstall() {
    $this->modules->get('RockMigrations')->setModule($this)->executeUninstall();
  }
}
