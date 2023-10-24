<?php

namespace PlusTimeIT\EasyForms\Tests\Unit\Attributes;

use PlusTimeIT\EasyForms\Traits\Attributes\HasMaxLength;

/**
 * @internal
 * @coversNothing
 */
class HasMaxLengthTest extends \PlusTimeIT\EasyForms\Tests\Unit\Attributes\AttributeTestCase
{
    public function testCanGetMaxLength()
    {
        $mock = $this->getObjectForTrait(HasMaxLength::class);

        $mock->setMaxLength(2);

        $this->assertSame(2, $mock->getMaxLength());
    }

    public function testCanSetMaxLength()
    {
        $mock = $this->getObjectForTrait(HasMaxLength::class);
        $mock->setMaxLength(6);

        $this->assertEquals($mock->getMaxLength(), 6);
    }
    public function testDefaultMaxLengthIsNull()
    {
        $mock = $this->getObjectForTrait(HasMaxLength::class);

        $this->assertNull($mock->getMaxLength());
    }
}
