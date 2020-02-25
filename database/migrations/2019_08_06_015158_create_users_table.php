<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum("jabatan", ['kord_mpo', 'mpo', 'ketum', 'sekum', 'bendum', 'wk', 'kabid_keorganisasian', 'kabid', 'kord_pengkaderan', 'staff_pengkaderan', 'kord_humas', 'staff_humas', 'kord_iptek', 'staff_iptek', 'kord_kesek', 'staff_kesek', 'anggota']);
            $table->string("phone");
            $table->string("noreg")->nullable();
            $table->string("status_surat")->nullable();
            $table->string("foto")->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
