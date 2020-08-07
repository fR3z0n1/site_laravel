<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('img', function (Blueprint $table) {
            //
            $table->timestamps();

            $table->dropColumn('create_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('img', function (Blueprint $table) {
            $table->timestamp('create_at');
            $table->dropTimestamps();
        });
    }
}
