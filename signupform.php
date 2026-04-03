<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: welcome.php");
    exit();
}

$title = "Sign Up";
include './includes/header.php';
?>

<div class="container mt-5">
    <h2 class="mb-4">Sign Up</h2>

    <form method="post" action="signup.php">

        <div class="row">
            <div class="col-md-6 mb-3">
                <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
            </div>
        </div>

        <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>

        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="col-md-6 mb-3">
                <input type="password" id="confirm_password" class="form-control" placeholder="Confirm Password" required>
            </div>
        </div>

        <small id="passwordMessage" class="text-danger"></small>

        <div class="mb-3">
            <input type="text" name="address" class="form-control" placeholder="Address">
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <input type="text" name="city" class="form-control" placeholder="City">
            </div>
            <div class="col-md-4 mb-3">
                <select name="province" class="form-control">
                    <option value="">Choose Province</option>
                    <option>Ontario</option>
                    <option>Alberta</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" name="postal" class="form-control" placeholder="Postal Code">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

<script src="js/passwordcheck.js"></script>

<?php include './includes/footer.php'; ?>