<?php

namespace Petris;

use Petris\Replacements\Interfaces\Collector;
use Petris\Replacements\Interfaces\Replaceable;

class Replacer implements Collector
{
    private $replacementRules = [];

    public function addReplacement(Replaceable $replaceable)
    {
        $this->replacementRules[] = $replaceable;

        return $this;
    }

    public function replace($number)
    {
        foreach ($this->replacementRules as $rule) {
            if ($rule->conditionWasMet($number)) {
                return $rule->replacement();
            }
        }

        return $number;
    }
}
