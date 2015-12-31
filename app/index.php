<?php
require_once 'init.php';



$rs = $db->query("SELECT * FROM illness ");
    $illnesses = $rs->fetchAll();

foreach($illnesses as $ill)          
echo  $ill[$current_lang.'_title'];
/*i am branch!!*/
?>


