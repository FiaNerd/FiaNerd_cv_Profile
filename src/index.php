<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=Poppins:ital,wght@0,300;0,400;0,500;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./styles/css/style.css" />

    <title>Sofia | Profile</title>
</head>

<body>
    <div class="cover-header">
        <div>Image here</div>
        <div class="sticky-cover">text here</div>
    </div>

    <div class="wrapper">
        <header>
            <nav class="navbar">
                <h1 class="logo">Sofia Mattiasson</h1>
                <button class="btn-hamburger" id="btn-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li>
                            <a href="#">Portfolio</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Coding</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <section class="hero-container">
                <ul class="hero-text-left-side">
                    <li class="hero-design">Design</li>
                    <li class="hero-photoshop">Photoshop</li>
                    <li class="hero-illustrator">Illustrator</li>
                    <li class="hero-indesign">Indesign</li>
                </ul>
                <p class="hero-and">&</p>
                <ul class="hero-text-right-side">
                    <li class="hero-design">Code</li>
                    <li class="hero-photoshop">Html&Css</li>
                    <li class="hero-illustrator">JavaScript</li>
                    <li class="hero-indesign">JavaScript</li>
                </ul>
            </section>
            <section class="short-info">
                <h2 class="info-title">console.log("Hello You")</h2>
                <p>
                    My name is Sofia, and I'm styding frontend development att
                    Mediainstituet i Malmö. You can read more about me and my skills
                    under profile.
                </p>
            </section>
        </main>
        <footer>
            <p class="contact">Contact me</p>
            <div class="footer-icon-container">
                <i class="fa fa-github">
                    <p>Github</p>
                </i>
                <i class="fa fa-linkedin">
                    <p>LinkedIn</p>
                </i>
                <i class="fa fa-envelope">
                    <p>email</p>
                </i>
            </div>
            <p class="copy">&copy Sofia Mattiasson</p>
        </footer>
        <script src="menu-btn.js"></script>
        <!-- </div> -->
</body>

</html>