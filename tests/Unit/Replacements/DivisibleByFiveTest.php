<?php

namespace Tests\Replacements;

use Petris\Replacements\DivisibleByFive;
use PHPUnit\Framework\TestCase;

class DivisibleByFiveTestTest extends TestCase
{
    /** @test **/
    public function checkConditionWasMet()
    {
        $sut = new DivisibleByFive();

        $this->assertTrue($sut->conditionWasMet(5));
        $this->assertTrue($sut->conditionWasMet(10));
        $this->assertTrue($sut->conditionWasMet(15));

        $this->assertFalse($sut->conditionWasMet(2));
        $this->assertFalse($sut->conditionWasMet(1));
        $this->assertFalse($sut->conditionWasMet(14));
    }

    /** @test **/
    public function hasAReplacementString()
    {
        $sut = new DivisibleByFive();

        $this->assertEquals("Blue", $sut->replacement());
    }
}
