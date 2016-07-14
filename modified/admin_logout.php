

<?php
session_start();
unset($_SESSION['seas_admin']);
unset($_SESSION['q_id'] );
session_destroy;
header("location:/nitesh/modified/admin_login.html");
?>
