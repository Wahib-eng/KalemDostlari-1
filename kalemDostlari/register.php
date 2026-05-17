```php id="eb2fpr"
<?php

session_start();

require_once 'includes/connection.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (
        empty($full_name) ||
        empty($email) ||
        empty($password)
    ) {

        $message = "Please fill all fields.";

    } else {

        $check = $pdo->prepare(
            "SELECT * FROM users WHERE email = ?"
        );

        $check->execute([$email]);

        if ($check->rowCount() > 0) {

            $message = "Email already exists.";

        } else {

            $hashedPassword = password_hash(
                $password,
                PASSWORD_DEFAULT
            );

            $sql = $pdo->prepare(
                "INSERT INTO users(full_name,email,password)
                 VALUES(?,?,?)"
            );

            $sql->execute([
                $full_name,
                $email,
                $hashedPassword
            ]);

            header("Location: login.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Register</title>

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
                    Create Account
                </h2>

                <?php if($message): ?>

                    <div class="alert alert-warning">
                        <?= $message ?>
                    </div>

                <?php endif; ?>

                <form method="POST">

                    <div class="mb-3">

                        <label>Full Name</label>

                        <input type="text"
                            name="full_name"
                            class="form-control"
                            required>

                    </div>

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

                        Register

                    </button>

                </form>

                <p class="text-center mt-3">

                    Already have an account?

                    <a href="login.php">
                        Login
                    </a>

                </p>

            </div>

        </div>

    </div>

</div>

</body>
</html>
```
