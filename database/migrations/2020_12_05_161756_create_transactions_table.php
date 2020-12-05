<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('month');
            $table->string('tag')->nullable()->default('notset');
            $table->double('value');
            $table->string('destination');
            $table->boolean('type');
            $table->unsignedBigInteger('owner');
            $table->foreign('owner')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign('transactions_owner_foreign');
            $table->dropColumn('owner');
        });
        Schema::dropIfExists('transactions');
    }
}
