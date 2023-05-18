<?php
include('conf/conf.php');
if(isset($_POST['cp'])){
    $select = mysql_query("SELECT Ville FROM cp WHERE CP = '".$_POST['cp']."'")or die(mysql_error());
    $option = '';
    while($query = mysql_fetch_assoc($select)){
        if(empty($option)){
            $option = ucfirst(strtolower($query['Ville']));
        }
        else{
            $option = $option.'/'.ucfirst(strtolower($query['Ville']));
        }
    }
    echo $option;
    //echo ucfirst(strtolower($query['Ville']));
}
?>