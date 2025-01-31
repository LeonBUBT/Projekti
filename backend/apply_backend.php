<?php
require_once 'validator.php';
require_once 'config.php';
require_once 'apply_query.php';
require_once 'apply_card_query.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validator = new Validator();
    $database = new Database();
    $signupHandler = new applyHandler($database);
    $cardMaker = new CardMaker($database);

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $cardtype = $_POST['cardType'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm'] ?? '';
    $bday = $_POST['bday'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $personal_number = $_POST['personal_number'];
    $accType = 'individ';
    $admin = 0;


    if($bday==='' || $gender===''){
        $accType = 'business';
    }

    $errors = [];

    if($accType === 'individ'){
        if (!$validator->validateName($name)) $errors[] = "Invalid name.";
        if (!$validator->validateEmail($email)) $errors[] = "Invalid email.";
        if (!$validator->validatePhone($phone)) $errors[] = "Invalid phone number.";
        if (!$validator->validatePasswords($password, $confirmPassword)) $errors[] = "Passwords do not match.";
        if (!$validator->validateDate($bday)) $errors[] = "Invalid date.";
        if (!$validator->validateDropdown($cardtype)) $errors[] = "Invalid card type.";
        if (!$validator->validateDropdown($gender)) $errors[] = "Invalid gender.";
        if (!$validator->validatePersonalNumber($personal_number))$errors[]="Invalid Personal number.";
    }else {
        if (!$validator->validateName($name)) $errors[] = "Invalid name.";
        if (!$validator->validateEmail($email)) $errors[] = "Invalid email.";
        if (!$validator->validatePhone($phone)) $errors[] = "Invalid phone number.";
        if (!$validator->validatePasswords($password, $confirmPassword)) $errors[] = "Passwords do not match.";
        if (!$validator->validateDropdown($cardtype)) $errors[] = "Invalid card type.";
    }

    if (empty($errors)) {
        $signupHandler->insertUser([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'accType' => $accType,
            'admin' => $admin,
            'password' => $password,
            'bday' => $bday,
            'gender' => $gender,
            'pNumber'=>$personal_number
        ]);
        $cardMaker->makeCard([
           'email'=>$email,
           'cardType'=>$cardtype 
        ]);

        header("Location: ../dashboard.php");
        exit;
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>