<?php
function __autoload($className) {
	require_once strtolower ( $className ) . '.class.php';
}
?>