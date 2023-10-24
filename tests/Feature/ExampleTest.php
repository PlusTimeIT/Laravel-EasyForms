<?php

namespace PlusTimeIT\EasyForms\Tests\Feature;

/**
 * @internal
 * @coversNothing
 */
class ExampleTest extends \Orchestra\Testbench\TestCase
{
    /**
     * A basic test example.
     */
    public function testBasicTest()
    {
        $response = $this->postJson('/axios/forms/load', [
            'form_name' => 'ExampleForm3',
            'id' => NULL,
            'populate' => FALSE,
        ]);
        $response->assertStatus(200);
        $response->assertJsonPath('data.name', 'ExampleForm3');
    }

    protected function defineRoutes($router)
    {
        // Define routes.
    }

    protected function getPackageProviders($app)
    {
        return [
            \PlusTimeIT\EasyForms\Providers\EasyForms::class,
        ];
    }
}
