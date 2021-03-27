<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My first form</title>
</head>
<body>
    <form  action="check.php"  method="POST">
        <div>
          <label  for="prenom">Prénom :</label>
          <input required type="text"  id="prenom"  name="user_first_name" value="<?php if(!empty($_GET['user_first_name'])) echo $_GET['user_first_name']?>">
            <?php if(isset($_GET['error_first_name'])):?>
            <p><?=$_GET['error_first_name']?></p>
            <?php endif;?>
        </div>
        <div>
          <label  for="nom">Nom :</label>
          <input required type="text"  id="nom"  name="user_last_name" value="<?php if(!empty($_GET['user_last_name'])) echo $_GET['user_last_name']?>">
            <?php if(isset($_GET['error_last_name'])):?>
            <p><?=$_GET['error_last_name']?></p>
            <?php endif;?>
        </div>
        <div>
          <label  for="courriel">Courriel :</label>
            <input required type="email"  id="courriel"  name="user_email" value="<?php if(!empty($_GET['user_email'])) echo $_GET['user_email']?>">
            <?php if(isset($_GET['error_email'])):?>
            <p><?=$_GET['error_email']?></p>
            <?php endif;?>
        </div>
        <div>
          <label  for="telephone">Tél :</label>
            <input required type="phone"  id="telephone"  name="user_phone" value="<?php if(!empty($_GET['user_phone'])) echo $_GET['user_phone']?>">
            <?php if(isset($_GET['error_phone'])):?>
            <p><?=$_GET['error_phone']?></p>
            <?php endif;?>
        </div>
        <div>
          <label  for="sujet">Sujet :</label>
            <select required name="email_subject" id="sujet" >
              <option value="Votre Chien" <?php if (!empty($_GET['email_subject']) && $_GET['email_subject'] === 'Votre Chien') echo 'selected';?>>Votre Chien</option>
              <option value="Votre Chat"<?php if (!empty($_GET['email_subject']) &&($_GET['email_subject'] === 'Votre Chat')) echo 'selected';?>>Votre Chat</option>
              <option value="Votre Hamster" <?php if (!empty($_GET['email_subject']) &&($_GET['email_subject'] === 'Votre Hamster')) echo 'selected';?>>Votre Hamster</option>
              <option value="Votre Lapin" <?php if (!empty($_GET['email_subject']) &&($_GET['email_subject'] === 'Votre Lapin') )echo 'selected';?>>Votre Lapin</option>
              <option value="Votre Poisson rouge"<?php if (!empty($_GET['email_subject']) &&($_GET['email_subject'] === 'Votre Poisson rouge')) echo 'selected';?>>Votre Poisson rouge</option>
            </select>
            <?php if(isset($_GET['error_subject'])):?>
            <p><?=$_GET['error_subject']?></p>
            <?php endif;?>
          </div>
          <div>
          <label  for="message">Message :</label>
          <textarea required id="message"  name="user_message" ><?php if(!empty($_GET['user_message'])) echo $_GET['user_message']?></textarea>
            <?php if(isset($_GET['error_message'])):?>
            <p><?=$_GET['error_message']?></p>
            <?php endif;?>
        </div>
        <div  class="button">
          <button  type="submit">Envoyer votre message</button>
        </div>
      </form>
</body>
</html>