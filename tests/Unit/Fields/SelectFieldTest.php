<?php

namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Elements\SelectItem;
use PlusTimeIT\EasyForms\Fields\SelectField;

/**
 * @internal
 *
 * @coversNothing
 */
class SelectFieldTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    public function setUp(): void
    {
        $this->fieldClass = SelectField::class;
        $this->fieldComponent = 'v-select';
    }

    public function testAAnyFieldCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = true;
        $field->setAnyField($test);
        $this->assertSame($field->getAnyField(), $test);
    }

    public function testAChipsCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = true;
        $field->setChips($test);
        $this->assertSame($field->getChips(), $test);
    }

    public function testAComponentIsSelect()
    {
        $field = $this->fieldClass::make();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testAItemCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = SelectItem::make()->setId(0)->setValue('test');
        $field->addItem($test);
        $this->assertContains($test, $field->getItems());
    }

    public function testAItemsCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = [];
        $field->setItems($test);
        $this->assertSame($field->getItems(), $test);
    }

    public function testAItemTitleCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = 'test text';
        $field->setItemTitle($test);
        $this->assertSame($field->getItemTitle(), $test);
    }

    public function testAItemValueCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = 'test value';
        $field->setItemValue($test);
        $this->assertSame($field->getItemValue(), $test);
    }

    public function testAMultipleCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = true;
        $field->setMultiple($test);
        $this->assertSame($field->getMultiple(), $test);
    }
}
