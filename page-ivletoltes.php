<?php
/*
Template Name: Ivletoltes page
*/
if($_POST["ivletoltes_checkbox"] == true){
 $attachment_location = $_SERVER["DOCUMENT_ROOT"] . "/wp-content/themes/nolimpia/assets/files/alairasgyujto_iv.pdf";
		        if (file_exists($attachment_location)) {

		            header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
		            header("Cache-Control: public"); // needed for internet explorer
		            header("Content-Type: application/pdf");
		            header("Content-Transfer-Encoding: Binary");
		            header("Content-Length:".filesize($attachment_location));
		            header("Content-Disposition: attachment; filename=alairasgyujto_iv.pdf");
		            readfile($attachment_location);
		            
		        } else {
		            die("Error: File not found.");
		        } 

}
else{
	include_once('404.php');
}

