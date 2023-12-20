<?php

namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Fields\RadioGroupField;

/**
 * @internal
 *
 * @coversNothing
 */
class RadioGroupFieldTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    public function setUp(): void
    {
        $this->fieldClass = RadioGroupField::class;
        $this->fieldComponent = 'v-radio-group';
    }

    public function testCanSetAndGetInline()
    {
        $field = $this->fieldClass::make();
        $test = true;
        $field->setInline($test);
        $this->assertSame($field->getInline(), $test);
    }
}
