<?php 

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
        // print_r($i);
        // print_r($pos[$i]);
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

 function ex8(){
  $str = 'abcdef';
  $rm= 'd';
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
