<?php
use App\Model\User;
use App\HTML\Form;
use App\Connection;

$user = new User();
$errors = [];

if (!empty($_POST)) { 
	$user->setUsername($_POST['username']);
	 $user->setMail($_POST['mail']);

	if (!empty($_POST['username']) && !empty($_POST['mail']) && !empty($_POST['password'])) {
   
  $errors['password'] = 'Identifiant ou mot de passe incorrect';


//$u=$user->insertUsers($_POST['username'],$_POST['mail'] ,$_POST['password']);
echo'ok';


	}










}



















$form = new Form($user, $errors);

?>





<h1>Inscription</h1>


<form action="" method="POST">
	 <?= $form->input('username', 'Nom d\'utilisateur'); ?>
	  <?= $form->input('mail', 'Adresse mail'); ?>
    <?= $form->input('password', 'Mot de passe'); ?>
    <?= $form->input('password', 'Confirmer mot de passe'); ?>

    <button type="submit" class="btn btn-primary">S'inscrire</button>
   
</form>