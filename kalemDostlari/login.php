```php id="0f44z4"
<?php

session_start();

require_once 'includes/connection.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = $pdo->prepare(
        "SELECT * FROM users WHERE email = ?"
    );

    $sql->execute([$email]);

    $user = $sql->fetch();

    if ($user && password_verify(
        $password,
        $user['password']
    )) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['full_name'];
        $_SESSION['role'] = $user['role'];

        header("Location: dashboard.php");
        exit();

    } else {

        $message = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="assets/css/style.css">

</head>

<body>

<div class="container">

    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-5">

            <div class="support-card">

                <h2 class="text-center mb-4">

                    Welcome Back

                </h2>

                <?php if($message): ?>

                    <div class="alert alert-danger">

                        <?= $message ?>

                    </div>

                <?php endif; ?>

                <form method="POST">

                    <div class="mb-3">

                        <label>Email</label>

                        <input type="email"
                            name="email"
                            class="form-control"
                            required>

                    </div>

                    <div class="mb-3">

                        <label>Password</label>

                        <input type="password"
                            name="password"
                            class="form-control"
                            required>

                    </div>

                    <button class="btn btn-main w-100">

                        Login

                    </button>

                </form>

                <p class="text-center mt-3">

                    Don't have an account?

                    <a href="register.php">
                        Register
                    </a>

                </p>

            </div>

        </div>

    </div>

</div>

</body>
</html>
```
