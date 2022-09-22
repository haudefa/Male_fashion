<?php
include 'header.php';
?>

    <!-- carousel- -->
    <section>
        <div class="slider">
            <img src="../images/carousel/jean_caroussel.jpg" alt="img1" class="img__slider active">
            <img src="../images/carousel/jordan_caroussel.jpg" alt="img2" class="img__slider">
            <img src="../images/carousel/sneaker_caroussel.jpg" alt="img3" class="img__slider">
            <img src="../images/carousel/t-shirt_caroussel.jpg" alt="img4" class="img__slider">
            <div class="suivant">
                <i class='bx bx-chevron-right-circle'></i>
            </div>
            <div class="precedent">
                <i class='bx bx-chevron-left-circle'></i>
            </div>
        </div>

    </section>

    <!-- banner caractéristique- -->
    <section id="feature" class="section-p1">
        <div class="fe_box">
            <img src="../images/livraison gratuite.png" alt="livraison gratuite">
            <h6>livraison gratuite</h6>
        </div>
        <div class="fe_box">
            <img src="../images/commande.jfif" alt="livraison gratuite">
            <h6>Commande</h6>
        </div>
        <div class="fe_box">
            <img src="../images/save moeny.png" alt="livraison gratuite">
            <h6>Économiser </h6>
        </div>
        <div class="fe_box">
            <img src="../images/pro.png" alt="livraison gratuite">
            <h6>Promotions</h6>
        </div>
        <div class="fe_box">
            <img src="../images/livraison gratuite.png" alt="livraison gratuite">
            <h6>Bonne vente</h6>
        </div>
        <div class="fe_box">
            <img src="../images/support.png" alt="Assistance 24h/24">
            <h6>Assistance 24h/24</h6>
        </div>

    </section>

     <!--products box  1-->
    <section id="products" class="section-p1">
        <h2>Produits Populaires</h2>
        <p>Nouvelle collection</p>

        <?php 
    //inclure la page de connexion
    include_once "connexion.php";
    $req = mysqli_query($con, "SELECT * FROM clothes");
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
                <img src="../images/banner/banner-2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>2.99€</h4>
                    </div>

                </div>
                <i class='bx bx-cart cart'></i>
            </div>


            <div class="pro">
                <img src="../images/about/team-4.jpg" alt="">
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
                    </div>

                </div>
                <i class='bx bx-cart cart'></i>
            </div>


            <div class="pro">
                <img src="../images/about/team-3.jpg" alt="">
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
                    </div>

                </div>
                <i class='bx bx-cart cart'></i>
            </div>


            
            <div class="pro">
                <img src="../images/about/team-2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>

                </div>
                <i class='bx bx-cart cart'></i>
            </div>


        </div>
    </section>

    <!--banner-->
    <section id="banner" .section-m1>
        <h4>Services De Réparation</h4>
        <h2>Jusqu'à <span>70% de réduction </span>-Tous les t-shirts et accessoires</h2>
        <button class="normal">Explore plus</button>

    </section>

    <!--products box  2-->
    <section id="products" class="section-p1">
        <h2>Nouveaux arrivages</h2>
        <p>Collection d'été Nouveau design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="../images/about/team-1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>
                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/product/f1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>
                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>
                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>
                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/product/f2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>
                </div>
                <i class='bx bx-cart cart'></i>
            </div>



            <div class="pro">
                <img src="../images/about/team-3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <h4>€47</h4>
                    </div>
                </div>
                <i class='bx bx-cart cart'></i>
            </div>
            <div class="pro">
                <img src="../images/about/team-2.jpg" alt="">
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
    </section>



    <!-- newsletter- -->
    <section id="newsletter" class="section-p1 ">
        <div class="newstext ">
            <h4>S'inscrire aux Newsletters</h4>
            <p>Recevez des mises à jour par e-mail sur notre dernière boutique <span>offres spéciales</span>
            </p>
        </div>
        <div class="form ">
            <input type="text " placeholder="Votre adresse e-mail ">
            <button class="normal ">S'inscrire</button>
        </div>
    </section>

    <!-- Footer Section -->
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


    <script src="../js/javascript.js "></script>
</body>

</html>