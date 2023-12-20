<?php

namespace PlusTimeIT\EasyForms\Tests\Unit\Attributes;

use PlusTimeIT\EasyForms\Traits\Attributes\HasMaxLength;

/**
 * @internal
 *
 * @coversNothing
 */
class HasMaxLengthTest extends \PlusTimeIT\EasyForms\Tests\Unit\Attributes\AttributeTestCase
{
    public $traitedClass;

    public function setUp(): void
    {
        parent::setUp();
        $this->traitedClass = new class
        {
            use HasMaxLength;
        };
    }

    public function testCanGetMaxLength()
    {
        $this->traitedClass->setMaxLength(2);
        $this->assertSame(2, $this->traitedClass->getMaxLength());
    }

    public function testCanSetMaxLength()
    {
        $this->traitedClass->setMaxLength(6);
        $this->assertEquals($this->traitedClass->getMaxLength(), 6);
    }

    public function testDefaultMaxLengthIsNull()
    {
        $this->assertNull($this->traitedClass->getMaxLength());
    }
}
