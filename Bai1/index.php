<?php
echo "PC06366 - Lab1.1 <br>";

$course = [
    'spring 2024' => 'Javscript nâng cao',
    'summer 2024' => 'PHP1',
    'fall 2024' => 'PHP2'
];

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

$block = (!empty($_GET['block'])) ? $_GET['block'] : '';
$course_name = find_by_block($block);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab1.1</title>
</head>

<body>
    <h1>
        <?= $course_name ?>
    </h1>
    <form action="">
        <select name="block" id="">
            <?php foreach ($course as $key => $value): ?>
                <option value="<?= $key ?>">
                    <?= $value ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">tim khoa hoc</button>
    </form>


</body>

</html>