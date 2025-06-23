<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('loans', function (Blueprint $table) {
            $table->foreignId('member_id')->after('id')->constrained()->onDelete('cascade');
            $table->foreignId('book_id')->after('member_id')->constrained()->onDelete('cascade');
            $table->foreignId('employee_id')->after('book_id')->constrained()->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('loans', function (Blueprint $table) {
            $table->dropForeign(['member_id']);
            $table->dropForeign(['book_id']);
            $table->dropForeign(['employee_id']);

            $table->dropColumn(['member_id', 'book_id', 'employee_id']);
        });
    }
};
