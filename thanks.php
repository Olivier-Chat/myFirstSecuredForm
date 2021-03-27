<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Thank you for your message</title>
</head>
<body>
    <p class="result">
    Merci <?=$_GET['user_first_name']?> <?=$_GET['user_last_name']?>  de nous avoir contacté à propos de “<?=$_GET['email_subject']?>”.
    Un de nos conseiller vous contactera soit à l’adresse <?=$_GET['user_email']?> ou par téléphone au <?=$_GET['user_phone']?> dans les plus brefs délais pour traiter votre demande : 
    <?=$_GET['user_message']?>
    </p>
</body>
</html>