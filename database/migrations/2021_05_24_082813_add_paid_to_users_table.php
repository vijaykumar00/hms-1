<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaidToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('food', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('price')->nullable();
            $table->unsignedBigInteger('idCategory');
            $table->foreign('idCategory')->references('id')->on('category_food');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('food', function (Blueprint $table) {
            $table->dropColumn('name')->nullable();
            $table->dropColumn('description')->nullable();
            $table->dropColumn('price')->nullable();
            $table->dropColumn('idCategory');
            $table->dropColumn('idCategory')->references('id')->on('category_food');
        });
    }
}
