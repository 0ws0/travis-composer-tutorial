<?php

namespace phptravis\Unit;

use phptravis\Dumper\Dumper;
use PHPUnit\Framework\TestCase;

/**
 * DumperTest
 *
 */
class DumperTest extends TestCase
{
    /**
     * 测试 Dumper 类实例化
     *
     * @return void
     */
    public function testDumper()
    {
        $dumper = new \phptravis\Dumper\Dumper();

        $this->assertInstanceOf(\phptravis\Dumper\Dumper::class, $dumper);
    }

    public function testnew()
    {
        $dumper = new \phptravis\Dumper\Dumper();
        $ret = $dumper->new();
        $this->assertTrue($ret);

    }

    public function testtest()
    {
        $dumper = new \phptravis\Dumper\Dumper();
        $ret = $dumper->test();
         $this->assertTrue($ret);

    }

}
