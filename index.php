<?php
if(isset($_GET['nmbr']) &&isset($_GET['networks']) && isset($_GET['strengths'])){
    //nmbr= number of wifi networks available
    //networks= names of wifi networks seperated by a comma(%2C)
    //strengths= strengths of the available WiFi networks
    
    //counting networks
    networks= explode($_GET['networks'], '%2C');
    strengths= explode($_GET['strengths'], '%2C');

}

?>
