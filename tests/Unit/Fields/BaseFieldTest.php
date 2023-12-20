<?php

namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\Tooltip;
use PlusTimeIT\EasyForms\Enums\DensityTypes;

/**
 * @internal
 *
 * @coversNothing
 */
class BaseFieldTest extends FieldTestCase
{
    protected $fieldClass;

    public function setUp(): void
    {
        parent::setup();
        $this->fieldClass = EasyField::class;
    }

    public function testAClearableCanBeSetAndGet()
    {
        $test = true;
        $field = $this->fieldClass::make();
        $field->setClearable($test);
        $this->assertSame($field->getClearable($test), $test);
    }

    public function testAColsCanBeSetAndGet()
    {
        $test = 6;
        $field = $this->fieldClass::make();
        $field->setCols($test);
        $this->assertSame($field->getCols($test), $test);
    }

    public function testAComponentCanBeSetAndGet()
    {
        $test = 'Test component';
        $field = $this->fieldClass::make();
        $field->setComponent($test);
        $this->assertSame($field->getComponent($test), $test);
    }

    public function testAComponentTypeCanBeSetAndGet()
    {
        $test = 'Test component type';
        $field = $this->fieldClass::make();
        $field->setComponentType($test);
        $this->assertSame($field->getComponentType($test), $test);
    }

    public function testADensityCanBeSetAndGet()
    {
        $test = DensityTypes::Compact;
        $field = $this->fieldClass::make();
        $field->setDensity($test);
        $this->assertSame($field->getDensity($test), $test);
    }

    public function testAHelpCanBeSetAndGet()
    {
        $test = 'Test help';
        $field = $this->fieldClass::make();
        $field->setHelp($test);
        $this->assertSame($field->getHelp($test), $test);
    }

    public function testALabelCanBeSetAndGet()
    {
        $test = 'Test label';
        $field = $this->fieldClass::make();
        $field->setLabel($test);
        $this->assertSame($field->getLabel($test), $test);
    }

    public function testANameCanBeSetAndGet()
    {
        $test = 'Test name';
        $field = $this->fieldClass::make();
        $field->setName($test);
        $this->assertSame($field->getName($test), $test);
    }

    public function testAOrderCanBeSetAndGet()
    {
        $test = 5;
        $field = $this->fieldClass::make();
        $field->setOrder($test);
        $this->assertSame($field->getOrder($test), $test);
    }

    public function testAOutlinedCanBeSetAndGet()
    {
        $test = false;
        $field = $this->fieldClass::make();
        $field->setOutlined($test);
        $this->assertSame($field->getOutlined($test), $test);
    }

    public function testAPlaceholderCanBeSetAndGet()
    {
        $test = 'Test placeholder';
        $field = $this->fieldClass::make();
        $field->setPlaceholder($test);
        $this->assertSame($field->getPlaceholder($test), $test);
    }

    public function testAReadonlyCanBeSetAndGet()
    {
        $test = false;
        $field = $this->fieldClass::make();
        $field->setReadonly($test);
        $this->assertSame($field->getReadonly($test), $test);
    }

    public function testATooltipCanBeSetAndGet()
    {
        $test = Tooltip::make()->setText('Test Tooltip');
        $field = $this->fieldClass::make();
        $field->setTooltip($test);
        $this->assertSame($field->getTooltip($test), $test);
    }

    public function testATypeCanBeSetAndGet()
    {
        $test = 'text';
        $field = $this->fieldClass::make();
        $field->setType($test);
        $this->assertSame($field->getType($test), $test);
    }

    public function testAValueCanBeSetAndGet()
    {
        $test = 'Thisisavalue';
        $field = $this->fieldClass::make();
        $field->setValue($test);
        $this->assertSame($field->getValue($test), $test);
    }

    public function testRulesCanBeSetAndGet()
    {
        $test = [];
        $field = $this->fieldClass::make();
        $field->setRules($test);
        $this->assertSame($field->getRules($test), $test);
    }
}
