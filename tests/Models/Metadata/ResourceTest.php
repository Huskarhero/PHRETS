<?php

use PHRETS\Models\Metadata\Resource;

class ResourceTest extends PHPUnit_Framework_TestCase {

    /** @test **/
    public function it_holds()
    {
        $metadata = new Resource;
        $metadata->setDescription('Test Description');

        $this->assertSame('Test Description', $metadata->getDescription());
    }

    /** @test **/
    public function it_doesnt_like_bad_methods()
    {
        $this->setExpectedException('\\BadMethodCallException');
        $metadata = new Resource;
        $metadata->totallyBogus();
    }

    /** @test **/
    public function it_returns_null_for_unrecognized_attributes()
    {
        $metadata = new Resource;
        $this->assertNull($metadata->getSomethingFake());
    }
}
