<!-- no need for the session_start() -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>
    <div class="container">

    <p>Hello <?php echo $_SESSION['user_first_name_login'] . " " . $_SESSION['user_last_name_login'];  ?> You're now connected.</p>
    <a href="index.php?page=logout">do you want to Lod out ? </a>
    </div>
</body>

</html>