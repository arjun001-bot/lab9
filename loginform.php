<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: welcome.php");
    exit();
}

$title = "Login";
include './includes/header.php';
?>

<div class="container mt-5">
    <h2 class="mb-4">Login</h2>

    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger">
            <?php echo $_GET['error']; ?>
        </div>
    <?php endif; ?>

    <form method="post" action="login.php">

        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
        </div>

        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
        </div>

        <button type="submit" class="btn btn-success">Login</button>

    </form>
</div>

<?php include './includes/footer.php'; ?>