<?php

namespace Petris\Replacements;

class NoReplacement implements Replaceable
{
    protected $number;

    public function conditionWasMet(int $number)
    {
        $this->number = $number;

        return true;
    }

    public function replacement()
    {
        if (!$this->number) {
            throw new NoEvaluationException("Missing value to evaluate");
        }

        return $this->number;
    }
}
