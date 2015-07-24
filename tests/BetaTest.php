<?php


namespace League\Skeleton\Test;

use League\Skeleton\Beta;

/**
 * Class BetaTest.
 */
class BetaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \League\Skeleton\Beta
     */
    protected $beta;

    public function testSetAlpha()
    {
        $alpha = $this->getMockAlpha();
        $this->beta->setAlpha($alpha);
        $this->assertSame($alpha, $this->beta->getAlpha());
    }

    public function testSayBeta()
    {
        $alpha = $this->getMockAlpha();
        $this->beta->setAlpha($alpha);
        $this->assertEquals('this is alpha mock and this is beta', $this->beta->sayBeta());
    }

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->beta = new Beta();
    }

    /**
     * @return \League\Skeleton\AlphaInterface
     */
    protected function getMockAlpha()
    {
        $alpha = $this->getMockBuilder('\League\Skeleton\AlphaInterface')
            ->getMock();

        $alpha->method('sayAlpha')
            ->willReturn('this is alpha mock');

        return $alpha;
    }
}
