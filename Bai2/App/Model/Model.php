<?php
include 'Data.php';

function get_course(): array
{
    global $course;
    return array_values($course);
}
get_course();

function find_by_block($block)
{
    global $course;
    return array_key_exists($block, $course) ? $course[$block] : "invalid";
}

?>