<?php

namespace Tests\Replacements;

use Petris\Replacements\NoEvaluationException;
use Petris\Replacements\NoReplacement;
use PHPUnit\Framework\TestCase;

class NoReplacementTest extends TestCase
{
    /** @test **/
    public function checkConditionWasMet()
    {
        $sut = new NoReplacement();

        $this->assertTrue($sut->conditionWasMet(5));
        $this->assertTrue($sut->conditionWasMet(3));
        $this->assertTrue($sut->conditionWasMet(15));
        $this->assertTrue($sut->conditionWasMet(2));
        $this->assertTrue($sut->conditionWasMet(1));
        $this->assertTrue($sut->conditionWasMet(0));
    }

    /** @test **/
    public function returnsLastEvaluatedNumberAsReplacement()
    {
        $sut = new NoReplacement();

        $sut->conditionWasMet(45);
        $this->assertEquals(45, $sut->replacement());
    }

    /** @test **/
    public function failsWhenRetrievingReplacementBeforeEvaluateANumber()
    {
        $this->expectException(NoEvaluationException::class);
        $sut = new NoReplacement();
        $sut->replacement();
    }
}
