<?php
$href = $_REQUEST['href'];
$homepage = file_get_contents($_SERVER['DOCUMENT_ROOT'].$href);
echo $homepage;

?>