--TEST--
mecab_destroy() function
--SKIPIF--
<?php 

if(!extension_loaded('mecab')) die('skip ');

 ?>
--FILE--
<?php
echo 'OK'; // no test case for this function yet
?>
--EXPECT--
OK