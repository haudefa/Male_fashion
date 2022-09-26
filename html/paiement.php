<?php
include 'header.php';
var_dump($_SESSION);
var_dump($total);
?>
<body_P>
    

    
    <div class="container_P p-0">
        <div class="card px-4">
            <span class="h8 py-3">Paiement</span>
            <div class="row gx-3">
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <span class="text mb-1">Nom et prénom</span>
                        <input class="form-control mb-3" type="text" placeholder="NOM Prénom" value="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <span class="text mb-1">Numéro de la carte bancaire</span>
                        <input class="form-control mb-3" type="text" placeholder="1234 5678 435678">
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <span class="text mb-1">Date d'expiration</span>
                        <input class="form-control mb-3" type="text" placeholder="MM/YYYY">
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <span class="text mb-1">CVV/CVC</span>
                        <input class="form-control mb-3 pt-2 " type="password" placeholder="***">
                    </div>
                </div>

                <!-- le bouton payez total -->
                 <div class="col-12">
                    <div class="btn btn-primary mb-3">
                   
                        <span class="ps-3">Payez un total de <?php $total?>€</span>
                        <span class="fas fa-arrow-right"></span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    


</body>

</html>