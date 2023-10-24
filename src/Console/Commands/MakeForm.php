<?php

namespace PlusTimeIT\EasyForms\Console\Commands;

use File;
use Illuminate\Console\Command;

/**
 * Command to make a form from the terminal
 */
class MakeForm extends Command
{
    protected $description = 'Create a new Laravel EasyForm';

    protected $signature = 'make:form {formName} {formType=input}';

    public function handle()
    {
        $this->comment('Creating EasyForm....');
        $replacements = [
            '<projectNamespace>' => config('easyforms.form-namespace'),
            '<formName>' => $this->argument('formName'),
            '<formType>' => ucfirst($this->argument('formType')),
        ];

        if (! File::isDirectory(app_path('Http/Forms'))) {
            File::makeDirectory(app_path('Http/Forms'));
        }

        if (File::exists(app_path("Http/Forms/{$this->argument('formName')}.php"))) {
            $this->comment("{$this->argument('formName')} already exists, failed to create.");

            return 0;
        }

        $contents = File::get(base_path('/vendor/plustime-it/laravel-easyforms/stubs/Form.stub'));
        foreach ($replacements as $find => $replace) {
            $contents = str_replace($find, $replace, $contents);
        }
        File::put(config('easyforms.form-path')."/{$this->argument('formName')}.php", $contents);
        $this->comment("Successfully created {$this->argument('formName')}");

        return 1;
    }
}
