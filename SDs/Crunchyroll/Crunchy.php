<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcurt icon" href="/Crunchyroll/img/favicon.ico" type="image/x-ico">
    <link rel="stylesheet" href="../Crunchyroll/Crunchy.css">
    <title>Crunchyroll</title>
</head>

<body>
    <header>
        <video src="../Crunchyroll/Teaser/Crunchyrool.webm" autoplay loop muted></video>
        <nav>
            <div class="logo_ul">
                <img src="/Crunchyroll/img/log.png" alt="">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">Filmes</a>
                    </li>
                    <li>
                        <a href="">Series</a>
                    </li>
                </ul>
            </div>
            <div class="search_user">
                <input type="text" placeholder="Procure..." id="search_input">
                <img src="/Crunchyroll/img/user.jpg" alt="">
                <div class="search">
                    <a href="#" class="card">
                        <img src="/Covers1/FGO F.jpg" alt="">
                        <div class="cont">
                            <h3>Fate Grand Order Firts Order</h3>
                            <p>Multiverso, 2016 , <span>LVL</span><i class="bi bi-star-fill"> 9.6</i></p>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
        <div class="content">
            <h1 id="title">
                <?php include("../Ls/testanime.php");
               echo $anime->getNome();
                ?>
            </h1>
            <p> <?php
               echo $sin->getSin();
                ?></p>
            <div class="details">
                <h6>A1-Pictures</h6>
                <h5 id="gen">Comédia Romantica</h5>
                <h4>2013</h4>
                <h3 id="rate"><span>LVL</span><i class="bi bi-star-fill"> 9.0</i></h3>
            </div>
        </div>
        <section>
            <h4><?php include("../Ls/filme.php");
            $filme = new Filme();
            $anime-> setNome("date a live");

            echo $filme->gettitulo();
            ?></h4>
            <i class="bi bi-chevron-left"></i>
            <i class="bi bi-chevron-right"></i>
            <div class="cards">
                <!--<a href="#" class="card">
                    <img src="/Covers1/1.jpg" alt="" class="poster"> 
                    <div class="rest_card">
                        <img src="/CoversF/1F.jpg" alt="">
                        <div class="cont">
                            <h4>Tensei Shitara Slime Datta Ken</h4>
                            <div class="sub">
                                <p>Isekai, 2018</p>
                                <h3><span>LVL</span><i class="bi bi-star-fill"> 8.7</i></h3>
                            </div>
                        </div>
                    </div>
                </a>-->
            </div>
        </section>
    </header>
    <script src="/Crunchyroll/Crunchy.js"></script>
</body>

</html>