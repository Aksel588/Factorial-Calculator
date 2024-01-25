<?php
session_start();

if (isset($_POST['submit'])) {
    $num = $_POST['num'];

    function factorial($n)
    {
        if ($n === 0 || $n === 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    $result = factorial($num);
    $_SESSION['num'] = $result;
    header("location:index.php");
} else {
}
?>
