<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My first form</title>
</head>
<body>
    <form  action="thanks.php"  method="POST">
        <div>
          <label  for="prenom">Prénom :</label>
          <input  type="text"  id="prenom"  name="user_first_name">
        </div>
        <div>
          <label  for="nom">Nom :</label>
          <input  type="text"  id="nom"  name="user_last_name">
        </div>
        <div>
          <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
          <label  for="telephone">Tél :</label>
            <input  type="phone"  id="telephone"  name="user_phone">
        </div>
        <div>
          <label  for="sujet">Sujet :</label>
            <select name="email_subject" id="sujet">
              <option value="Votre Chien">Votre Chien</option>
              <option value="Votre Chat">Votre Chat</option>
              <option value="Votre Hamster">Votre Hamster</option>
              <option value="Votre Lapin">Votre Lapin</option>
              <option value="Votre Poisson rouge">Votre Poisson rouge</option>
            </select>
          </div>
          <div>
          <label  for="message">Message :</label>
          <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
          <button  type="submit">Envoyer votre message</button>
        </div>
      </form>
</body>
</html>