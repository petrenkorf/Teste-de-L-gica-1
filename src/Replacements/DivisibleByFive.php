<?php

namespace Petris\Replacements;

use Petris\Replacements\Interfaces\Replaceable;

class DivisibleByFive implements Replaceable
{
    public function conditionWasMet(int $number)
    {
        return boolval($number % 5) === false;
    }

    public function replacement()
    {
        return "Blue";
    }
}
