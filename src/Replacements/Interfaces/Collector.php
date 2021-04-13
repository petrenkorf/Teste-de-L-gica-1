<?php

namespace Petris\Replacements\Interfaces;

use Petris\Replacements\Interfaces\Replaceable;

interface Collector
{
    public function addReplacement(Replaceable $replaceable);
}
