<?php

include 'test.php';




if( isset($_POST['nmbr']) && isset($_POST['networks']) && isset($_POST['strengths']) ) {
    //nmbr= number of wifi networks available
    //networks= names of wifi networks seperated by a comma(%2C)
    //strengths= strengths of the available WiFi networks

    
    $networks= explode( ',', $_POST['networks']);
    $strengths=explode( ',', $_POST['strengths']);
    if(count($strengths) >=2){ //for comparing
        
        //strengrths casting to int and finding the largest int
        $first= (((int) $strengths[0]) > ((int) $strengths[1])) ? ((int) $strengths[0]) : ((int) $strengths[1]);
        $second= (((int) $strengths[0]) > ((int) $strengths[1])) ? ((int) $strengths[1]) : ((int) $strengths[0]);
        foreach($strengths as $st){ 
            $istrength= (int) $st;
            if($istrength > $first){               
                $second= $first;
                $first = $istrength;
            }
        }
        $rooms[0]= $networks[array_search($first, $strengths)];
        $rooms[1]= $networks[array_search($second, $strengths)];
        $str= $rooms[0] . $rooms[1];
        $common=''; $common2='';
        for($i=0; $i< strlen($str); $i++){
            $common2=$str[$i];
            for($j=$i +1 ; $j< strlen($str); $j++){
                if($common2 == $str[$j]){
                    $common = $common2;
                }
            }
        }
        echo $common; // $common returns the room name
    }

}

?>
