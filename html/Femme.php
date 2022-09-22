<?php
include 'header.php';
?>
    <!--fin navbar-->


    <!-- bannière -->

    <section>
        <div class="main_slider" style="background-image:url(../images/slider_1.jpg)">
            <div class="container fill_height">
                <div class="row align-items-center fill_height">
                    <div class="col">
                        <div class="main_slider_content">
                            <h6>Nouvelle collection 2022</h6>
                            <h1>Une réduction de 10% sur votre premiere commande</h1>
                            <div class="red_button shop_now_button"><a href="#">Achetez</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin bannière-->

    <!-- products-->
    <section id="products" class="section-p1">
        <h2>Une collection moderne</h2>
        <p class="clignotement">Shopping life !</p>
        <?php 
    //inclure la page de connexion
    include_once "connexion.php";
    $req = mysqli_query($con, "SELECT * FROM clothes WHERE id_types = '2'");
    ?> 
        <div class="pro-container"><?php 
    while($row = mysqli_fetch_assoc($req)){
    ?>


<div class="pro">
                <img src="/images/product/product-img/<?=$row['image']?>" alt="">
                <div class="des">
                    <span>
                        <?=$row['description']?>
                    </span>
                    <h5>
                        <?=$row['name']?>
                    </h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>
                            <?=$row['price']?>€
                        </h4>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-sm"
                                    href="ajouter_panier.php?id=<?=$row['id']?>">Ajouter au
                                    panier</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <div class="pro">
                <img src="../images/product/product-img/product-f1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>9.99€</h4>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-sm" href="#">Ajouter au
                                    panier</a></div>
                        </div>
                    </div>

                </div>
                
            </div>
            <div class="pro">
                <img src="../images/product/product-img/product-f3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>9.99€</h4>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-sm" href="#">Ajouter au
                                    panier</a></div>
                        </div>
                    </div>

                </div>
                
            </div>
            <div class="pro">
                <img src="../images/product/product-img/product-f4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>9.99€</h4>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-sm" href="#">Ajouter au
                                    panier</a></div>
                        </div>
                    </div>

                </div>
                
            </div>
            <div class="pro">
                <img src="../images/product/f7.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>9.99€</h4>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-sm" href="#">Ajouter au
                                    panier</a></div>
                        </div>
                    </div>

                </div>
                
            </div>
            <div class="pro">
                <img src="../images/product/product-img/product-f2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>9.99€</h4>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-sm" href="#">Ajouter au
                                    panier</a></div>
                        </div>
                    </div>

                </div>
                
            </div>
            
        
            <div class="pro">
                <img src="../images/product/product-img/product-f6.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>9.99€</h4>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-sm" href="#">Ajouter au
                                    panier</a></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="pro">
                <img src="../images/product/f4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>9.99€</h4>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-sm" href="#">Ajouter au
                                    panier</a></div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="pro">
                <img src="../images/product/product-img/product-f8.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>9.99€</h4>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-sm" href="#">Ajouter au
                                    panier</a></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>



    <section id="newsletter" class="section-p1 class=" section-m1 ">
        <div class=" newstext ">
            <h4>S'inscrire aux Newsletters</h4>
            <p>Recevez des mises à jour par e-mail sur notre dernière boutique <span>offres spéciales</span>
            </p>
        </div>
        <div class=" form ">
            <input type=" text " placeholder=" Votre adresse e-mail ">
            <button class=" normal ">S'inscrire</button>
        </div>
    </section>

    <!--footer-->
    <footer class="section-p1 ">

        <div class="col ">
            <div class="footer-services ">
                <h3>Nos Réseaux</h3>
                <ul class="list-services "></ul>
                <li> <a href=" "><i class='bx bxl-facebook-circle' ></i></a></li>
                <li> <a href=" "><i class='bx bxl-instagram' ></i></a></li>
                <li> <a href=" "><i class='bx bxl-pinterest' ></i></a></li>
                <li> <a href=" "><i class='bx bxl-youtube'></i></a></li>

            </div>
        </div>

        <div class="col ">
            <div class="footer-horaires ">
                <h3>HORAIRES</h3>
                <ul class="hor ">
                    <li> Lun 09:00 à 20:00</li>
                    <li> Mar 09:00 à 20:00</li>
                    <li> Mer 09:00 à 20:00</li>
                    <li> Jeu 09:00 à 20:00</li>
                    <li> Ven 09:00 à 20:00</li>
                    <li> Sam 09:00 à 20:00</li>
                    <li> Dim 09:00 à 20:00</li>
                </ul>
            </div>
        </div>

        <div class="col ">
            <div class="payments ">
                <h3>MODE DE PAYEMENTS</h3>
                <p><i class='bx bxs-credit-card'></i>&nbspCredit carte</p>
                <p><i class='bx bxl-paypal'></i>&nbsp paypal</p>
                <p><i class='bx bxl-bitcoin'></i>&nbsp bitcoin</p>
            </div>
        </div>

        <div class="col ">
            <div class="contacts ">
                <h3>CONTACT</h3>
                <p><i class='bx bxs-phone-call'></i>&nbsp 01 22 33 33 33</p>
                <p><i class='bx bx-envelope'></i>&nbsp d_fashion@dw19.com</p>
                <p><i class='bx bxs-map'></i> &nbsp 2 rue Jean Mermoz 91080</p>

            </div>
        </div>
    </footer>

    <script src=" ../js/javascript.js "></script>
</body>

</html>