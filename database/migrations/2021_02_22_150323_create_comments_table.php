<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            // chiave esterna tabella post
            $table->unsignedBigInteger('post_id');
            $table->string('author', 40);
            $table->text('text', 800);
            $table->timestamps();
            
            // Relazioni database
            $table->foreign('post_id')
            ->references('id')
            ->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
