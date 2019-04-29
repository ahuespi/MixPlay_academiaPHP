<?php

class AddController implements ControllerInterface
{
   private $number;
   private $number2;
   public function get()
   {
      if (isset($_GET['fn']) && isset($_GET['sn']) ) {
          $this->number = $_GET['fn'];
          $this->number2 = $_GET['sn'];
          return $this->number + $this->number2;
      }
      return "No hay numeros para sumar";
   }
   public function post()
   {
      return "Metodo post de Add Controller";
   }
}