<?php
function create_random_password($password_length, $characters_type)
{

    $characters = "";
    if (in_array('alfa_upper', $characters_type)) {
        $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if (in_array('alfa_lower', $characters_type)) {
        $characters .= 'abcdefghijklmnopqrstuvwxyz';
    }
    if (in_array('number', $characters_type)) {
        $characters .= '1234567890';
    }
    if (in_array('simbol', $characters_type)) {
        $characters .= '!"$%&/()=?\^@#[]*';
    }
    if (!is_numeric($password_length)) {
        $length = 4;
    }
    $string = '';
    for ($i = 0; $i < $password_length; $i++) {
        $string = $string . substr($characters, rand(0, strlen($characters) - 1), 1);
    }
    return $string;
}
