<?php
class Validator {
    public function validateName($name) {
        return !empty($name) && preg_match("/^[a-zA-Z\s]+$/", $name);
    }

    public function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function validatePhone($phone) {
        $phone = str_replace(' ', '', $phone);
        return preg_match("/^[0-9]{9,11}$/", $phone);
    }

    public function validatePasswords($password, $confirmPassword) {
        return !empty($password) && $password === $confirmPassword;
    }

    public function validateDate($date) {
        return strtotime($date) !== false;
    }

    public function validateDropdown($value) {
        return !empty($value);
    }
}
?>
