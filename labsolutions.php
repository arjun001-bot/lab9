<?php
session_start();


if (!isset($_SESSION['user'])) {
    header("Location: loginform.php");
    exit();
}

$title = "Lab Solutions";
include './includes/header.php';
?>

<div class="container mt-5">

    <h2 class="text-center text-danger mb-4">
        Lab Solutions Page
    </h2>

    <p class="text-center">
        Welcome <?php echo $_SESSION['user']; ?>, you can access your lab solutions here.
    </p>

</div>

<?php include './includes/footer.php'; ?>