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

    /**
     * @test
     * @expectedException BadMethodCallException
     **/
    public function it_doesnt_like_bad_methods()
    {
        $metadata = new Resource;
        $metadata->totallyBogus();
    }

    /** @test **/
    public function it_returns_null_for_unrecognized_attributes()
    {
        $metadata = new Resource;
        $this->assertNull($metadata->getSomethingFake());
    }
    
    /** @test **/
    public function it_works_like_an_array()
    {
        $metadata = new Resource;
        $metadata->setDescription('Test Description');

        $this->assertTrue(isset($metadata['Description']));
        $this->assertSame('Test Description', $metadata['Description']);
    }
    
    /** @test **/
    public function it_sets_like_an_array()
    {
        $metadata = new Resource;
        $metadata['Description'] = "Array setter";

        $this->assertSame("Array setter", $metadata->getDescription());

        unset($metadata['Description']);

        $this->assertNull($metadata->getDescription());
    }
}
