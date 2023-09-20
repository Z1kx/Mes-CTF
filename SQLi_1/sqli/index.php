<?php
include('header.php');
$data = $conn->query("select jeux.id, jeux.titre as 'titreJeu', jeux.image, description, categories.titre as 'titreCategorie' from jeux JOIN categories on jeux.categorie = categories.id WHERE jeux.titre = 'Valorant' OR jeux.titre = 'Overwatch 2' OR jeux.titre = 'Rocket League'")->fetchAll();

$data2 = $conn->query("select jeux.id, jeux.titre as 'titreJeu', jeux.image, categories.titre as 'titreCategorie' from jeux JOIN categories on jeux.categorie = categories.id LIMIT 6")->fetchAll();

$data3 = $conn->query("SELECT jeux.id, jeux.titre as 'titreJeu', jeux.image, categories.titre as 'titreCategorie' FROM jeux JOIN categories on jeux.categorie = categories.id WHERE jeux.id = 3 OR jeux.id = 4 OR jeux.id = 6 OR jeux.id = 9 OR jeux.id = 10 OR jeux.id =11")->fetchAll();

$data4 = $conn->query("SELECT jeux.id, jeux.titre as 'titreJeu', jeux.image, categories.titre as 'titreCategorie' FROM jeux JOIN categories on jeux.categorie = categories.id WHERE jeux.id = 12 OR jeux.id = 13 OR jeux.id = 14 OR jeux.id = 15 OR jeux.id = 16")->fetchAll();

$data5 = $conn->query("SELECT jeux.id, jeux.titre as 'titreJeu', jeux.image, categories.titre as 'titreCategorie' FROM jeux JOIN categories on jeux.categorie = categories.id WHERE jeux.id = 17 OR jeux.id = 18 OR jeux.id = 19 OR jeux.id = 20")->fetchAll();

/**
foreach ($data as &$value) {
   echo '<div class="hero__items set-bg" data-setbg="hero/hero-1.jpg">'
   echo '<div class="row">'
   echo '<div class="col-lg-6">'
   echo '<div class="hero__text">'
   echo '     <div class="label">FPS</div>'
   echo '     <h2>Valorant</h2>'
   echo '     <p>Riot Games présente VALORANT : un FPS tactique en 5v5 basé sur les personnages, où la précision des armes à feu rencontre les capacités uniques des agents.</p>'
   echo '     <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>'
   echo '     </div>'
   echo '     </div>'
   echo '     </div>'
   echo '     </div>'
}**/
?>


    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <h1 style="text-align: center; color: white; font-size: 50px;">Bienvenue sur notre catalogue de jeux</h1>
            <br>
            <div class="hero__slider owl-carousel">
            <?php
                foreach ($data as $row) {
                    echo '<div class="hero__items set-bg" data-setbg='.$row['image'].'>';
                    echo '<div class="row">';
                    echo '<div class="col-lg-6">';
                    echo '<div class="hero__text">';
                    echo '<div class="label">'.$row['titreCategorie'].'</div>';
                    echo '<h2>'.$row['titreJeu'].'</h2>';
                    echo '<p>'.$row['description'].'</p>';
                    echo '<a href="#"><span>Voir laffiche</span> <i class="fa fa-angle-right"></i></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';   
}
               
?>
                
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Tendance actuelle</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">Tout voir <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
<?php
                    foreach ($data2 as $row) {
                            echo '<div class="col-lg-4 col-md-6 col-sm-6">';
                            echo '<div class="product__item">';
                            echo '<div class="product__item__pic set-bg" data-setbg='.$row['image'].'>';
                            echo '<div class="ep">18 / 18</div>';
                            echo '<div class="comment"><i class="fa fa-comments"></i> 11</div>';
                            echo '<div class="view"><i class="fa fa-eye"></i> 9141</div>';
                            echo '</div>';
                            echo '<div class="product__item__text">';
                            echo '<ul>';
                            echo '<li>'.$row['titreCategorie'].'</li>';
                            //echo '<li>Movie</li>';
                            echo '</ul>';
                            echo '<h5><a href="#">'.$row['titreJeu'].'</a></h5>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
}
?>
</div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Popular Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
<?php 
        foreach ($data3 as $row) {
            echo '<div class="col-lg-4 col-md-6 col-sm-6">';
            echo '<div class="product__item">';
            echo '<div class="product__item__pic set-bg" data-setbg='.$row['image'].'>';
            echo '<div class="ep">18 / 18</div>';
            echo '<div class="comment"><i class="fa fa-comments"></i> 11</div>';
            echo '<div class="view"><i class="fa fa-eye"></i> 9141</div>';
            echo '</div>';
            echo '<div class="product__item__text">';
            echo '<ul>';
            echo '<li>'.$row['titreCategorie'].'</li>';
            //echo '<li>'.$row['titreCategorie'].'</li>';
            echo '</ul>';
            echo '<h5><a href="#">'.$row['titreJeu'].'</a></h5>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
}
?>
</div>
</div>
<div class="live__product">
                        <div class="row">                     
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Les plus vu</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Jour</li>
                                <li data-filter=".week">Semaine</li>
                                <li data-filter=".month">Mois</li>
                                <li data-filter=".years">Année</li>
                            </ul>
                            <div class="filter__gallery">
<?php
                        foreach ($data4 as $row) {
                            echo '<div class="product__sidebar__view__item set-bg mix Jour years month week"';
                            echo 'data-setbg='.$row['image'].'>';
                            echo '<div class="ep">18 / ?</div>';
                            echo '<div class="view"><i class="fa fa-eye"></i> 9141</div>';
                            echo '<h5><a href="#">'.$row['titreJeu'].'</a></h5>';
                            echo '</div>';
}
?>
</div>
</div>
<div class="product__sidebar__comment">
        <div class="section-title">
            <h5>New Comment</h5>
        </div>
<?php
foreach ($data5 as $row) {
    echo '<div class="product__sidebar__comment__item">';
    echo '<div class="product__sidebar__comment__item__pic">';
    echo '<img src="'.$row['image'].'" alt="">';
    echo '</div>';
    echo '<div class="product__sidebar__comment__item__text">';
    echo '<ul>';
    echo '<li>'.$row['titreCategorie'].'</li>';
    echo '</ul>';
    echo '<h5><a href="#">'.$row['titreJeu'].'</a></h5>';
    echo '<span><i class="fa fa-eye"></i> 19.141 Viewes</span>';
    echo '</div>';
    echo '</div>';
}
?>
<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

    <!-- Hero Section End -->

