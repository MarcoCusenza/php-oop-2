<?php
class CreditCard
{
  protected $owner;
  private $number;
  private $cvv;
  private $expiry;

  function __construct($_owner, $_number, $_cvv, $_expiry)
  {
    $this->owner = $_owner;
    $this->number = $_number;
    $this->cvv = $_cvv;
    $this->expiry = $_expiry;
  }

  function isValid()
  {
    $today = date("today");
    var_dump($today);
    $end = date($this->expiry);
    var_dump($end);
  }
}