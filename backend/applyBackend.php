<?php
require_once 'validator.php';
require_once 'config.php';
require_once 'applyHandler.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validator = new Validator();
    $database = new Database();
    $signupHandler = new applyHandler($database);

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $type = $_POST['type'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm'] ?? '';
    $bday = $_POST['bday'] ?? '';
    $gender = $_POST['gender'] ?? '';

    $errors = [];

    if (!$validator->validateName($name)) $errors[] = "Invalid name.";
    if (!$validator->validateEmail($email)) $errors[] = "Invalid email.";
    if (!$validator->validatePhone($phone)) $errors[] = "Invalid phone number.";
    if (!$validator->validatePasswords($password, $confirmPassword)) $errors[] = "Passwords do not match.";
    if (!$validator->validateDate($bday)) $errors[] = "Invalid date.";
    if (!$validator->validateDropdown($type)) $errors[] = "Invalid card type.";
    if (!$validator->validateDropdown($gender)) $errors[] = "Invalid gender.";

    if (empty($errors)) {
        $signupHandler->insertUser([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'type' => $type,
            'password' => $password,
            'bday' => $bday,
            'gender' => $gender
        ]);
        echo "Signup successful!";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>