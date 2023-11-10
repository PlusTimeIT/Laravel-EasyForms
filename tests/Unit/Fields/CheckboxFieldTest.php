<?php

namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Fields\CheckboxField;

/**
 * @internal
 *
 * @coversNothing
 */
class CheckboxFieldTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    public function setUp(): void
    {
        $this->fieldClass = CheckboxField::class;
        $this->fieldComponent = 'v-checkbox';
    }

    public function testAComponentIsCheckbox()
    {
        $field = $this->fieldClass::make();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }
}
