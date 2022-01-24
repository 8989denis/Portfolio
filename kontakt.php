<?php
echo '<script>alert("dziękujemy za wysłanie formularza");</script>';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Denis Rudolf Damian Kontek (denis82)">
    <meta name="description" content="Denis Kontek Portfolio Front-end and back-end Developer">
    <meta name="keywords" content="HTML, CSS, JavaScript,Php,C++,Front-end,Back-end,developer,Portfolio,Programista,Junior Developer,Middle Developer,Senior Developer,Gliwice,Katowice,Polska">
    <link rel="icon" type="image/png" href="./images/website/obraz.png"/>
    <link rel="stylesheet" href="./css/Main.css">
    <link rel="stylesheet" href="./css/Animacje.css">
    <link rel="stylesheet" href="./css/Header.css">
    <link rel="stylesheet" href="./css/Strona Główna.css">
    <link rel="stylesheet" href="./css/O Mnie.css">
    <link rel="stylesheet" href="./css/Technologie.css">
    <link rel="stylesheet" href="./css/Portfolio.css">
    <link rel="stylesheet" href="./css/SocialMedia.css">
    <link rel="stylesheet" href="./css/Footer.css">
    <link rel="stylesheet" href="./css/Formularz.css">
    <link rel="stylesheet" href="./fonts/fontello-c55bfc46/css/fontello.css">
    <script src="./scripts/Main.js"></script>
    <title>Portfolio</title>
