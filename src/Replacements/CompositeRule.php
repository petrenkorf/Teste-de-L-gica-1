<?php

namespace Petris\Replacements;

use Petris\Replacements\Interfaces\Collector;
use Petris\Replacements\Interfaces\Replaceable;

class CompositeRule implements Replaceable, Collector
{
    protected $replacements;

    public function addReplacement(Replaceable $replaceable)
    {
        $this->replacements[] = $replaceable;

        return $this;
    }

    public function conditionWasMet(int $number)
    {
        foreach ($this->replacements as $rule) {
            if (!$rule->conditionWasMet($number)) {
                return false;
            }
        }

        return true;
    }

    public function replacement()
    {
        $reducer = function ($carry, $item) {
            return $carry .= $item->replacement();
        };

        return array_reduce($this->replacements, $reducer, "");
    }
}
