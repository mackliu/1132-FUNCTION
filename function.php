<style>
    *{
        font-family:'courier new';
    }
</style>

<?php
function starts($shape,$line){
switch($shape){
    case "正三角形":
    for($i=0;$i<$line;$i++){
    
        for($k=0;$k<$line-1-$i;$k++){
            echo "&nbsp;";
        }
    
        for($j=0;$j<(2*$i+1);$j++){
            echo "*";
        }
        echo "<br>";
    }
    break;
    case "菱形":
    for($i=0;$i<$line;$i++){
        if($i>floor($line/2)){
            $k1=$i-(floor($line/2));
            $j1=2*($i-(2*($i-(floor($line/2)))))+1;
        }else{
            $k1=(floor($line/2))-$i;
            $j1=(2*$i+1);
        }
    
        for($k=0;$k<$k1;$k++){
            echo "&nbsp;";
        }
    
        for($j=0;$j<$j1;$j++){
            echo "*";
        }
        echo "<br>";
    
    }
    break;  
}
}

?>