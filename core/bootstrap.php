<?php
/**
 * @file bootstrap.php
 * Constant functions for this application.
 *
 * The latest version can be obtained from:
 * @link http://www.flywebdesign.com/projects
 *
 * @version APP_VERSION
 * @copyright Copyright: 2003,2014 Fly Web Design.
 * @author Ron Mac Quarrie <ron@flywebdesign.com>
 */
 define("APP_VERSION", "0.0.2");

/**
 * variable_static function.
 * 
 * @access public
 * @param mixed $name  Globally unique name for the variable. For a function with only one static, variable, the function name
 * (e.g. via the PHP magic __FUNCTION__ constant) is recommended. For a function with multiple static variables add a
 * distinguishing suffix to the function name for each one.
 *
 * @param mixed $default_value Optional default value.
 *
 * @param mixed $reset TRUE to reset a specific named variable, or all variables if $name is NULL. Resetting every variable should
 * only be used, for example, for running unit tests with a clean environment. Should be used only though via function
 * variable_static_reset() and the return value should not be used in this case.
 *
 * @return Returns a variable by reference.
 */
function &variable_static($name, $default_value = NULL, $reset = FALSE) {
  static $data = array(), $default = array();
  // First check if dealing with a previously defined static variable.
  if (isset($data[$name]) || array_key_exists($name, $data)) {
    // Non-NULL $name and both $data[$name] and $default[$name] statics exist.
    if ($reset) {
      // Reset pre-existing static variable to its default value.
      $data[$name] = $default[$name];
    }
    return $data[$name];
  }
  // Neither $data[$name] nor $default[$name] static variables exist.
  if (isset($name)) {
    if ($reset) {
      // Reset was called before a default is set and yet a variable must be
      // returned.
      return $data;
    }
    // First call with new non-NULL $name. Initialize a new static variable.
    $default[$name] = $data[$name] = $default_value;
    return $data[$name];
  }
  // Reset all: ($name == NULL). This needs to be done one at a time so that
  // references returned by earlier invocations of buster_static() also get
  // reset.
  foreach ($default as $name => $value) {
    $data[$name] = $value;
  }
  // As the function returns a reference, the return should always be a
  // variable.
  return $data;
}

function variable_static_reset($name = NULL) {
  variable_static($name, NULL, TRUE);
}
?>