<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true);
            $table->integer('cost');
            $table->unsignedBigInteger('members_id');
            $table->unsignedBigInteger('categories_id');
            $table->unsignedBigInteger('results_id');
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('members_id')->references('id')->on('members');
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->foreign('results_id')->references('id')->on('results');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
}
