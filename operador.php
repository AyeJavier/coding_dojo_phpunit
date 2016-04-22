<?php
  //namespace /opreador;
  class operador
  {
    private $x;
    private $y;
    private $z;

    public function __construct($x,$y,$z)
    {
      $this->x = $x;
    }

    public function entregaX()
    {
      return $this->x;
    }

  }
