<?php
session_start();


if (!isset($_SESSION['user'])) {
    header("Location: loginform.php");
    exit();
}

$title = "Welcome";
include './includes/header.php';
?>

<div class="container mt-5">
    <h2>Welcome <?php echo $_SESSION['user']; ?></h2>
</div>

<?php include './includes/footer.php'; ?>