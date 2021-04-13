<?php

namespace Test\Replacements;

use Petris\Replacements\CompositeRule;
use Petris\Replacements\Interfaces\Replaceable;
use PHPUnit\Framework\TestCase;

class CompositeRuleTest extends TestCase
{
    /** @test **/
    public function checkConditionWasMet()
    {
        $stub1 = $this->getMockBuilder(Replaceable::class)
                      ->getMock();

        $stub1->method('conditionWasMet')
              ->willReturn(true);

        $stub2 = $this->getMockBuilder(Replaceable::class)
                      ->getMock();

        $stub2->method('conditionWasMet')
            ->willReturn(true);

        $sut = (new CompositeRule())
                    ->addReplacement($stub1)
                    ->addReplacement($stub2);

        $this->assertTrue($sut->conditionWasMet(1));
    }

    /** @test **/
    public function hasAReplacementString()
    {
        $stub1 = $this->getMockBuilder(Replaceable::class)
                      ->getMock();

        $stub1->method('replacement')
              ->willReturn("Co");

        $stub2 = $this->getMockBuilder(Replaceable::class)
                      ->getMock();

        $stub2->method('replacement')
              ->willReturn("Blue");

        $sut = (new CompositeRule())
            ->addReplacement($stub1)
            ->addReplacement($stub2);

        $this->assertEquals("CoBlue", $sut->replacement());
    }
}
