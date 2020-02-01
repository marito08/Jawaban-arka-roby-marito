<?php

function username($username){
    return preg_match('/^[a-z][a-zA-Z_0-9]{5,11}$/',$username);
}

function password($password){
    return preg_match('/[0-9]{1}[A-Z]{5}.{1}/',$password);
}

if(username('friska_putri')){
    echo '<p>Username valid</p>';
}else{
    echo '<p>Username Tidak valid</p>';
}

if(password('1WORLD!')){
    echo '<p>Password valid</p>';
}else{
    echo '<p>Password tidak valid</P>';
}

?>

