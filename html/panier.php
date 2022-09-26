<?php 
   
   include_once "connexion.php";
   include_once "header.php";
   var_dump($_SESSION);
   var_dump($total);
   //supprimer les produits
   //si la variable del existe
   if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    //suppression
    unset($_SESSION['panier'][$id_del]);
   }
?>
   <div class="bouton-panier">
    <a href="index.php" class="link1">Retournez sur la boutique</a>
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

       <!-- le bouton payer -->
        <div class="bouton-achat">
        
    <a href= <?php echo "paiement.php?total=$total"?> class="link2">Payez par carte bancaire</a>
</div>
    </section>
    
</div>



</body>
</html>