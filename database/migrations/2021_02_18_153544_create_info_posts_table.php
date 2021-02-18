<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id'); // chiave esterna riferita alla tabella post(tabella principale)
            $table->string('post_status', 30); //pubblic-private/draft
            $table->string('comment_status'); //open-private/closed
            // $table->timestamps(); commetata per disattivarla guarda model InfoPost
            

            // relazione database
            $table->foreign('post_id') // chiave esterna di nome post_id
            ->references('id') //  la ciave esterna post_id si riferisce alla colonna id
            ->on('posts'); // nella tabella posts
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_posts');
    }
}
