<?php 
function addiere($summand1, $summand2) {
	return ($summand1 + $summand2); 
}

function subtrahiere($minuend, $subtrahend) {
	return ($minuend - $subtrahend); 
}
  
function multipliziere($faktor1, $faktor2) {
	return ($faktor1 * $faktor2); 
}
  
function dividiere($dividend, $divisor) {
	if ($divisor != 0) { 
		return ($dividend / $divisor); 
	}
} 
?>