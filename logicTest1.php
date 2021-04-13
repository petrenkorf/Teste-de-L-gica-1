<?php

require "./vendor/autoload.php";

use Petris\Replacer;
use \Petris\Replacements\CompositeRule;
use \Petris\Replacements\DivisibleByThree;
use \Petris\Replacements\DivisibleByFive;

$divisibleBy3And5 = (new CompositeRule())
                        ->addReplacement(new DivisibleByThree())
                        ->addReplacement(new DivisibleByFive());

$divisibleBy3 = new DivisibleByThree();
$divisibleBy5 = new DivisibleByFive();

$replacer = (new Replacer())
                ->addReplacement($divisibleBy3And5)
                ->addReplacement($divisibleBy3)
                ->addReplacement($divisibleBy5);

for ($i = 1; $i < 100; $i++) {
    print $replacer->replace($i). "\n";
}
