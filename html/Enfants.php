<?php
include_once "header.php";

?>


<section class="saving_section ">
        <div class="box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="img-box">
                            <img src="../images/kid_bg.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    ÉCONOMIES SUR <br> Nouvelles Arrivées
                                </h2>
                            </div>
                            <p>
                                Qui ex dolore at repellat, quia neque doloribus omnis adipisci, ipsum eos odio fugit ut
                                eveniet blanditiis praesentium totam non nostrum dignissimos nihil eius facere et eaque.
                                Qui, animi obcaecati.
                            </p>
                            <div class="btn-box">
                                <a href="#" class="btn1">
                                    Acheter maintenant
                                </a>
                                <a href="#" class="btn2">
                                    Voir plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- products-->
    <section id="products" class="section-p1">
        <h2>Une collection moderne</h2>
        <p class="clignotement">Shopping life !</p>

        <?php 
    //inclure la page de connexion
    include_once "connexion.php";
    $req = mysqli_query($con, "SELECT * FROM clothes WHERE id_types = '4'");
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
            <img src="/images/product/product-img/k3.jpg" alt="">
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
            <img src="/images/product/product-img/k5.jpg" alt="">
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
            <img src="/images/product/product-img/k4.jpg" alt="">
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
            <img src="/images/product/product-img/k6.jpg" alt="">
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
            <img src="/images/product/product-img/k8.jpg" alt="">
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
            <img src="/images/product/product-img/k10.jpg" alt="">
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

    <section class="card_pro1">
        <div class="card_pro_child1">
            <h3>Robe</h3>
            <p class="card_text">Venez voir nos dernier sortie</p>

            <a href="page catégorie veste.html" class="link_1">voir les dernier Robe </a>
        </div>
        <!-- 3 produit dans la div  -->
        <div class="pic_card_pro1">
            <img src="../images/product/fille/k10.jpg" alt="" class="img_card_pro1">
            <img src="../images/product/fille/k10.jpg" alt="" class="img_card_pro1">
            <img src="../images/product/fille/k10.jpg" alt="" class="img_card_pro1">
        </div>
    </section>

    <section id="products" class="section-p1">
        <h2>Une collection pour fille</h2>
        <p class="clignotement">Shopping life !</p>
        <div class="pro-container">
            <div class="pro">
                <img src="../images/product/fille/k1.jpg" alt="">
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
                <img src="../images/product/fille/k9.jpg" alt="">
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
                <img src="../images/product/fille/k1.jpg" alt="">
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
                <img src="../images/product/fille/k13.jpg" alt="">
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
                <img src="../images/product/fille/k14.jpg" alt="">
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
                <img src="../images/product/fille/k9.jpg" alt="">
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
                <img src="../images/product/fille/k14.jpg" alt="">
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
                <img src="../images/product/fille/k1.jpg" alt="">
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

    <!-- gift section -->
    <section class="gift_section layout_padding-bottom">
        <div class="box ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="img_container">
                            <div class="img-box">
                                <img src="../images/gifts.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    CADEAUX POUR VOS <br> PROCHES
                                </h2>
                            </div>
                            <p>
                                Omnis ex nam laudantium odit illum harum, excepturi accusamus at corrupti, velit
                                blanditiis unde perspiciatis, vitae minus culpa? Beatae at aut consequuntur porro
                                adipisci aliquam eaque iste ducimus expedita accusantium?
                            </p>
                            <div class="btn-box">
                                <a href="#" class="btn1">
                                    Acheter maintenant
                                </a>
                                <a href="#" class="btn2">
                                    Voir plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include "footer.php"
?>