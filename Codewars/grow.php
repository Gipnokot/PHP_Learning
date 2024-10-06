function grow($a) {
    $result = 1;
    foreach ($a as $num) {
        $result *= $num;
    }
    return $result;
}
