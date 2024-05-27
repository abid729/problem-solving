<?php 
// check 2 string is matched or not

 function ex1(){
    $a = 'Hello World';
    $b = 'Hello World';

    if($a == $b) {
        echo 'matched';
    } else {
        echo 'not matched';
    }
}


// check character exist in the string or not 

function ex2(){

    $str = 'Hello World';
    $char = 'World';
    $result = strpos($str,$char);
    if ($result !== false) {
        echo "The character '$result' is found in the string.\n";
    } else {
        echo "The character '$result' is not found in the string.\n"; 
    }
}


// Check last character location and character 

function ex3() {
    $str = 'Hello World';
    $strArr = str_split($str);
    $ch = count($strArr);
    print_r($strArr[$ch-2]);

}

//re arrange string and match
function ex4(){
    
    $str1 = 'CAT';
    $str2 = 'TAC';
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    
    if ($len1 !== $len2){
        echo 'not ok';
    }

    if ($str1 === $str2){
        echo 'ok';
    }
    
    for($i = 0; $i < $len1; $i++){
        if($str1[$i] !== $str2[$i]){
            $diff[] = $i;
        }
    }
  
    for($j = 0; $j <= $len1; $j++){
        $str2[$j] = ($str1[$j]);
      
    }
    print_r(($str1));
    echo '</br> ';
    print_r(($str2));

}

//even odd seggregate   

function ex5(){
    $arr = [7, 2, 9, 4, 6, 1, 3, 8, 5];
    $j= 0;
    for($i = 0; $i<= count($arr) -1; $i++){
        if($arr[$i] % 2 === 0){
            $even[$j++] = $arr[$i];
        } else {
            $odd[$j++] = $arr[$i];
        }
    }
    print_r(array_merge($even,$odd));
}



//max to min array

function ex6(){
    $arr = [7, 2, 9, 4, 6, 1, 3, 8, 5];
    $j= max($arr);
    $s= 0;
    // print_r(/sort($arr));
    for($i = 0; $i<= count($arr) -1; $i++){
        
        if($arr[$i] <= $j){
            $even[$s++] = $arr[$i];
            $j = $arr[$i];
        }
    }
    // print_r(($even));
}



// add + in specifec location in the string

 function ex7(){
      
      $str = 'abcdef';
      $pos = [1,2,3];
      sort($pos);
      $n = strlen($str);
      $newString = "";
      $posIndex = 0;
      $positionsCount = count($pos);
      $strArr = str_split($str);

      for($i = 0; $i <= $n; $i++){
      
        if($i == $pos[$posIndex] && $posIndex < $positionsCount){
          $newString .= '+';
          $posIndex++;
        }

        if ($i < $n) {
          // print_r($i);
          $newString .= $str[$i];
        }
      }
       print_r($newString);
 }

 //remove a specifec character from string

 function ex8(){
  $str = 'abcdef';
  $rm= 'b';
  $n = strlen($str);
  $strArr = str_split($str);
  for($i = 0; $i <= $n; $i++){
    if($strArr[$i] != $rm){
      $arrs[] = $strArr[$i];
    }
  }
  print_r(implode('',$arrs));
  
 }

 ex8();

?>
