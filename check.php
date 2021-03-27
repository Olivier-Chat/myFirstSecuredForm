<?php
$errors = [];
function testInput (string $inputValue):string
{
    $inputValue = trim($inputValue);
    $inputValue = stripcslashes($inputValue);
    $inputValue = htmlspecialchars($inputValue);
    return $inputValue;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(empty($_POST['user_first_name'])){
        $errors['error_first_name'] =  "This field must not be empty";
    }
    if(empty($_POST['user_last_name'])){
        $errors['error_last_name'] =  "This field must not be empty";
    }
    if(empty($_POST['user_email'])){
        $errors['error_email'] =  "This field must not be empty";
    }
    if(!filter_var($_POST['user_email'],FILTER_VALIDATE_EMAIL)){
        $errors['error_email'] = "This is not an email address";
    }
    if(empty($_POST['user_phone'])){
        $errors['error_phone'] =  "This field must not be empty";
    }
    if(empty($_POST['email_subject'])){
        $errors['error_subject'] =  "This field must not be empty";
    }
    if(empty($_POST['user_message'])){
        $errors['error_message'] =  "This field must not be empty";
    }
}


$cleanedPost = array_map(testInput, $_POST);
$query = http_build_query($cleanedPost);
if (count($errors) === 0){
    header('Location: thanks.php?'.$query);
}
else{
    $query .= '&'.http_build_query($errors);
    header('Location: index.php?'.$query);
}






