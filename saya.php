<?php
class User
{
public $name;
public $email;

public function setEmail($mail){
    $this->email=$mail;
 }
}
$user=new User;
$user->name="sato";
$user->setEmail("test@email.com");
var_dump($user);



