<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('media_url');
            $table->integer('mail_id')->unsigned();
            $table->foreign('mail_id')->references('id')->on('mail_box');
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
        Schema::dropIfExists('mail_attachments');
    }
}
