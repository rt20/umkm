<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            $table->text('name');
            $table->text('address');
            $table->text('phone');
            $table->text('email');
            $table->text('history');
            $table->text('frequency');
            $table->text('product');
            $table->text('totalbuy');
            $table->text('payment');
            $table->integer('poin');

            $table->softDeletes();
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
        //
    }
}
