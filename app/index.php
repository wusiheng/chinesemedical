<?php
require_once 'init.php';



$rs = $db->query("SELECT * FROM system ");
    $system = $rs->fetchAll();

          echo  "".$system[0][$current_lang.'_name'];

?>


