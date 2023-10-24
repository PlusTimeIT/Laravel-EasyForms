<?php

namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Fields\TextareaField;

/**
 * @internal
 *
 * @coversNothing
 */
class TextareaFieldTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    public function setUp(): void
    {
        $this->fieldClass = TextareaField::class;
        $this->fieldComponent = 'v-textarea';
    }

    public function testAComponentIsTextarea()
    {
        $field = $this->fieldClass::make();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testARowsCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = 10;
        $field->setRows($test);
        $this->assertSame($field->getRows(), $test);
    }
}
