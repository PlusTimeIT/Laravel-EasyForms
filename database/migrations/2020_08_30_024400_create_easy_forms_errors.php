<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Second2None\EasyForms\App\DB\Connector;

class CreateEasyFormsErrors extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( Connector::ERROR_TABLE , function ( Blueprint $table ) {
            $table->id();
            $table->string( 'action' );
            $table->integer( 'type' )->default( 0 );
            $table->string( 'code' );
            $table->text( 'message' );
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
        Schema::dropIfExists( Connector::ERROR_TABLE );
    }
}
