<?php

class TheirHello implements helloInterface, GoodByeInterface {

  public function sayHello(string $name) {
    return "\n Hello $name\n  --- theirs";
  }

  public function sayGoodBye(string $name): string {
    return "\n Goodbye $name\n  --- theirs";
  }

}
