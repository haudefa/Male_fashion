<?php 
   session_start();
   include_once "connexion.php";

   //supprimer les produits
   //si la variable del existe
   if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    //suppression
    unset($_SESSION['panier'][$id_del]);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Panier</title>
    <!-- icons lien-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- icons lien-->

    <!-- CSS lien-->
    <link rel="stylesheet" href="/style/stylepanier.css">
    <!-- CSS lien-->

    <!-- CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap lien-->
    <link rel="stylesheet" href="/html/stylepanier.css">

</head>




<body>


<section id="header">
<a href="#"><img src="../images/footer-logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
            <li> <a class="active" href="index.php">Accueil</a></li>
                <li> <a href="Homme.php">Homme</a></li>
                <li> <a href="Femme.php">Femme</a></li>
                <li> <a href="Enfants.php">Enfants</a></li>
                <li> <a href="Contact.php">Contact</a></li>
        </div>
        <div id="mobile">
            <a href="panier.php"><i class='bx bx-cart'></i></a>
            <i id="bar" class='bx bx-menu'></i>
        </div>
    </section>
   <div class="bouton-panier">
    <a href="index.php" class="link">Retournez sur la boutique</a>
</div>


<div class="panier">


    <section>
        <table>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th id="delete">Action</th>
            </tr>
            <?php 
              $total = 0 ;
              // liste des produits
              //récupérer les clés du tableau session
              $ids = array_keys($_SESSION['panier']);
              //s'il n'y a aucune clé dans le tableau
              if(empty($ids)){
                echo "Votre panier est vide";
              }else {
                //si oui 
                $products = mysqli_query($con, "SELECT * FROM clothes WHERE id IN (".implode(',', $ids).")");

                //lise des produit avec une boucle foreach
                foreach($products as $product):
                    //calculer le total ( prix unitaire * quantité) 
                    //et aditionner chaque résutats a chaque tour de boucle
                    $total = $total + $product['price'] * $_SESSION['panier'][$product['id']] ;
                ?>
                <tr>
                    <td><img class="product-img" src="/images/product/product-img/<?=$product['image']?>"></td>
                    <td><?=$product['name']?></td>
                    <td><?=$product['price']?>€</td>
                    <td><?=$_SESSION['panier'][$product['id']] // Quantité?></td>
                    <td><a href="panier.php?del=<?=$product['id']?>"><img class="delete-img" src="/images/delete200px.png"></a></td>
                </tr>

            <?php endforeach ;} ?>

            <tr class="total">
                <th id="total-price">Total : <?=$total?>€</th>
            </tr>

        </table>
    </section>
    

    
</div>
</body>
</html>