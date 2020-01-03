<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

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
            $table->bigIncrements('id');
            $table->string('name')->comment('名前');
            $table->string('employee_id')->comment('社員ID')->nullable();
            $table->integer('status')->comment('ステータス')->default(0);
            $table->integer('team_id')->comment('チームID')->nullable();

            $table->string('google_user_id')->comment('GoogleユーザーID')->nullable();
            $table->string('email')->comment('メールアドレス')->nullable();
            $table->string('icon_url')->comment('アイコンURL')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->text('created_by')->nullable();
            $table->timestamp('updated_at')->useCurrent();
            $table->text('updated_by')->nullable();
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
