<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #F8F9FA;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .landing-container {
            max-width: 600px;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="landing-container">
        <h1>Selamat Datang di To Do List App</h1>
        <p>Kelola tugas harian Anda dengan mudah dan efisien.</p>
        <a href="{{ route('register') }}" class="btn btn-primary">Daftar Sekarang</a>
        <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
    </div>
</body>
</html>
