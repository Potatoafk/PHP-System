<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/api/placeholder/30/30" alt="Logo" class="d-inline-block align-text-top me-2">
                VoteSystem
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-outline-light me-2" href="<?= base_url('/login') ?>">Login</a>
                    <a class="btn btn-light" href="<?= base_url('/register') ?>">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-primary text-white py-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">Digital Voting System</h1>
                    <p class="lead mb-4">Secure, transparent, and user-friendly digital voting platform for organizational elections</p>
                    <div class="d-grid gap-2 d-md-flex">
                        <button class="btn btn-light btn-lg px-4">Get Started</button>
                        <button class="btn btn-outline-light btn-lg px-4">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container my-5">
        <!-- Features Section -->
        <div class="row g-4 mb-5">
            <div class="col-12 text-center mb-4">
                <h2 class="display-6">Key Features</h2>
                <p class="lead text-muted">Everything you need for secure digital voting</p>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 48px; height: 48px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                            </svg>
                        </div>
                        <h3 class="h5 mb-3">Secure Authentication</h3>
                        <p class="text-muted mb-0">Multi-factor authentication and encrypted data transmission</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 48px; height: 48px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                            </svg>
                        </div>
                        <h3 class="h5 mb-3">Anonymous Voting</h3>
                        <p class="text-muted mb-0">Maintain voter privacy while ensuring vote verification</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 48px; height: 48px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
                                <path d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </div>
                        <h3 class="h5 mb-3">Real-time Results</h3>
                        <p class="text-muted mb-0">Instant vote counting with complete transparency</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Roles Section -->
        <div class="row mb-5">
            <div class="col-12 text-center mb-4">
                <h2 class="display-6">User Roles</h2>
                <p class="lead text-muted">Tailored access for every stakeholder</p>
            </div>
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col" class="px-4">Role</th>
                                        <th scope="col" class="px-4">Capabilities</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4"><strong>Voters</strong></td>
                                        <td class="px-4">Secure voting from any device</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4"><strong>Administrators</strong></td>
                                        <td class="px-4">Complete election management and oversight</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4"><strong>Candidates</strong></td>
                                        <td class="px-4">Profile management and result tracking</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4"><strong>Auditors</strong></td>
                                        <td class="px-4">Election verification and monitoring</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="row">
            <div class="col-12">
                <div class="bg-primary text-white rounded-3 p-5 text-center">
                    <h2 class="h3 mb-3">Ready to get started?</h2>
                    <p class="lead mb-4">Set up your first election in minutes</p>
                    <a href="base_url('/register')" class="btn btn-light btn-lg px-4">Create an Account</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-4 mt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5 class="mb-3">VoteSystem</h5>
                    <p class="text-muted small mb-0">Secure and transparent digital voting solutions for organizations of all sizes.</p>
                </div>
                <div class="col-md-2">
                    <h6 class="mb-3">Product</h6>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-decoration-none text-muted">Features</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Security</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Pricing</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h6 class="mb-3">Company</h6>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-decoration-none text-muted">About</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Blog</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h6 class="mb-3">Support</h6>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-decoration-none text-muted">Help Center</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Contact</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Status</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h6 class="mb-3">Legal</h6>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-decoration-none text-muted">Privacy</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Terms</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Security</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-muted mb-0">© 2025 VoteSystem. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous" defer></script>
</body>
</html>