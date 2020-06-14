<!DOCTYPE html>
<?php 
    include_once('includes/root.php')
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$root?>media/css/main.css">
    <title>GEITY</title>
</head>
<body>
    <article class="headband"><p>MESSAGE PROMOTIONNEL ICI </p></article>
    <header class="banner is_first_page" id="Top">
        <?php 
            include_once('includes/navigation.php')
        ?>
    </header>
    <main>
        <section class="show-on">
            <h1>Geity</h1>
            <h2 class='title'>Meilleurs ventes</h2>
            <aside>
                <article>
                    <img src="<?=$root?>media/images/watchs/w1.png" alt="Photo du Produit" class="products_images">
                    <ul>
                        <li><a class="nom_article" href='#'>Geity - Montre W1</a></li>
                        <li><p class="prix">€110,00</p></li>
                    </ul>
                </article>

                <article>
                    <img src="<?=$root?>media/images/watchs/w2.png" alt="Photo du Produit" class="products_images">
                    <ul>
                        <li><a class="nom_article" href='#'>Geity - Montre W2</a></li>
                        <li><p class="prix">€110,00</p></li>
                    </ul>
                </article>

                <article>
                    <img src="<?=$root?>media/images/watchs/w3.png" alt="Photo du Produit" class="products_images">
                    <ul>
                        <li><a class="nom_article" href='#'>Geity - Montre W3</a></li>
                        <li><p class="prix">€130,00</p></li>
                    </ul>
                </article>
                    
                <article>
                    <img src="<?=$root?>media/images/watchs/w4.png" alt="Photo du Produit" class="products_images">
                    <ul>
                        <li><a class="nom_article" href='#'>Geity - Montre W4</a></li>
                        <li><p class="prix">€130,00</p></li>
                    </ul>
                </article>
            </aside>
        </section>

        <section class="promo">
            <div class="promo" id="promo">
                <h3>Geity -</h3>
                <h2>PROMOS EN <br/>CE MOMENT</h2>
                <p>
                Pour célébrer notre <strong>10ème anniversaire</strong>,
                 tentez votre chance et gagner plein de cadeaux
                  et peut-être <strong>un séjour à Miami dans un hôtel 5 étoiles.</strong>
                </p>
            </div>
        </section>

        <section class="collection">
        </section>
    </main>    
    <footer>
        <section class="footer/3">
            <p><img src="" alt="LOGO"></p>
            <p>COPYRIGHT</p>
        </section>
        <section class="footer/3">
            <h3>INFORMATIONS</h3>
            <ul>
                <li><a href="" title="">Condition Générales de Ventes</a></li>
                <li><a href="" title="">Politique de confitiendalité</a></li>
                <li><a href="" title="">Termes & Conditions de Promo</a></li>
                <li><a href="" title="">Mentions légales</a></li>
            </ul>
        </section>
        <section class="footer/3">
            <h3>SERVICE CLIENT</h3>
            <ul>
                <li><p>cincinellilu@gmail.com</p></li>
                <li><p>Lundi au Vendredi : 9h - 18h</p></li>
            </ul>
        </section>

    </footer>
</body>
</html>