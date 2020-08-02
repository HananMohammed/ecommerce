<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_users', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->text('ind_to');
            $table->text('ind_cc')->nullable();
            $table->text('com_to');
            $table->text('com_cc')->nullable();
            $table->text('gov_to');
            $table->text('gov_cc')->nullable();
            $table->text('nind_to');
            $table->text('nind_cc')->nullable();
            $table->text('cont_to');
            $table->text('cont_cc')->nullable();
            $table->string('created_by')->nullable();
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
        Schema::dropIfExists('email_users');
    }
}
