<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/user-page') ?>">
                <i class="fas fa-vote-yea mr-2"></i>
                Voter Portal
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Profile Button that toggles modal -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#profileModal">
                            <img src="https://via.placeholder.com/30" class="rounded-circle mr-1" alt="">
                            <span>PROFILE</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/logout') ?>">
                            <span>LOGOUT</span>
                        </a>
                    </li>
            </div>
        </div>
    </nav>
