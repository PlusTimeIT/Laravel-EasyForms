<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEasyFormsErrors extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'ef_errors' , function ( Blueprint $table ) {
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
        Schema::dropIfExists( 'ef_errors' );
    }
}
