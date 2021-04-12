<?php

namespace Petris\Replacements;

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