</head>
<body onload="wczytaj();">
    <header>
        <div>
            <p>Denis Kontek</p>
            <p>Developer</p>
        </div>
        <nav>
            <a id="menu" onclick="menu();">Pokaż Menu</a>
            <a href="#sg">Strona Główna</a>
            <a href="#om">O Mnie</a>
            <a href="#tech">Technologie</a>
            <a href="#port">Portfolio</a>
            <a href="#sm" class="icon-link">SocialMedia</a>
            <a onclick="toogleKontakt();">Kontakt</a>
        </nav>
    </header>
    <main>
        <section id="sg">
                <ol>
                    Programista
                    <li>Stron Internetowych</li>
                    <li>Aplikacji Internetowych</li>
                    <li>Aplikacji Desktopowych</li>
                </ol>
            <a href="#om">
                Poznaj mnie!
            </a>
        </section>
        <section id="om">
            <img src="./images/website/images/myPhoto.png" alt="Moje zdj twarzy">
            <article>
            <h1>
                O Mnie
            </h1>
            <p>
                Nazywam się <strong>Denis Rudolf Damian Kontek</strong> mam <strong>18 lat</strong>, uczęszczam do <strong>Technikum Teb Edukacja w Gliwicach</strong> , posiadam wykształcenie <strong>Podstawowe</strong> i <strong>Gimnazjalne</strong>, oraz posiadam kwalifikacje <strong>INF.02</strong>.
            </p>
            <p>
                Moje ulubione języki programowania to <strong>C++</strong> , <strong>Javascript</strong>. Moje ulubione technologie to <strong>JQuary</strong> oraz <strong>React.js</strong>. Mój ulubiony silnik do tworzenia gier to <strong>Unreal Engine 5</strong>.
            </p>
            <fieldset>
                <legend>Doświadczenie</legend>
                <p>
                    Jestem <strong>Front-end</strong> i <strong>Back-end Developerem</strong> , aczkolwiek czuje się lepiej w <strong>Back-endzie</strong>.
                </p>
                <p>
                    Programuje w takich językach jak <strong>Html</strong> , <strong>Css</strong> , <strong>JavaScript</strong> , <strong>Php</strong> , <strong>SQL</strong> , <strong>C++</strong> , <strong>Python</strong>.
                </p>
                <p>
                    Wykorzystuje technologie takie jak <strong>JQuary</strong> , <strong>JSon</strong> oraz edukuję się w technologi <strong>React.js</strong>.
                </p>
                <p>
                    Do programowania wykorzystuje IDE takie jak <strong>Visual Studio Community 2022</strong> , <strong>Visual Studio Code</strong> , oraz wykorzystuje <strong>Node.js</strong> do stawiania na nim swoich aplikacji w <strong>Javascript</strong> oraz <strong>React</strong> i wykorzystywuje <strong>Xampp</strong> i <strong>Wampp</strong> do stawiania na nich swoich stron internetowych. W <strong>Visual Studio Code</strong> wykorzystuje <strong>Emmet Abbreviation</strong> do pisania szybciej kodu.
                </p>
                <p>
                    Zajmuje się programowaniem <strong>stron internetowych</strong> , <strong>aplikacji internetowych</strong> i <strong>aplikacji desktopowych</strong> od <strong>4 lat</strong>.
                </p>
                <p>
                    <strong>Stworzyłem 7 stron internetowych</strong> włącznie z tą stroną, moje strony możesz znaleźć w moim <a href="#port"><strong>Portfolio</strong></a> lub na moim <a href="#sm"><strong>Githubie</strong></a> , tam znajdziesz więcej moich prac.
                </p>
                <p>
                    Posiadam również podstawową wiedze w obsłudze silnika <strong>Unreal Engine 5</strong>.
                </p>
            </fieldset>
            <p>
                Jeśli chcesz się skontaktować wejdź na moje <a href="#sm"><strong>SocialMedia</strong></a> i napisz do mnie wiadomość.
            </p>
            </article>
        </section>
        <section id="tech">
            <h1>Technologie w których się specjalizuje :</h1>
            <div>
                <a href="https://pl.wikipedia.org/wiki/HTML" target="_blank">
                <img src="./images/icons/HTML.png" alt="Ikona HTML5">
                <p>HTML</p>
                </a>
            </div>
            <div>
                <a href="https://pl.wikipedia.org/wiki/Kaskadowe_arkusze_styl%C3%B3w" target="_blank">
                    <img src="./images/icons/CSS.png" alt="Ikona CSS3">
                    <p>CSS</p>
                </a>
            </div>
            <div>
                <a href="https://pl.wikipedia.org/wiki/JavaScript" target="_blank">
                    <img src="./images/icons/JS.png" alt="Ikona Javascript">
                    <p>JavaScript</p>
                </a>
            </div>
            <div>
                <a href="https://pl.wikipedia.org/wiki/JQuery" target="_blank">
                    <img src="./images/icons/JQuary.png" alt="Ikona JQuary">
                    <p>JQuary</p>
                </a>
            </div>
            <div>
                <a href="https://pl.wikipedia.org/wiki/JSON" target="_blank">
                    <img src="./images/icons/JSON.png" alt="Ikona JSON">
                    <p>JSON</p>
                </a>
            </div>
            <div>
                <a href='https://pl.wikipedia.org/wiki/C%2B%2B' target="_blank">
                    <img src="./images/icons/C++.png" alt="Ikona C++">
                    <p>C/C++</p>
                </a>
            </div>
            <div>
                <a href="https://pl.wikipedia.org/wiki/PHP" target="_blank">
                    <img src="./images/icons/PHP.png" alt="Ikona PHP">
                    <p>PHP</p>
                </a>
            </div>
            <div>
                <a href="https://pl.wikipedia.org/wiki/SQL" target="_blank">
                    <img src="./images/icons/SQL.png" alt="Ikona SQL">
                    <p>SQL</p>
                </a>
            </div>
            <div>
                <a href="https://pl.wikipedia.org/wiki/Python" target="_blank">
                    <img src="./images/icons/PYTHON.png" alt="Ikona Python">
                    <p>Python</p>
                </a>
            </div>
            <p class="icon-wikipedia-w"> - Wszystkie technologie przenoszą na wikipedie informacyjne!</p>
        </section>
        <section id="port">
            <h1>Moje Portfolio</h1>
            <a href="https://8989denis.github.io/Moja_PIerwsza_Strona/" target="_blank">
                <img src="./images/websites images/pierwszaStrona.png" alt="Pierwsza moja strona">
                <p>Moja Pierwsza Strona w życiu</p>
            </a>
            <a href="https://8989denis.github.io/Moja_Druga_Strona/" target="_blank">
                <img src="./images/websites images/drugaStrona.png" alt="Druga moja strona">
                <p>Moja Druga strona w życiu</p>
            </a>
            <a href="https://8989denis.github.io/BlogDenisa/" target="_blank">
                <img src="./images/websites images/mojBlog.png" alt="Mój blog">
                <p>Mój Blog</p>
            </a>
            <a href="https://8989denis.github.io/Strona_dla_mateusza/" target="_blank">
                <img src="./images/websites images/stronaDlaMatiego.png" alt="Strona zrobiona dla znajomego">
                <p>Strona dla znajomego prosty formularz</p>
            </a>
            <a href="https://8989denis.github.io/Strona_do_praktyk/Moje%20inne%20strony/Strona%20By%20Denis/index.html" target="_blank">
                <img src="./images/websites images/scrum.png" alt="Strona zrobiona na praktykach o SCRUM">
                <p>Strona o SCRUM zrobiona na praktykach</p>
            </a>
            <a href="https://8989denis.github.io/Strona_do_praktyk/" target="_blank">
                <img src="./images/websites images/ostropa.png" alt="Strona zrobiona na praktykach o Dzielnicy Gliwic Ostropa">
                <p>Strona o Ostropie zrobiona na praktykach</p>
            </a>
        </section>
        <section id="sm">
            <h1>Moje SocialMedia</h1>
            <div>
                <a href="https://www.facebook.com/YouTuber.denis82/" target="_blank">
                    <span class="icon-facebook-squared"></span>
                    <p>Facebook</p>
                </a>
            </div>
            <div>
                <a href="https://www.instagram.com/denis82official/" target="_blank">
                    <span class="icon-instagram"></span>
                    <p>Instagram</p>
                </a>
            </div>
            <div>
                <a href="https://youtube.com/c/denis82/" target="_blank">
                    <span class="icon-youtube"></span>
                    <p>Youtube</p>
                </a>
            </div>
            <div>
                <a href="https://twitter.com/DenisKontek/" target="_blank">
                    <span class="icon-twitter-squared"></span>
                    <p>Twitter</p>
                </a>
            </div>
            <div>
                <a href="https://www.linkedin.com/in/denis-kontek-877477186/" target="_blank">
                    <span class="icon-linkedin-squared"></span>
                    <p>Linkedin</p>
                </a>
            </div>
            <div>
                <a href="https://github.com/8989denis" target="_blank">
                    <span class="icon-github-squared"></span>
                    <p>Github</p>
                </a>
            </div>
        </section>
    </main>
    <footer>
        <span class="icon-question-circle-o"><p onclick="licencje();">Licencje</p></span>
        <p>Wszelkie prawa zastrzeżone 2021-2022 &copy; Denis Rudolf Damian Kontek</p>
    </footer>
    <form action="kontakt.php" method="POST">
        <p onclick="toogleKontakt();">X</p>
        <h1>Kontakt</h1>
        <input type="text" name="email" required placeholder="Adres Email">
        <textarea name="text" required placeholder="Wiadomość do mnie" rows="10"></textarea>
        <input type="submit" value="Wyślij">
    </form>
    <a href="#sg">&UpArrow;</a>
    <div>
        <p>
            Witaj na mojej stronie kod do mojej strony znajdziesz <a href="https://github.com/8989denis/Portfolio" target="_blank"><strong>Tutaj</strong></a>.
        </p>
        <button onclick="zapisz(1);">
            Zamknij
        </button>
        <button onclick="zapisz(2);">
            Nie pokazuj ponownie
        </button>
    </div>
    </body>
</html>