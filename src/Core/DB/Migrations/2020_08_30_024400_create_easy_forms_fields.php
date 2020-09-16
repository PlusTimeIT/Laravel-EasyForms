<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValidationTypes extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table( 'ef_form_fields' , function ( Blueprint $table ) {
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
        Schema::dropIfExists( 'ef_form_fields' );
    }
}
