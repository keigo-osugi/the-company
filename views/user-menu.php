<nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px;">
    <div class="container">
        <a href="dashboard.php" class="navbar-brand">
            <h1 class="h4">The Company</h1>
        </a>
        <ul class= "navbar-nav">
            <li class="nav-itme">
                <a href="#" class="nav-link">
                    <?= $_SESSION['username']?>
                </a>
            </li>
            <li class="nav-item">
                <form action="../actions/logout.php" class="d-flex ms-2">
                    <button type="submit" class="nav-link text-danger bg-transparent border-0">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>