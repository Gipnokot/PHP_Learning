function solution($nums) {
  if ($nums === null || empty($nums)) {
    return [];
  }
  else {
    sort($nums);
    return $nums;
  }
}
