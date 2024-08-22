<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
}
else{
    $loggedin = false;
}

echo '
    <nav class="navbar navbar-expand bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/login/welcom.php">Laundary Service</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/login/welcom.php">Home</a>
                </li>';

if (!$loggedin) {
    echo '<li class="nav-item">
                    <a class="nav-link" href="/login/login.php">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/login/signup.php">SignUp</a>
                </li>';
}
if ($loggedin) {
    echo '<li class="nav-item">
                    <a class="nav-link" href="/login/logout.php">Logout</a>
                </li>
                <li>
                
                </li>'
                ;
}

echo '</ul>
            
        </div>
    </div>
</nav>
';
?>