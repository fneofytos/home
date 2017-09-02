
<?php
if(!empty($_GET['file'])) {
	$fileName = basename($_GET['file']);
	$filePath = $fileName;
	if(!empty($fileName) && file_exists($filePath)) {
		//
		header("Cache-Control: public");
		header("Contest-Description: File Transfer");
		header("Contest-Dsiposition: attachment; filename=$fileName");
		header("Contet-Type: application/zip");
		header("Contetst-Transfer-Encoding: binary");
		
		//
		readfile($filePath);
		exit;
	} 
}
