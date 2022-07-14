<?php

/**
 * @param string $do
 *
 * @return string
 */
function returnSomething(string $do): string {
  switch ($do) {
    case "string":
      return "hello";
    case "array":
      return "the string with the word array in it";
  }
  print "\n there will be no return";
}


print_r(returnSomething("string"));
print "\n*****\n";
print_r(returnSomething("array"));
print "\n*****\n";
print str_rot13(returnSomething('other'));




