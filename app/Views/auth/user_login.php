<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Digital Voting System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
            color: white;
            font-size: 32px;
            font-weight: 600;
        }

        .header .icon {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: #4A90E2;
            font-size: 24px;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            padding: 12px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .back-button:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .login-container {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            text-align: center;
        }

        .login-title {
            color: #4A90E2;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .login-subtitle {
            color: #666;
            font-size: 16px;
            margin-bottom: 40px;
        }

        .form-group {
            margin-bottom: 25px;
            text-align: left;
        }

        .form-label {
            display: block;
            color: #333;
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-input {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: #4A90E2;
        }

        .login-button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #4A90E2, #357ABD);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(74, 144, 226, 0.3);
        }

        .forgot-password {
            color: #4A90E2;
            text-decoration: none;
            font-size: 14px;
            margin-bottom: 30px;
            display: inline-block;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 30px 0;
            color: #999;
            font-size: 14px;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e0e0e0;
        }

        .divider span {
            padding: 0 20px;
        }

        .signup-link {
            color: #666;
            font-size: 14px;
        }

        .signup-link a {
            color: #4A90E2;
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .login-container {
                padding: 30px 25px;
                margin: 0 10px;
            }

            .header {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <button class="back-button" onclick="history.back()">← Back</button>

    <div class="header">
        <div class="icon">✓</div>
        Digital Voting System
    </div>

    <div class="login-container">
        <h1 class="login-title">Welcome Back</h1>
        <p class="login-subtitle">Sign in to cast your vote</p>

        <form method="post" action="<?= base_url('/login') ?>">
            <div class="form-group">
                <label class="form-label" for="email">Email Address</label>
                <input type="email" name="email" id="email" class="form-input" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-input" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="login-button">LOGIN TO VOTE</button>
        </form>

        <div class="divider">
            <span>or</span>
        </div>

        <p class="signup-link">
            Don't have an account? <a href="<?= base_url('/signin') ?>">Register to Vote</a>
        </p>
    </div>
</body>
</html>
