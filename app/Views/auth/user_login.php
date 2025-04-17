<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Voting System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row min-vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-5 col-lg-4">
                <div class="card shadow border-0 rounded-3">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h3 class="mb-0">Voting System</h3>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="text-center mb-4">Sign In</h4>
                        
                        <form action="login_process.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Email Address</label>
                                <input type="text" class="form-control" id="username" name="email" placeholder="Enter your username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        
                        <div class="text-center mt-3">
                            <p class="mb-0">Don't have an account? <a href="<?= base_url('/register') ?>" class="text-primary">Register</a></p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <small class="text-muted">© 2025 Voting System. All rights reserved.</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous" defer></script>
</body>
</html>