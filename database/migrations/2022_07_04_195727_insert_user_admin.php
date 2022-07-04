<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        $email = env('ADMIN_MAIL','admin@admin.com.br');
//        $password = bcrypt(env('ADMIN_PASSWORD','admin'));
//        DB::table('users')->insert([
//            'name' => 'Administrador',
//            'email' => $email,
//            'password' => $password
//        ]);

        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => env('ADMIN_MAIL','admin@admin.com.br'),
            'password' => bcrypt(env('ADMIN_PASSWORD','admin'))
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        $email = env('ADMIN_MAIL','admin@admin.com.br');
//        DB::delete('DELETE FROM users WHERE email = ?', [$email]);

        DB::delete('DELETE FROM users WHERE email = ?', ['admin@admin.com']);
    }
};
