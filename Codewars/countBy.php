function countBy($x, $n) 
{
    $z = [];
    for ($i = 1; $i <= $n; $i++) {
      $z[] = $i * $x;
    }
    return $z;
}
