<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community - KeebsForID</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#f5f5f5;
            color:#111;
        }

        .navbar{
            width:100%;
            background:white;
            padding:20px 60px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .logo{
            font-weight:700;
            letter-spacing:-1px;
            font-size:40px;
        }

        .menu{
            display:flex;
            gap:30px;
            align-items:center;
        }

        .menu a{
            text-decoration:none;
            color:#111;
        }

        .logout-btn{
            background:none;
            border:none;
            font-size:16px;
            font-weight:600;
            cursor:pointer;
        }

        .hero{
            padding:80px 60px 40px;
        }

        .hero h1{
            font-size:64px;
            margin-bottom:20px;
            line-height:1;
        }

        .hero p{
            max-width:700px;
            color:#555;
            font-size:18px;
            line-height:1.8;
        }

        .section{
            padding:20px 60px 80px;
        }

        .grid{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:25px;
        }

        .card{
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 5px 15px rgba(0,0,0,0.05);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card img{
            width:100%;
            height:220px;
            object-fit:cover;
        }

        .content{
            padding:20px;
        }

        .content h3{
            margin-bottom:10px;
            font-size:24px;
        }

        .content p{
            color:#666;
            line-height:1.7;
        }

        @media(max-width:768px){

            .navbar{
                padding:20px;
                flex-direction:column;
                gap:20px;
            }

            .menu{
                flex-wrap:wrap;
                justify-content:center;
                gap:15px;
            }

            .hero{
                padding:50px 20px 30px;
            }

            .hero h1{
                font-size:42px;
            }

            .section{
                padding:20px;
            }

            .grid{
                grid-template-columns:1fr;
            }

        }

    </style>

</head>
<body>

    <div class="navbar">

        <div class="logo">
            KeebsForID
        </div>

        <div class="menu">
            <a href="/">Home</a>
            <a href="/catalog">Keyboard</a>
            <a href="/switches">Switches</a>
            <a href="/keycaps">Keycaps</a>
            <a href="/community">Community</a>

            @guest
                <a href="{{ route('login') }}">Login</a>
            @endguest

            @auth
                <span>{{ Auth::user()->name }}</span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="logout-btn">
                        Logout
                    </button>
                </form>
            @endauth
        </div>

    </div>

    <div class="hero">

        <h1>
            Mechanical Keyboard Community
        </h1>

        <p>
            Temukan setup keyboard, rekomendasi switch, inspirasi keycaps,
            dan tren mechanical keyboard dari komunitas.
        </p>

    </div>

    <div class="section">

        <div class="grid">

            <div class="card">

                <img src="https://i.ytimg.com/vi/Bq3KHdh-uWE/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLArH0oleS9y7AOa11s2pQ9HJT0yOg">

                <div class="content">

                    <h3>Best Budget Keyboard 2026</h3>

                    <p>
                        Jelajahi rekomendasi mechanical keyboard terbaik dengan harga terjangkau
                        untuk pemula dan enthusiast tahun ini.
                    </p>

                </div>

            </div>

            <div class="card">

                <img src="https://blog-uploads.eneba.games/uploads/2025/11/linear-vs-tactile-switches.jpg">

                <div class="content">

                    <h3>Linear vs Tactile Switches</h3>

                    <p>
                        Pelajari perbedaan switch linear dan tactile untuk menemukan pengalaman mengetik terbaik.
                    </p>

                </div>

            </div>

            <div class="card">

                <img src="https://preview.redd.it/whats-the-best-keyboard-youve-ever-owned-and-why-and-my-one-v0-cv5903c4940e1.jpg?width=1920&format=pjpg&auto=webp&s=4592c4261738da7e8b162254e8cac174b1bf88d0">

                <div class="content">

                    <h3>Inspirasi Setup Keyboard Terbaik</h3>

                    <p>
                        Dapatkan inspirasi setup meja keyboard yang bersih dan estetik dari komunitas.
                    </p>

                </div>

            </div>

        </div>

    </div>

</body>
</html>