<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Connexion</title>
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
                    justify-content: center;
                    align-items: center;
                    padding: 20px;
                }

                .login-container {
                    background: white;
                    padding: 40px;
                    border-radius: 20px;
                    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
                    width: 100%;
                    max-width: 400px;
                    animation: slideIn 0.5s ease-out;
                }

                @keyframes slideIn {
                    from {
                        opacity: 0;
                        transform: translateY(-30px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                .login-header {
                    text-align: center;
                    margin-bottom: 30px;
                }

                .login-header h1 {
                    color: #333;
                    font-size: 28px;
                    margin-bottom: 10px;
                }

                .login-header p {
                    color: #666;
                    font-size: 14px;
                }

                .form-group {
                    margin-bottom: 25px;
                }

                .form-group label {
                    display: block;
                    color: #333;
                    font-weight: 600;
                    margin-bottom: 8px;
                    font-size: 14px;
                }

                .form-group input {
                    width: 100%;
                    padding: 12px 15px;
                    border: 2px solid #e1e1e1;
                    border-radius: 10px;
                    font-size: 15px;
                    transition: all 0.3s ease;
                    outline: none;
                }

                .form-group input:focus {
                    border-color: #667eea;
                    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
                }

                .form-group input::placeholder {
                    color: #aaa;
                }

                .remember-forgot {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 25px;
                    font-size: 14px;
                }

                .remember-me {
                    display: flex;
                    align-items: center;
                    gap: 8px;
                }

                .remember-me input[type="checkbox"] {
                    width: 18px;
                    height: 18px;
                    cursor: pointer;
                    accent-color: #667eea;
                }

                .remember-me label {
                    color: #666;
                    cursor: pointer;
                }

                .forgot-password {
                    color: #667eea;
                    text-decoration: none;
                    font-weight: 500;
                    transition: color 0.3s ease;
                }

                .forgot-password:hover {
                    color: #764ba2;
                }

                .submit-btn {
                    width: 100%;
                    padding: 14px;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    color: white;
                    border: none;
                    border-radius: 10px;
                    font-size: 16px;
                    font-weight: 600;
                    cursor: pointer;
                    transition: transform 0.2s ease, box-shadow 0.3s ease;
                }

                .submit-btn:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
                }

                .submit-btn:active {
                    transform: translateY(0);
                }

                .signup-link {
                    text-align: center;
                    margin-top: 25px;
                    color: #666;
                    font-size: 14px;
                }

                .signup-link a {
                    color: #667eea;
                    text-decoration: none;
                    font-weight: 600;
                    transition: color 0.3s ease;
                }

                .signup-link a:hover {
                    color: #764ba2;
                }

                @media (max-width: 480px) {
                    .login-container {
                        padding: 30px 20px;
                    }

                    .login-header h1 {
                        font-size: 24px;
                    }
                }
            </style>
        </head>
        <body>
            <div class="login-container">
                <div class="login-header">
                    <h1>Connexion</h1>
                    <p>Bienvenue ! Connectez-vous à votre compte</p>
                </div>

                <form action="/app/controleur1.php" method="POST">
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input 
                            type="text" 
                            id="login" 
                            name="login" 
                            placeholder="Entrez votre identifiant"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="Entrez votre mot de passe"
                            required
                        >
                    </div>

                    <button type="submit" class="submit-btn">Se connecter</button>

                </form>
            </div>
        </body>
    </html>

    <!-- <?php if(isset($_GET['err'])) : ?> -->
        <!-- <p style="color: red;"> -->
            <!-- <?= htmlspecialchars($_GET['err']); ?> -->
        <!-- </p> -->
    <!-- <?php endif; ?> -->