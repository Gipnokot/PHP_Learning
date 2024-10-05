function findNeedle($haystack) {
    $index = array_search("needle", $haystack);
    if ($index !== false) {
        return "found the needle at position {$index}";
    } else {
        return "needle not found";
    }
}
