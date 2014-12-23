<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User auth with Confide</title>
</head>
<body>
    <h1>Hello User</h1>
    <p>
        <?php echo (Confide::user() ?: 'visitor') ?>
    </p>
</body>
</html>