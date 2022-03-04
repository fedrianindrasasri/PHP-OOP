<?php

/**
 * 
 * untuk membuat nullabel tambahkan ?
 *  var ?string $address = null;
 */
class Person
{

    const AUTHOR = "Fedrian Indra Sasri";

    var string $name;
    var string $address;
    var string $country = "Indonesia";

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hello $name, my name is {$this->name}" . PHP_EOL;
        }
    }

    function info()
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }


    function __destruct()
    {
        echo "Object Person $this->name is Destroyed" . PHP_EOL;
    }
}
