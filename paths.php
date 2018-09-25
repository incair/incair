<?php
// Incair takes a very simple aproach to environments,
// and we think you'll like it.
$environments = array(
  "local" => array("http://localhost*","*.dev")
)

$paths["app"] = "application";  // Application directory

$paths["sys"] = "incair"; // Incair directory

$paths["bundle"] = "bundles"; // Bundles directory

$paths["storage"] = "storage"; // Storage directory

$paths["public"] = "public"; // Public directory



// Change to the working directory
chdir(__DIR__);

// Define the directory seperator for the environment
if (! defined("DS"))
{
  define("DS", DIRECTORY_SEPERATOR);
}

// Define the path to the base directory
$GLOBALS["incair_paths"]["base"] = __DIR__.DS;

// Define each constant if it hasn't been defined
foreach ($paths as $name => $path)
{
  if (! isset($GLOBALS["incair_paths"][$name]))
  {
    $GLOBALS["incair_paths"][$name] = realpath($path).DS;
  }
}

// A global path helper function
function path($path)
{
  return $GLOBALS["incair_paths"][$path];
}

// A global path setter function
function set_path($path,$value)
{
  return $GLOBALS["incair_paths"][$path] = $value;
}