<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet"
    />
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <header class="animated">
            <a href="#" class="logo">Portfolio</a>

            <nav class="navbar">
                <a href="#" class="active">Home</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>
        </header>

        <section class="home animated">
            <div class="home-detail">
                <h1>George M</h1>
                <h2>Php developer</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Asperiores blanditiis consectetur dolores ea enim explicabo
                    laboriosam minima molestias mollitia dequeue provident quas
                    recusandae sequi, soluta sunt ullam vel velit.</p>
                <div class="download-social">
                    <a href="#" class="btn">Download CV</a>
                    <div class="social-icons">
                        <a href="#"><i class="ri-telegram-fill"></i></a>
                        <a href="#"><i class="ri-github-fill"></i></a>
                        <a href="#"><i class="ri-linkedin-fill"></i></a>
                    </div>
                </div>
            </div>

            <div class="home-img">
                <div class="img-box">
                    <img src="{{ asset('images/home.png') }}" alt="Avatar">
                </div>
            </div>
        </section>
    </div>
</body>
</html>
