<?php

namespace Tests\Replacements;

use Petris\Replacements\DivisibleByThree;
use PHPUnit\Framework\TestCase;

class DivisibleByThreeTest extends TestCase
{
    /** @test **/
    public function checkConditionWasMet()
    {
        $sut = new DivisibleByThree();

        $this->assertTrue($sut->conditionWasMet(3));
        $this->assertTrue($sut->conditionWasMet(6));
        $this->assertTrue($sut->conditionWasMet(15));

        $this->assertFalse($sut->conditionWasMet(2));
        $this->assertFalse($sut->conditionWasMet(1));
        $this->assertFalse($sut->conditionWasMet(14));
    }

    /** @test **/
    public function hasAReplacementString()
    {
        $sut = new DivisibleByThree();

        $this->assertEquals("Co", $sut->replacement());
    }
}
