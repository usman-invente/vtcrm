<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name',50);
            $table->string('bussiness_name',50);
            $table->string('email',50);
            $table->string('phone',20);
            $table->string('industry',50);
            $table->string('address',100);
            $table->string('country',50);
            $table->string('service_interested',100);
            $table->text('note');
            $table->text('image')->nullable();
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
        Schema::dropIfExists('leads');
    }
}
