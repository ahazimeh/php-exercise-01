<?php
function palindrom($string){
    $string = strtolower($string);
    for($i=0;$i<strlen($string)>>1;$i++){
        // $string[i]='a';
        if($string[i]!=$string[strlen($string)-i-1]){
            return false;
        }
        // echo false;
    }
    return true;
}

$x = palindrom("Anana");
if($x == true)
echo "true";
else
echo "false";

?>