<?php
function autoloader1($class_name) {
	require_once strtolower ( $class_name ) . '.class.php';
}
spl_autoload_register ( "autoloader1" );
?>
