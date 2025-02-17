<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fafafa;
            margin: 0;
            padding: 0;
            color: #333;
        }
        nav {
            background-color: #ff4081;
            padding: 15px 0;
            display: flex;
            justify-content: center;
            gap: 30px;
            font-size: 18px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color: #e91e63;
        }
        .container {
            width: 80%;
            max-width: 900px;
            margin: 30px auto;
            padding: 30px;
            background-color: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            font-size: 2.4em;
            color: #ff4081;
            text-align: center;
            margin-bottom: 20px;
        }
        .about-me {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }
        .about-img {
            max-width: 250px;
            border-radius: 50%;
            margin-right: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .about-info {
            flex: 1;
        }
        .about-info p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        .success {
            color: green;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input, textarea {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 1em;
            box-sizing: border-box;
        }
        button {
            background-color: #ff4081;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.2em;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #e91e63;
        }
        textarea {
            height: 150px;
            resize: vertical;
        }
    </style>
</head>
<body>

    <nav>
        <a href="/?page=home">Home</a>
        <a href="/?page=about">About Me</a>
        <a href="/?page=contact">Contact</a>
    </nav>

    <div class="container">
        @if ($page == 'home')
            <h1>Welcome to My Website</h1>
            <p>Welcome to my online portfolio! Explore my work and learn more about me.</p>
        @elseif ($page == 'about')
            <h1>About Me</h1>
            <div class="about-me">
                <img src="yola.jpg" alt="Yola Atanza" class="about-img">
                <div class="about-info">
                    <p><strong>Nama:</strong> Yola Atanza</p>
                    <p><strong>Kelas:</strong> XI RPL 2</p>
                    <p><strong>Umur:</strong> 18</p>
                    <p><strong>Sekolah:</strong> SMK Taruna Bhakti</p>
                    <p><strong>Cita-cita:</strong> Menjadi Programmer</p>
                    <p><strong>Makanan Favorit:</strong> Dimsum</p>
                    <p><strong>Minuman Favorit:</strong> Cappuccino</p>
                </div>
            </div>
        @elseif ($page == 'contact')
            <h1>Contact Me</h1>
            @if (session('success'))
                <p class="success">{{ session('success') }}</p>
            @endif
            <form method="POST" action="/contact">
                @csrf
                <input type="email" name="email" placeholder="Masukkan email" required><br><br>
                <textarea name="message" placeholder="Masukkan pesan" required></textarea><br><br>
                <button type="submit">Kirim</button>
            </form>
        @endif
    </div>
    
</body>
</html>
