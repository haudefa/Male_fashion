<?php
include 'header.php';
?>

<section id="bg-hero">
    <h4>Offre de reprise</h4>
    <h2>Offres de super qualité</h2>
    <h1>Sur tous les produits</h1>
    <p class="clignotement">Économisez plus avec des coupons et jusqu'à 70 % de réduction</p>
    <button class="normal">Achetez maintenant </button>
</section>


<!-- products-->
<section id="products" class="section-p1">
    <h2>Une collection moderne</h2>


    <?php 
    //inclure la page de connexion
    include_once "connexion.php";
    $req = mysqli_query($con, "SELECT * FROM clothes WHERE id_types = '1'");
    ?>
    <div class="pro-container">
        <?php 
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
            <img src="/images/product/product-img/product-2.jpg" alt="">
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

        <div class="pro-container">
            <div class="pro">
                <img src="/images/product/product-img/product-8.jpg" alt="">
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
                <img src="/images/product/product-img/product-10.jpg" alt="">
                <div class="des">
                    <span>Pour être frais en toute circonstance</span>
                    <h5>Parfum</h5>
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
                <img src="/images/product/product-img/product-9.jpg" alt="">
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
                <img src="/images/product/product-img/product-21.jpg" alt="">
                <div class="des">
                    <span>Gravir les montagnes !</span>
                    <h5>Chaussures randonnées</h5>
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
                <img src="/images/product/product-img/product-4.jpg" alt="">
                <div class="des">
                    <span>Description</span>
                    <h5>Chemise</h5>
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
                <img src="/images/product/product-img/product-13.jpg" alt="">
                <div class="des">
                    <span>En simili cuir de bonne facture</span>
                    <h5>Sac ordinateur marron</h5>
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
                <img src="/images/product/product-img/product-3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>cartoon astronaut</h5>
                    <div class="star">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <<h4>9.99€</h4>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-sm" href="#">Ajouter au
                                    panier</a></div>
                        </div>
                    </div>
                </div>
                
            </div>


            <div class="pro">
                <img src="/images/product/product-img/product-2.jpg" alt="">
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

<section id="newsletter" class="section-p1">
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

<footer class="section-p1 ">

    <div class="col ">
        <div class="footer-services ">
            <h3>Nos Réseaux</h3>
            <ul class="list-services "></ul>
            <li> <a href=" "><i class='bx bxl-facebook-circle'></i></a></li>
            <li> <a href=" "><i class='bx bxl-instagram'></i></a></li>
            <li> <a href=" "><i class='bx bxl-pinterest'></i></a></li>
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