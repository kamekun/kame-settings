<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKameSettingsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('kame_settings', function (Blueprint $table) {
      $table->increments('id');
      $table->boolean('read_only')->default(false);
      $table->string('key')->unique();
      $table->string('value')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('kame_settings');
  }
}