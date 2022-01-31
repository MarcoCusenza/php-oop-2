<?php

class UserPremium extends user
{
  protected $startDate;

  public function __construct($_name, $_surname, $_email, $_address, $_phone, $_startDate)
  {
    parent::__construct($_name, $_surname, $_email, $_address, $_phone);
    $this->startDate = $_startDate;
  }

  public function getLevel() //Il livello è determinato dagli anni di iscrizione al piano premium
  {
    $today = new DateTime("now");
    $start = new DateTime($this->startDate);
    $interval = $start->diff($today);
    return $interval->y;
  }

  public function getDiscount($lvl){//Per ogni anno di abbonamento Premium lo sconto aumenta del 10%. Sconto massimo: 50%
    if($lvl >= 5) {
      return 50;
    }
    return $lvl*10;
  }
}
