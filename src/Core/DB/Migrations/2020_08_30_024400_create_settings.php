<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Settings extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table( 'ef_settings' , function ( Blueprint $table ) {
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
        Schema::dropIfExists( 'ef_settings' );
    }
}
