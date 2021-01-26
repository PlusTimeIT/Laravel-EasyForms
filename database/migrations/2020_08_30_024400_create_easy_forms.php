<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Second2None\EasyForms\App\DB\Connector;

class CreateEasyForms extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( Connector::FORMS_TABLE , function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name' );
            $table->string( 'area' );
            $table->json( 'field_data' );
            $table->json( 'custom_data' );
            $table->json( 'callback_functions' );
            $table->integer( 'status' )->defualt( 0 );
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
        Schema::dropIfExists( Connector::FORMS_TABLE );
    }
}
