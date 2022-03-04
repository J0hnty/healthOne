<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/home">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">sportapparaat</a>
                </li>
                <?php if (isset($_SESSION['user']->role) && $_SESSION['user']->role == 'admin'):?>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">beheer</a>
                    </li>
                <?php endif?>
                <?php if (isset($_SESSION['user']->role)):?>
                    <li class="nav-item">
                        <a class="nav-link" href="/memberProfile">profile</a>
                    </li>
                <?php endif?>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php if ($_SESSION == []): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/login">inloggen</a>
                </li>

                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">uitloggen</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>