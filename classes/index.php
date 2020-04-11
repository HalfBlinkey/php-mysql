<?php
  /**
   * RailCar SuperClass
   */
  class RailCar
  {
    private $id, $usage;

    // static property $car_count will track the number
    // of new instances created in this class
    private static $car_count = 0;

    public function __construct( $id, $usage )
    {
      $this -> id = $id;
      $this -> usage = $usage;

      // update static property
      self::$car_count++;
    }

    // a public method to retrieve the static property
    public static function getCar_count() {
      return self::$car_count;
    }

    // display the status of all the instances properties
    // ** THIS PROPERTY SHOULD BE INHERITED **
    // ** AND DISPLAY ALL PUBLIC AND PRIVATE **
    // **PROPERTY**
    public function toString() {
      echo '<ul>';
      foreach ($this as $name => $value) {
        echo "<li>$name = $value</li>";
      }
      echo '</ul>';
    }
  }


  /**
   *  PassCar extends RailCar
   */
  class PassCar extends RailCar
  {
    private $seats, $berth, $service;

    public function __construct( $id, $usage, $seats, $berth, $service )
    {
      $this -> id = $id;
      $this -> usage = $usage;
      $this -> seats = $seats;
      $this -> berth = $berth;
      $this -> service = $service;

      //call RailCar construct to finish initialization
      parent::__construct($id, $usage);
    }
    // display the status of all the instances properties
    //** UNLESS METHOD IS HARD CODED IN EVERY**
    //** SUBCLASS NEW PRIVATE PROPERTIES AREN'T**
    //** DISPLAYED**
    public function toString() {
      echo '<ul>';
      foreach ($this as $name => $value) {
        echo "<li>$name = $value</li>";
      }
      echo '</ul>';
    }
  }


  /**
   * CargoCar extends RailCar
   */
  class CargoCar extends RailCar
  {
    private $cargo, $capacity;

    public function __construct( $id, $usage, $cargo, $capacity )
    {
      $this -> id = $id;
      $this -> usage = $usage;
      $this -> cargo = $cargo;
      $this -> capacity = $capacity;

      //call RailCar construct to finish initialization
      parent::__construct($id, $usage);
    }
    // display the status of all the instances properties
    //** UNLESS METHOD IS HARD CODED IN EVERY**
    //** SUBCLASS NEW PRIVATE PROPERTIES AREN'T**
    //** DISPLAYED**
    public function toString() {
      echo '<ul>';
      foreach ($this as $name => $value) {
        echo "<li>$name = $value</li>";
      }
      echo '</ul>';
    }
  }

  // head to rail_car php
  include('rail_car.php');
  exit();
?>
