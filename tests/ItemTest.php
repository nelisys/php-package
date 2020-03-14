<?php

namespace Nelisys\PhpPackage\Tests;

use PHPUnit\Framework\TestCase;
use Nelisys\PhpPackage\Item;

class ItemTest extends TestCase
{
    /** @test */
    public function it_can_say_hello()
    {
        $item = new Item();

        $this->assertTrue(true);
    }
}
