<?php
if(isset($_SERVER['HTTP_REFERER'])) {
    echo $_SERVER['HTTP_REFERER'];
}
?>

<?PHP

foreach($_SERVER as $key_name => $key_value) {
	echo $key_name . " = " . $key_value . "<br />";
}

?>