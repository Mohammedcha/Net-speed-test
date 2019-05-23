<?php
	@ini_set('zlib.output_compression', 'Off');
	@ini_set('output_buffering', 'Off');
	@ini_set('output_handler', '');
	header('HTTP/1.1 200 OK');
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename=random.dat');
	header('Content-Transfer-Encoding: binary');
	header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
	header('Cache-Control: post-check=0, pre-check=0', false);
	header('Pragma: no-cache');
	$data=openssl_random_pseudo_bytes(1048576);
	$chunks=isset($_GET['ckSize']) ? intval($_GET['ckSize']) : 4;
	if(empty($chunks)){$chunks = 4;}
	if($chunks>1024){$chunks = 1024;}
	for($i=0;$i<$chunks;$i++){
		echo $data;
		flush();
	}
?>
