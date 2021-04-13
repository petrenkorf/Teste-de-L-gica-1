<?php

namespace Petris\Replacements;

use Petris\Replacements\Interfaces\Replaceable;

class DivisibleByThree implements Replaceable
{
    public function conditionWasMet(int $number)
    {
        return boolval($number % 3) === false;
    }

    public function replacement()
    {
        return "Co";
    }
}
