<!-- github.com/oguiisouza | guilhermesc.com -->
<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: index.php");
?>
<!-- github.com/oguiisouza | guilhermesc.com -->