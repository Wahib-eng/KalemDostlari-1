```php id="2u0t6k"
<?php

session_start();

session_unset();

session_destroy();

header("Location: login.php");
exit();
?>
```
