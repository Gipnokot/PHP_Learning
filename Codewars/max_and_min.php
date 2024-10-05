function highAndLow($numbers)
{
  $num = explode(" ", $numbers);
  $max = max($num);
  $min = min($num);
  return "{$max} {$min}";
}
