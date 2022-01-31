<?php

class Product
{
  protected $brand;
  protected $model;
  protected $price;
  protected $availability;

  function __construct($_brand, $_model, $_price, $_availability)
  {
    $this->brand = $_brand;
    $this->model = $_model;
    $this->price = $_price;
    $this->availability = $_availability;
  }
}
