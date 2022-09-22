<?php
include_once 'connexion.php';
include 'header.php';

// vérifire la conection 
if ($con !== false); {
  // verifié si POST n'ai pas vide  
  if (isset($_POST)) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    
    // requete pour selectionner  la colone mail 
    $result=mysqli_query($con,"SELECT * FROM users WHERE mail='".$mail."'");
     
    // récuperer le resulta 
    $result=$result->fetch_assoc();
 
    if($result !==null){
      $_GET['mail']=$result['mail'];
      $_GET['phone_number']=$result['phone_number'];
    }   
    // verifier si le mail est numéro de telephone ne sont pas deja dans la bdd
    // vérifier si le password est déja utilisé ? 
    $lenMinPass=strlen($_POST['password']);
    
  
    
    
    if(empty($_GET)){
        if($lenMinPass >= 12 ){
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
    mysqli_stmt_bind_param($query,'ssssss', $lastname, $firstname, $mail, $address, $phone_number, $password);
        //1.recuperer les valeur utilisateur en les en les protégent 
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    // on execute la requete en injectent les donner utilisateur 
    $result = mysqli_stmt_execute($query);
   

    $data=mysqli_query($con,"SELECT * FROM users WHERE mail='".$mail."'");
     $data=$data->fetch_assoc();
    

    
     if($data!==false){
      $_SESSION['user_id']=$data['id'];
      $_SESSION['role']=$data['role'];
      if(!empty($_SESSION)){
        echo"<div class='info1'>
        <h2>l'inscription est un sucecce</h2>
        <a href='index.php'>connecter vous</a>
     </div>";
      }
    }
  }else{
    echo"<div class='info1'>
    <h3>le mots de passe est trop cours </h3>
    <button data-bs-toggle='modal' data-bs-target='#signupModal'>
     S'inscrire    
    </div>";
}     
 }else{
  echo"<div class='info1'>
  <h3>une ereur c'est produit pendant l'inscription</h3>
  <p>le mail ou le numéro de téléphone est deja utilisé</p>
  <p>veuiller recomancer l'inscription </p>
  <button data-bs-toggle='modal' data-bs-target='#signupModal'>
  S'incrire
  </button>     
  </div>";
}
}
}


include "footer.php";
