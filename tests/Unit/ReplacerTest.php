<?php

namespace Petris;

use Petris\Replacements\Interfaces\Replaceable;
use PHPUnit\Framework\TestCase;

class ReplacerTest extends TestCase
{
    /** @test **/
    public function hasBuilderInterfaceToAddMultipleReplacements()
    {
        $stub1 = $this->getMockBuilder(Replaceable::class)
                      ->getMock();

        $stub2 = $this->getMockBuilder(Replaceable::class)
                      ->getMock();

        $sut = (new Replacer())
                    ->addReplacement($stub1)
                    ->addReplacement($stub2);

        $this->assertInstanceOf(Replacer::class, $sut);
    }

    /** @test */
    public function returnsStringBasedOnReplacers()
    {
        $replacer = $this->getMockBuilder(Replaceable::class)
                         ->getMock();

        $replacer->expects($this->once())
                 ->method('conditionWasMet')
                 ->willReturn(true);

        $replacer->expects($this->once())
                 ->method('replacement')
                 ->willReturn('test');

        $sut = (new Replacer())->addReplacement($replacer);

        $this->assertEquals('test', $sut->replace(1));
    }
}
