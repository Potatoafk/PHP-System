<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Voting System</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@300;400;600&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --voting-primary: #1a73e8;
            --voting-secondary: #4285f4;
            --voting-dark: #0d47a1;
            --voting-light: #e8f0fe;
            --voting-accent: #34a853;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f9fa;
            min-height: 100vh;
        }

        .voting-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                linear-gradient(rgba(26, 115, 232, 0.1), rgba(13, 71, 161, 0.2)),
                url('https://via.placeholder.com/1920x1080?text=Digital+Voting+System');
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            z-index: -1;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: var(--voting-primary);
        }

        .nav-link {
            color: #333;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--voting-primary);
        }

        .hero-section {
            padding: 6rem 0;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            margin-top: 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Montserrat', sans-serif;
            color: var(--voting-dark);
        }

        .lead {
            color: #555;
            font-weight: 300;
            font-size: 1.2rem;
        }

        .btn-voting {
            background-color: var(--voting-primary);
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }

        .btn-voting:hover {
            background-color: var(--voting-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            color: white;
        }

        .btn-outline-voting {
            color: var(--voting-primary);
            border: 2px solid var(--voting-primary);
            background-color: transparent;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }

        .btn-outline-voting:hover {
            background-color: var(--voting-primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .profile-icon {
            color: var(--voting-primary);
            transition: all 0.3s ease;
        }

        .profile-icon:hover {
            color: var(--voting-dark);
            transform: scale(1.1);
        }

        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--voting-primary);
            margin-bottom: 1.5rem;
        }

        .stats-section {
            background-color: var(--voting-light);
            padding: 4rem 0;
            margin: 4rem 0;
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--voting-primary);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #555;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cta-section {
            background: linear-gradient(135deg, var(--voting-primary) 0%, var(--voting-dark) 100%);
            padding: 4rem 0;
            color: white;
            border-radius: 20px;
            margin: 4rem 0;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 3rem 0;
        }

        .footer-link {
            color: #ccc;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: white;
            text-decoration: none;
        }

        .social-icon {
            font-size: 1.5rem;
            margin-right: 1rem;
            color: white;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-5px);
            color: var(--voting-light);
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>

<body>
    <div class="voting-bg"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">
                <i class="bi bi-check2-square me-2"></i>
                Digital Voting System
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container">
        <div class="hero-section text-center">
            <h1 class="display-3 fw-bold mb-4 floating">
                <i class="bi bi-check2-circle me-2"></i>
                Digital Voting System
            </h1>
            <p class="lead mb-5">"It's not the voting that's democracy; it's the counting."
                <br> - Tom Stoppard.
            </p>
            <div class="d-grid gap-4 d-sm-flex justify-content-sm-center">
                <a href="<?= base_url('/login') ?>" class="btn btn-outline-voting">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Login to Vote
                </a>
                <a href="<?= base_url('/signin') ?>" class="btn btn-outline-voting">
                    <i class="bi bi-person-plus me-2"></i>Register to Vote
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container my-5">
        <h2 class="text-center mb-5">Why Choose Our Digital Voting System?</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="text-center">
                        <i class="bi bi-shield-check feature-icon"></i>
                        <h4>Secure Voting</h4>
                        <p>Our system uses advanced encryption and security measures to ensure your vote remains private
                            and tamper-proof.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="text-center">
                        <i class="bi bi-laptop feature-icon"></i>
                        <h4>Vote Anywhere</h4>
                        <p>Cast your vote from anywhere using your computer, tablet, or smartphone. No more waiting in
                            long lines.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="text-center">
                        <i class="bi bi-graph-up feature-icon"></i>
                        <h4>Result Viewing</h4>
                        <p>View election results in as soon as the voting period closes. Transparent and accurate counting.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="stat-item">
                        <div class="stat-number">60 temp</div>
                        <div class="stat-label">Registered Voters</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-item">
                        <div class="stat-number">250+</div>
                        <div class="stat-label">Elections Conducted</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Support Available</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container">
        <div class="cta-section text-center">
            <h2 class="mb-4 text-white">Ready to Make Your Voice Heard?</h2>
            <p class="lead mb-4 text-white">Join thousands of citizens who are participating in our democratic process through
                secure digital voting.</p>
            <a href="<?= base_url('/') ?>" class="btn btn-light btn-lg">
                <i class="bi bi-person-plus me-2"></i>Register Today
            </a>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="container my-5">
        <h2 class="text-center mb-5">How It Works</h2>
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-4"
                    style="width: 80px; height: 80px;">
                    <i class="bi bi-person-plus fs-1"></i>
                </div>
                <h4>Register</h4>
                <p>Create an account and verify your identity with your voter ID.</p>
            </div>
            <div class="col-md-3 text-center">
                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-4"
                    style="width: 80px; height: 80px;">
                    <i class="bi bi-calendar-check fs-1"></i>
                </div>
                <h4>Find Elections</h4>
                <p>Browse upcoming elections that you're eligible to participate in.</p>
            </div>
            <div class="col-md-3 text-center">
                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-4"
                    style="width: 80px; height: 80px;">
                    <i class="bi bi-check2-square fs-1"></i>
                </div>
                <h4>Cast Your Vote</h4>
                <p>Select your preferred candidates securely from anywhere.</p>
            </div>
            <div class="col-md-3 text-center">
                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-4"
                    style="width: 80px; height: 80px;">
                    <i class="bi bi-graph-up fs-1"></i>
                </div>
                <h4>View Results</h4>
                <p>Access real-time results once the voting period closes.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="container my-5">
        <h2 class="text-center mb-5">What Voters Say</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="mb-3 text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="card-text">"The digital voting system made it so easy to participate in our local
                            election. I was able to vote from home during my lunch break!"</p>
                        <div class="d-flex align-items-center mt-3">
                            <div>
                                <h6 class="mb-0">Sample Voter 1</h6>
                                <small class="text-muted">Registered Voter</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="mb-3 text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="card-text">"As someone with mobility issues, this system has been a game-changer. I no
                            longer have to worry about transportation to polling stations."</p>
                        <div class="d-flex align-items-center mt-3">
                            <div>
                                <h6 class="mb-0">Sample Voter 2</h6>
                                <small class="text-muted">Registered Voter</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="mb-3 text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="card-text">"I was skeptical at first, but the security measures and verification steps
                            gave me confidence that my vote was secure and counted correctly."</p>
                        <div class="d-flex align-items-center mt-3">
                            <div>
                                <h6 class="mb-0">Sample Voter 3</h6>
                                <small class="text-muted">Registered Voter</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3 text-white">Digital Voting System</h5>
                    <p>Making democracy accessible to everyone through secure, convenient digital voting solutions.</p>
                    <div class="mt-3">
                        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <h5 class="mb-3 text-white">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="footer-link">Home</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Elections</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Results</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">About Us</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3 text-white">Support</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="footer-link">Help Center</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">FAQs</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Privacy Policy</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Terms of Service</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Security Information</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3 text-white">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-geo-alt me-2"></i> 123 Democracy Ave, Cityville</li>
                        <li class="mb-2"><i class="bi bi-envelope me-2"></i> support@votingsystem.com</li>
                        <li class="mb-2"><i class="bi bi-telephone me-2"></i> (555) 123-4567</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-4 bg-light">
            <div class="text-center">
                <p class="mb-0">© 2025 Digital Voting System. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>
