<?php

namespace Petris\Replacements\Interfaces;

interface Replaceable
{
    public function conditionWasMet(int $number);

    public function replacement();
}
