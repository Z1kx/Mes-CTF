<?php
error_reporting(0);
include('header.php');
$cat = $_GET['id'];
//echo $cat;
try{
    $data2 = $conn->query("SELECT jeux.id, jeux.titre as 'titreJeu', jeux.image, categories.titre as 'titreCategorie' FROM jeux JOIN categories on jeux.categorie = categories.id WHERE categories.id = '".$cat."'");
    //echo $data2;
}
catch (Exception $e) {
    //echo 'Exception -> ';
    //echo '<p class=error>';    
    //var_dump($e->getMessage());
    //echo '</p>';

}

?>
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
                            echo '<div class="product__item__pic set-bg" style="background-image: url('.$row['image'].'");>';
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
