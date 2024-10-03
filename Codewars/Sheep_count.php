function countSheep($arr)
{
  $count = 0;
  foreach ($arr as $sheep) 
  {
    if ($sheep == true)
    {
      $count++;
    }
  }
  return $count;
}
