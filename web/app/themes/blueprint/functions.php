<?php
/**
 * Sage includes
 *
 * The $blueprint_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/blueprint/pull/1042
 */
$blueprint_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/nav-walker.php', // Bootstrap Nav Walker
  'lib/customizer.php' // Theme customizer
];

foreach ($blueprint_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'blueprint'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
