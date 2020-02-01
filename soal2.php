<?php

function username($username){
	return preg_match('/^[x][A-Z]{4,7}[x]/',$username);
    // return preg_match('/^[a-z][a-zA-Z_0-9]{5,11}$/',$username);
}

function password($password){
	return preg_match('/[a-z0-9][A-Z]{3,3}.{1}$/', $password);
    // return preg_match('/[0-9]{1}[A-Z]{5}.{1}/',$password);
}

if(username('xFATHURROOOx')){
    echo '<p>Username valid</p>';
}else{
    echo '<p>Username Tidak valid</p>';
}

if(password('1WOR-')){
    echo '<p>Password valid</p>';
}else{
    echo '<p>Password tidak valid</P>';
}

?>

