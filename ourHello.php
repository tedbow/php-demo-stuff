<?php
require "helloInterface.php";
require "TheirHello.php";
class ourHello extends TheirHello {

  public function sayHello(string $name) {
    return "\n Hello $name\n";
  }

  public function sayGoodBye(string $name): string  {
    return "\n Goodbye $name\n";
  }
}
