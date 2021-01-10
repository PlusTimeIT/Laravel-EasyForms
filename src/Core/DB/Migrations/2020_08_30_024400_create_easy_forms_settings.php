<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Second2None\EasyForms\Core\DB\Connector;

class CreateEasyFormsSettings extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( Connector::SETTINGS_TABLE  , function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name' );
            $table->text( 'value' );
            $table->string( 'category' );
            $table->string( 'tab' );
            $table->integer( 'editable' )->default( 0 );
            $table->integer( 'status' )->default( 0 );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( Connector::SETTINGS_TABLE );
    }
}
