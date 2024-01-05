<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab1.2</title>
</head>

<body>
    <h1>
        <?= $page_content ?>
    </h1>
    <form action="">
        <select name="block" id="">
            <?php foreach ($course as $key => $value): ?>
                <option value="<?= $key ?>">
                    <?= $value ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Tìm khóa học</button>
    </form>


</body>

</html>