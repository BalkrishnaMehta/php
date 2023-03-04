<?php
	$newfile = fopen("file.txt","r");
	if($newfile){
		/*while(!feof($newfile)){
			$text = fgets($newfile);
			echo $text;
		}
		echo "\n\n";*/
		while($char  = fgetc($newfile)){
			echo $char;
		}
		//echo fread($newfile,filesize("file.txt"));
		fclose($newfile);
	}
	else{
		echo "Unable to open";
	}
?>
