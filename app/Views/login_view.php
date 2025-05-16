<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LOGIN</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --neon-pink: #ff00ff;
            --neon-blue: #00ffff;
            --neon-yellow: #ffff00;
            --neon-green: #00ff9f;
            --dark-bg: #0d0221;
            --darker-bg: #09021a;
        }
        
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Orbitron', sans-serif;
            background-image: url('/img/wallpaper.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-color: var(--dark-bg);
            background-position: center;
            color: white;
            position: relative;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(0deg, rgba(255, 0, 255, 0.1) 1px, transparent 1px),
                            linear-gradient(90deg, rgba(255, 0, 255, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
            z-index: -1;
        }
        
        .login-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            padding: 40px;
            background: rgba(9, 2, 26, 0.85);
            backdrop-filter: blur(5px);
            box-sizing: border-box;
            box-shadow: 0 0 25px var(--neon-blue), 0 0 5px var(--neon-pink);
            border-radius: 10px;
            border: 1px solid var(--neon-blue);
            overflow: hidden;
        }
        
        .login-container::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--neon-blue), var(--neon-pink), var(--neon-green), var(--neon-yellow));
            animation: neonFlow 3s infinite linear;
        }
        
        @keyframes neonFlow {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }
        
        .login-container h2 {
            text-align: center;
            color: var(--neon-blue);
            text-shadow: 0 0 10px var(--neon-blue);
            font-size: 2rem;
            margin-bottom: 30px;
            letter-spacing: 3px;
        }
        
        .inputan {
            position: relative;
            margin-bottom: 30px;
        }
        
        .inputan input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            border: none;
            border-bottom: 2px solid var(--neon-pink);
            outline: none;
            background: transparent;
            transition: 0.3s;
            font-family: 'Orbitron', sans-serif;
        }
        
        .inputan label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: var(--neon-blue);
            pointer-events: none;
            transition: 0.5s;
        }
        
        .inputan input:focus ~ label,
        .inputan input:valid ~ label {
            top: -20px;
            left: 0;
            color: var(--neon-green);
            font-size: 12px;
            text-shadow: 0 0 5px var(--neon-green);
        }
        
        .action-button {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.2rem;
            padding: 12px;
            width: 100%;
            font-weight: 500;
            background-color: var(--neon-blue);
            border-radius: 6px;
            color: var(--darker-bg);
            border: 0;
            cursor: pointer;
            letter-spacing: 2px;
            box-shadow: 0 0 10px var(--neon-blue);
            transition: all 0.3s ease;
        }
        
        .action-button:hover {
            background-color: var(--neon-green);
            box-shadow: 0 0 15px var(--neon-green);
            transform: translateY(-2px);
        }
        
        .action-button-cancel {
            margin-top: 15px;
            font-family: 'Orbitron', sans-serif;
            font-size: 1.2rem;
            padding: 12px;
            width: 100%;
            font-weight: 500;
            background-color: transparent;
            border-radius: 6px;
            color: var(--neon-pink);
            border: 2px solid var(--neon-pink);
            cursor: pointer;
            letter-spacing: 2px;
            box-shadow: 0 0 5px var(--neon-pink);
            transition: all 0.3s ease;
        }
        
        .action-button-cancel:hover {
            background-color: var(--neon-pink);
            color: var(--darker-bg);
            box-shadow: 0 0 15px var(--neon-pink);
            transform: translateY(-2px);
        }
        
        .alert-danger {
            background-color: rgba(220, 53, 69, 0.2);
            border: 1px solid #dc3545;
            color: #ff6b6b;
            text-shadow: 0 0 5px #ff0000;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>LOGIN</h2>
        <form action="" method="POST">
            <?php if(session()->getFlashdata('error')) {?>
                <div class="alert alert-danger">
                    <?php echo session()->getFlashdata('error') ?>
                </div>
            <?php } ?>
            <div class="inputan">
                <input type="text" id="inputUsername" name="member_username" required value="<?php echo session()->getFlashdata('member_username') ?>">
                <label>Username</label>
            </div>
            <div class="inputan">
                <input type="password" id="inputPassword" name="member_password" required>
                <label>Password</label>
            </div>
            <div class="action">
                <button type="submit" name="login" class="action-button" value="LOGIN">LOGIN</button>
            </div>
        </form>
        <a href="<?= base_url('/'); ?>" style="text-decoration: none;">
            <button class="action-button-cancel">KEMBALI</button>
        </a>
    </div>
</body>
</html>