<?php

class UserPremium extends user
{
  protected $startDate; //YYYY-MM-DD

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
    var_dump($this->name."'s Premium Level = " . $interval->y);
    return $interval->y;
  }

  public function getDiscount($lvl){
    if($lvl >= 5) {
      var_dump($this->name . "'s Discount = 50%");
      return 50;
    }
    var_dump($this->name . "'s Discount = " . $lvl * 10 . "%");
    return $lvl*10;
  }
}
