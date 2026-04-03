<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar navbar-expand-lg" style="background-color: #6c757d;">
    <div class="container-fluid">


        <a class="navbar-brand text-white fw-bold" href="algoma.php">
            Algoma University
        </a>


        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link fw-bold"
                        href="index.php"
                        style="color:#00cfff !important;">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-bold"
                        href="labsolutions.php"
                        style="color:#00cfff !important;">
                        Lab Solutions
                    </a>
                </li>

            </ul>


            <div class="d-flex gap-2">

                <a href="signupform.php" class="btn btn-info text-dark fw-bold">
                    Sign Up
                </a>

                <a href="loginform.php" class="btn btn-info text-dark fw-bold">
                    Login
                </a>

                <a href="logout.php" class="btn btn-info text-dark fw-bold">
                    Logout
                </a>

            </div>
        </div>

    </div>
</nav>