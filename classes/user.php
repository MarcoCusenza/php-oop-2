<?php

class User
{
  protected $name;
  protected $surname;
  protected $email;
  protected $address;
  protected $phone;

  function __construct($_name, $_surname, $_email, $_address, $_phone)
  {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
    $this->address = $_address;
    $this->phone = $_phone;
  }
}