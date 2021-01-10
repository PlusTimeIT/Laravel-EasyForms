<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Second2None\EasyForms\Core\DB\Connector;

class CreateEasyFormsFields extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( Connector::FORMFIELDS_TABLE , function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name' );
            $table->string( 'default_value' );
            $table->json( 'rules' );
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
        Schema::dropIfExists( Connector::FORMFIELDS_TABLE );
    }
}
