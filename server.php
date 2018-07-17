<?php

function printfile(){
	$file = fopen("file.txt", "r");
		while(($buffer = fgets($file, 4096)) !== false){
			echo $buffer .'<br>';
		}
		if (!feof($file)){
			echo "error";
		}
	fclose($file);
}
function postfun(){
	$file = fopen('file.txt', 'a');
	fwrite($file, ((string)$_POST["contents"]) . "<br>");
	fclose($file);
	ob_end_clean();
	printfile();
	
}
ob_start();
printfile();
if(array_key_exists('post', $_POST)){
	postfun();
}
?>
