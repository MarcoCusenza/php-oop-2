<?php
//require __DIR__ . '/classes/CreditCard.php';

class User
{
  protected $name;
  protected $surname;
  protected $email;
  protected $address;
  protected $phone;

  protected $creditCard;

  function __construct($_name, $_surname, $_email, $_address, $_phone)
  {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
    $this->address = $_address;
    $this->phone = $_phone;
  }

  function getName()
  {
    return $this->name;
  }

  function getSurname()
  {
    return $this->surname;
  }

  function getFullName()
  {
    return "$this->name" . " $this->surname";
  }

  function insertCreditCard($card)
  {
    if(!$card->isValid()){
      throw new Exception("La carta di credito che stai provando a registrare nel tuo account è scaduta. Operazione NON riuscita.");
    }
    $this->creditCard = $card;
  }
}
