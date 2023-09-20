<?php
include 'header.php';
 ?>    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="login__form" style="text-align: center;">
                        <h3>Login</h3>
                        <form  method="post" style="text-align: center;">
                            <div class="input__item" style="text-align: center;">
                                <input name= "username" type="text" placeholder="Email address" >
                                <span class="icon_mail" ></span>
                            </div>
                            <div class="input__item">
                                <input name="password" type="password" placeholder="Password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn">Login Now</button>
                            
                        </form>
                        <?php
                                if(empty($_POST['username'])){
                                    echo("<h3 style='color: white;'>Veuillez entrez vos informations de connexion</h3>");
                                    return false;
                                }

                                if(empty($_POST['password'])){
                                    echo("<h3 style='color: white;'>Veuillez écrire un mot de passe</h3>");
                                    return false;
                                }

                                $username = trim($_POST['username']);
                                $password = trim($_POST['password']);

                                if($username == "admin" and $password == "passw0rd123"){
                                    echo("<h1 style='color: white;'>NHM2I{41c9ff16-260d-4e2f-ad62-d46e727d1769}</h1>");
                                }else{
                                    echo("<h3 style='color: white;'>Informations de connexion incorrect</h3>");
                                    return false;
                                }
                                ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
