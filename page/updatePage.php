<?php

	print_r($_POST);

$data = ($_POST['contents']) ;


//$data=trim(htmlentities($_POST['contents'], ENT_HTML5 ));

//$filecontent=file_get_contents($_POST['page']);
echo $data;
$filename = realpath(explode('/',$_POST['page'])[1]);
echo $filename;

chmod($filename, 0777);
file_put_contents(($filename),$data);

