<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Digital Voting System</title>
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

        .signup-container {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            text-align: center;
        }

        .signup-title {
            color: #4A90E2;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .signup-subtitle {
            color: #666;
            font-size: 16px;
            margin-bottom: 40px;
        }

        .form-group {
            margin-bottom: 25px;
            text-align: left;
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-row .form-group {
            flex: 1;
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

        .form-select {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 16px;
            background: white;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }

        .form-select:focus {
            outline: none;
            border-color: #4A90E2;
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 30px;
            text-align: left;
        }

        .checkbox-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #4A90E2;
            margin-top: 2px;
            flex-shrink: 0;
        }

        .checkbox-group label {
            font-size: 14px;
            color: #666;
            line-height: 1.4;
        }

        .checkbox-group a {
            color: #4A90E2;
            text-decoration: none;
        }

        .checkbox-group a:hover {
            text-decoration: underline;
        }

        .signup-button {
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

        .signup-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(74, 144, 226, 0.3);
        }

        .signup-button:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
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

        .login-link {
            color: #666;
            font-size: 14px;
        }

        .login-link a {
            color: #4A90E2;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .signup-container {
                padding: 30px 25px;
                margin: 0 10px;
            }

            .header {
                font-size: 24px;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
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

    <div class="signup-container">
        <h1 class="signup-title">Create Account</h1>
        <p class="signup-subtitle">Register to participate in digital voting</p>

        <form method="post" action="<?= base_url('/signin') ?>">
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label" for="firstName">First Name</label>
                    <input type="text" name="first_name" id="firstName" class="form-input" placeholder="John" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="lastName">Last Name</label>
                    <input type="text" name="last_name" id="lastName" class="form-input" placeholder="Doe" required>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="email">Email Address</label>
                <input type="email" name="email" id="email" class="form-input" placeholder="john.doe@example.com" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="phone">Phone Number</label>
                <input type="tel" name="phone_no" id="phone" class="form-input" placeholder="+1 (555) 123-4567" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="dateOfBirth">Date of Birth</label>
                <input type="date" name="date_of_birth" id="dateOfBirth" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-input" placeholder="Enter secure password" minlength="8" required>
            </div>

            <!-- <div class="form-group">
                <label class="form-label" for="confirmPassword">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirmPassword" class="form-input" placeholder="Confirm your password" minlength="8" required>
            </div> -->

            <div class="checkbox-group">
                <input type="checkbox" name="agree_terms" id="terms" required>
                <label for="terms">
                    I agree to the <a href="#" target="_blank">Terms of Service</a> and <a href="#" target="_blank">Privacy Policy</a>, and confirm that I am eligible to vote in this jurisdiction.
                </label>
            </div>

            <button type="submit" class="signup-button">REGISTER TO VOTE</button>
        </form>

        <div class="divider">
            <span>or</span>
        </div>

        <p class="login-link">
            Already have an account? <a href="<?= base_url('/login') ?>">Login to Vote</a>
        </p>
    </div>
</body>
</html>
