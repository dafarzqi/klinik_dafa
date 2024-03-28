<!-- <?php
if(isset($_GET['pesan'])){
    echo "<strong>Password Tidak Sama!</strong>";
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .video-background video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(50%);
        }

        .glassmorphism-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            backdrop-filter: blur(5px);
        }
    </style>
</head>
<body>
    <div class="video-background">
        <video autoplay muted loop>
            <source src="video.mp4" type="video/mp4">
            
        </video>
    </div>
    <div class="min-h-screen flex items-center justify-center">
            <div class="glassmorphism-container p-8 max-w-md w-full">
                <h1 class="text-2xl font-semibold text-center mb-6 text-white">Daftar</h1>
                <form action="cek_register.php" method="post">
                <form class="user" action="cek_register.php" method="post">
                    <div class="mb-4">
                        <label for="username" class="block text-white text-sm font-medium mb-2" name="nama">Nama</label>
                        <input type="text" id="username" name="nama" class="w-full p-2 rounded-lg bg-white bg-opacity-25 focus:ring focus:ring-blue-500" placeholder="Enter your username" required>
                    </div>
                     <div class="mb-4">
                        <label for="username" class="block text-white text-sm font-medium mb-2">Username</label>
                        <input type="text" id="username" name="username" class="w-full p-2 rounded-lg bg-white bg-opacity-25 focus:ring focus:ring-blue-500" placeholder="Enter your username" required>
                    </div>
                    <div class="mb-6">
                        <label  class="block text-white text-sm font-medium mb-2">Alamat</label>
                        <input type="text" name="alamat" class="w-full p-2 rounded-lg bg-white bg-opacity-25 focus:ring focus:ring-blue-500" placeholder="alamat" required>
                    </div>
                    <div class="mb-6" class= "form-group" class="w-full p-2 rounded-lg bg-white bg-opacity-25 focus:ring focus:ring-blue-500">
                                    <select class="form-control" name="rule" class="form-control">
                                     <option value="1">admin</option>
                                      <option value="2">dokter</option>
                                      <option value="3">apoteker</option>
                                      <option value="4">pasien</option>
                                    </select>
                                </div>

                    <div class="mb-6">
                        <label for="password" class="block text-white text-sm font-medium mb-2">Password</label>
                        <input type="password" id="password" name="password" class="w-full p-2 rounded-lg bg-white bg-opacity-25 focus:ring focus:ring-blue-500" placeholder="Enter your password" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-white text-sm font-medium mb-2"></label>
                        <input type="password" id="password" name="rpassword" class="w-full p-2 rounded-lg bg-white bg-opacity-25 focus:ring focus:ring-blue-500" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="w-full py-2 bg-yellow-500 rounded-lg text-white font-semibold hover:bg-yellow-600 mb-4">Register akun</button>
                    <hr><a href="index.php">
                    <button type="button" class="w-full py-2 bg-blue-500 rounded-lg text-white font-semibold hover:bg-blue-600">login</button>
                </form>
                <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>

            </div>
        </div>
    </body>
</html>
