<?php

/**
 * The file is a part of Saphon
 * project. Please use it under
 * its license.
 *
 * @package  Saphon
 * @license  MIT
 * @author   Tianle Xu <xtl@xtlsoft.top>
 * @category framework
 * @link     https://github.com/xtlsoft/Saphon/
 */

namespace Saphon\Tests;

use Saphon\Environment;
use PHPUnit\Framework\TestCase;

class EnvironmentTest extends TestCase
{
    public function testGetSapi()
    {
        $this->assertEquals('cli', Environment::getSapi());
    }

    public function testGetVersion()
    {
        $this->assertEquals(Environment::getVersion(), Environment::getVersion());
        $this->assertNotNull(Environment::getVersion());
    }
}
