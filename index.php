<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form  action=""  method="GET">
        <div>
          <label  for="nom">Nom :</label>
          <input  type="text"  id="nom"  name="user_name">
        </div>
        <div>
          <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
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