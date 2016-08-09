<?php
require_once 'User.php';

$user = new User();
$user->username = 'meep';
$user->email = 'teej@gmail.com';
$user->PASSWORD = 'tjisawesome';
$user->save();

var_dump($user);
var_dump(User::find(1));
$user->delete();

