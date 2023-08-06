<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country')->nullable();
            $table->string('company')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('skype')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('text')->nullable();
            $table->string('vergi_dairesi')->nullable();
            $table->string('banka_adi')->nullable();
            $table->string('banka_iban_no')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
