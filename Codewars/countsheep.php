function countsheep($num){
  $res = "";
  for ($i = 1; $i <= $num; $i++) {
    $res .= "$i sheep...";
  }
  return $res;
}
