<?php
function autoloader1($class_name) {
	$datei = strtolower ( $class_name ) . '.class.php';
	if (file_exists ( $datei )) {
		require_once $datei;
	}
}
spl_autoload_register ( "autoloader1" );
function autoloader2($class_name) {
	$datei = strtolower ( 'class/class_' . $class_name . '.php' );
	
	if (file_exists ( $datei )) {
		require_once $datei;
	}
}
spl_autoload_register ( "autoloader2" );
?>
