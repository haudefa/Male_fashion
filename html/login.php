<?php

include "connexion.php";
include "header.php";
if(!empty($_POST['mail']) && !empty($_POST['password'])){
    $mail = htmlspecialchars( $_POST['mail']);
    $password = htmlspecialchars($_POST['password']);
    $result=mysqli_query($con,"SELECT * FROM users WHERE mail='".$mail."'");
    
     $data=$result->fetch_assoc();

    if($data !== null){
        if (password_verify($_POST['password'], $data['password']) === true) {
        $_SESSION['user_id']=$data['id'];
        $_SESSION['role']=$data['role'];
        if(!empty($_SESSION)){
            echo"<div class='info1'>
            <h2 calsse='error'>La conection est un sucecce</h2>
            <button href='index.php'>
            Se connecter
            </button>  
         </div>";
          
        }
      }else{
           echo"<div class='info1'>
           <h3>une ereur c'est produit pendant La conection</h3>
           <p>le mot de passe  est incorecte </p>
           <p>veuiller recommencer l'inscription </p>
           <button  data-bs-toggle='modal' data-bs-target='#loginModal'>
           Se connecter
           </button>     
           </div>";
      }      
    }else{
        echo"<div class='info1'>
        <h3>une ereur c'est produit pendant La conection</h3>
        <p>le mail  est incorecte </p>
        <p>veuiller recommencer l'inscription </p>
        <button data-bs-toggle='modal' data-bs-target='#loginModal'>
        Se connecter
        </button>     
        </div>";
}
}



?>
<div>

</div>



