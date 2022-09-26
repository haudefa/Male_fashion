<?php
include "connexion.php";
include "header.php";
if(!empty($_POST['mail']) && !empty($_POST['password'])){
  $mail = htmlspecialchars( $_POST['mail']);
  // $password = htmlspecialchars($_POST['password']);
  
  $result=mysqli_query($con,"SELECT * FROM users WHERE mail='".$mail."'");
  $data=mysqli_fetch_assoc($result);
  var_dump($data);

  if($data !== null){
    var_dump($data['password']);
    var_dump($_POST['password']);
    // le mot de passe renvoie false;
    // $pass=password_verify($_POST['password'], $data['password']);
    var_dump($_POST);
    // var_dump($pass);
    var_dump(password_verify($_POST['password'], $data['password']));
    
    // if (password_verify($_POST['password'], $data['password']) ) {
        $_SESSION['user_id']=$data['id'];
        $_SESSION['role']=$data['role'];
        $_SESSION['panier'] = [array()];
        if(!empty($_SESSION)){
            echo"<div class='info1'>
            <h2 calsse='error'>La connexion est un succès</h2>
            <a href='index.php' class='btn btn-light'>connecter vous</a>
             
         </div>";
          
        }
      }else{
           echo"<div class='info1'>
           <h3>Une erreur c'est produite dans la connexion</h3>
           <p>Le nom ou le mot de passe est incorrect </p>
           <p>Veuillez recommencer la connexion </p>
           <button  data-bs-toggle='modal' data-bs-target='#loginModal'>
           Se connecter
           </button>     
           </div>";
      }      
    }else{
        echo"<div class='info1'>
        <h3>Une erreur c'est produit pendant la connexion</h3>
        <p>le mail  est incorrect </p>
        <p>Veuillez recommencer la connexion </p>
        <button data-bs-toggle='modal' data-bs-target='#loginModal'>
        Se connecter
        </button>     
        </div>";
}
// }








