<?php
include_once 'connexion.php';
include 'header.php';
// vérifire la conection 
if ($con !== false); {
  // verifié si POST n'ai pas vide  
  if (isset($_POST)) {
    // on récuper les donner utilisateur
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    
    // requete pour selectionner  la table user par mail  
    $result=mysqli_query($con,"SELECT * FROM users WHERE mail='".$mail."'");
     
    // récuperer le resulta 
    $result=$result->fetch_assoc();
    // si le mail existe dans la bb
    if($result !==null){
      // on stock le mail et le numero dans la global GET 
      $_GET['mail']=$result['mail'];
      $_GET['phone_number']=$result['phone_number'];
    }   
    
    if(empty($_GET)){
    //  on compte le nombre de lettre dans le mot de passe
      $lenMinPass=strlen($_POST['password']);
      // verifier si le mots de passe est >= à 12 
      if($lenMinPass >= 12 ){
          // on crypte le mot de passe
          $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
   
        
     // préparer la requette pour inserer les donner utilisateur 
     $query = mysqli_prepare($con,
       "INSERT INTO users ( 
    `lastname`,
    `firstname`,
    `mail`,
    `phone_number`,
    `address`,
    `password`
    )VALUES(?,?,?,?,?,?)"
    );
    //1.on injecte le donner 
    mysqli_stmt_bind_param($query,'ssssss', $lastname, $firstname, $mail, $address, $phone_number, $password);
    // on execute la requete en injectent les donner utilisateur 
    $result = mysqli_stmt_execute($query);
    // on on créer une requete est on l'éxecute 
    $data=mysqli_query($con,"SELECT * FROM users WHERE mail='".$mail."'");
    // on recuper la table 
    $data=$data->fetch_assoc();
    
    
    // on verifi que la requete à fontioner  
    if($data!==false){
      // on le connete 
      $_SESSION['user_id']=$data['id'];
      $_SESSION['role']=$data['role'];
      $_SESSION['panier'] =[ array()];
      // on verifie si il est connecter 
      if(!empty($_SESSION)){
        // on affiche un message que le ramenne sur la page d'aceuille
        echo"<div class='info1'>
        <h2>L'inscription est un succès</h2>
        <a href='index.php' class='btn btn-light'>Connectez-vous ici</a>
        </div>";
        var_dump($_POST['password']);
        var_dump($_POST);
      }
    }
  }else{
    echo"<div class='info1'>
    <h3>Le mot de passe est trop court </h3>
    <button data-bs-toggle='modal' data-bs-target='#signupModal'>
     S'inscrire  
     </button>    
    </div>";
}     
 }else{
  echo"<div class='info1'>
  <h3>Une erreur c'est produit pendant l'inscription</h3>
  <p>Le mail ou le mot de passe est deja utilisé</p>
  <p>Veuillez recommencer l'inscription </p>
  <button data-bs-toggle='modal' data-bs-target='#signupModal'>
  S'inscrire
  </button>     
  </div>";
}
}
}


include "footer.php";