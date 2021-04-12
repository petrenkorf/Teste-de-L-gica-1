<?php

namespace Petris\Replacements;

interface Replaceable
{
    public function conditionWasMet(int $number);

    public function replacement();
}
