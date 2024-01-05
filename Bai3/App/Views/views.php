<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab1.3</title>
</head>

<body>



    <?php
    if ($user !== null) {
        echo $user['firstname'] . " " . $user['lastname'];
    }
    ?>
    <form method="post">
        <input type="email" name="email">
        <input type="submit">
    </form>
</body>

</html>