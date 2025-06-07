<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKtmRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('ktm_requests', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 20);
            $table->string('name');
            $table->string('jurusan');
            $table->string('fakultas');
            $table->string('image');
            $table->date('tanggal_lahir');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ktm_requests');
    }
}
