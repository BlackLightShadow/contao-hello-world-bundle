<?php

namespace HKri\ContaoHelloWorldBundle\Tests;

use HKri\ContaoHelloWorldBundle\ContaoHelloWorldBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoHelloWorldBundle();

        $this->assertInstanceOf('HKri\ContaoHelloWorldBundle\ContaoHelloWorldBundle', $bundle);
    }
}
