function bmi($weight, $height)
{
    $bmi = $weight / pow($height, 2);

    if ($bmi <= 18.5) 
    {
        return "Underweight";
    } elseif ($bmi <= 25.0) 
    {
        return "Normal";
    } elseif ($bmi <= 30.0) 
    {
        return "Overweight";
    } else 
    {
        return "Obese";
    }
}
