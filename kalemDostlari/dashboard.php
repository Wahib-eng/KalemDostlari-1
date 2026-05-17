```php id="im5a9z"
<?php

session_start();

if (!isset($_SESSION['user_id'])) {

    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="assets/css/style.css">

</head>

<body>

<div class="container py-5">

    <div class="support-card text-center">

        <h1>

            Welcome,
            <?= $_SESSION['user_name']; ?>

        </h1>

        <p class="mt-3">

            You are successfully logged in.

        </p>

        <a href="logout.php"
            class="btn btn-main mt-4">

            Logout

        </a>

    </div>

</div>

</body>
</html>
```
