<?php
namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;

/**
 * @internal
 * @coversNothing
 */
class BaseFieldTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    protected $fieldClass;

    public function setUp(): void
    {
        $this->fieldClass = EasyField::class;
    }

    public function testAClearableCanBeSetAndGet()
    {
        $test = TRUE;
        $field = new $this->fieldClass();
        $field->setClearable($test);
        $this->assertSame($field->getClearable($test), $test);
    }

    public function testAColsCanBeSetAndGet()
    {
        $test = 6;
        $field = new $this->fieldClass();
        $field->setCols($test);
        $this->assertSame($field->getCols($test), $test);
    }

    public function testAComponentCanBeSetAndGet()
    {
        $test = 'Test component';
        $field = new $this->fieldClass();
        $field->setComponent($test);
        $this->assertSame($field->getComponent($test), $test);
    }

    public function testAComponentTypeCanBeSetAndGet()
    {
        $test = 'Test component type';
        $field = new $this->fieldClass();
        $field->setComponentType($test);
        $this->assertSame($field->getComponentType($test), $test);
    }

    public function testADenseCanBeSetAndGet()
    {
        $test = FALSE;
        $field = new $this->fieldClass();
        $field->setDense($test);
        $this->assertSame($field->getDense($test), $test);
    }

    public function testAHelpCanBeSetAndGet()
    {
        $test = 'Test help';
        $field = new $this->fieldClass();
        $field->setHelp($test);
        $this->assertSame($field->getHelp($test), $test);
    }

    public function testALabelCanBeSetAndGet()
    {
        $test = 'Test label';
        $field = new $this->fieldClass();
        $field->setLabel($test);
        $this->assertSame($field->getLabel($test), $test);
    }

    public function testAMaskingCanBeSetAndGet()
    {
        $test = 'Test masking';
        $field = new $this->fieldClass();
        $field->setMasking($test);
        $this->assertSame($field->getMasking($test), $test);
    }

    public function testANameCanBeSetAndGet()
    {
        $test = 'Test name';
        $field = new $this->fieldClass();
        $field->setName($test);
        $this->assertSame($field->getName($test), $test);
    }

    public function testAOrderCanBeSetAndGet()
    {
        $test = 5;
        $field = new $this->fieldClass();
        $field->setOrder($test);
        $this->assertSame($field->getOrder($test), $test);
    }

    public function testAOutlinedCanBeSetAndGet()
    {
        $test = FALSE;
        $field = new $this->fieldClass();
        $field->setOutlined($test);
        $this->assertSame($field->getOutlined($test), $test);
    }

    public function testAPlaceholderCanBeSetAndGet()
    {
        $test = 'Test placeholder';
        $field = new $this->fieldClass();
        $field->setPlaceholder($test);
        $this->assertSame($field->getPlaceholder($test), $test);
    }

    public function testAReadonlyCanBeSetAndGet()
    {
        $test = FALSE;
        $field = new $this->fieldClass();
        $field->setReadonly($test);
        $this->assertSame($field->getReadonly($test), $test);
    }

    public function testATooltipCanBeSetAndGet()
    {
        $test = 'Test tooltip';
        $field = new $this->fieldClass();
        $field->setTooltip($test);
        $this->assertSame($field->getTooltip($test), $test);
    }

    public function testATypeCanBeSetAndGet()
    {
        $test = 'text';
        $field = new $this->fieldClass();
        $field->setType($test);
        $this->assertSame($field->getType($test), $test);
    }

    public function testAValueCanBeSetAndGet()
    {
        $test = 'Thisisavalue';
        $field = new $this->fieldClass();
        $field->setValue($test);
        $this->assertSame($field->getValue($test), $test);
    }

    public function testRulesCanBeSetAndGet()
    {
        $test = [];
        $field = new $this->fieldClass();
        $field->setRules($test);
        $this->assertSame($field->getRules($test), $test);
    }
}
