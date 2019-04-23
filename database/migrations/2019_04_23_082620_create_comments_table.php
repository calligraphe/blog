<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->timestamp('comment_date')->default(DB::raw('CURRENT_TIMESTAMP')); // aujourd'hui par defaut
            $table->unsignedInteger('comment_author');
            $table->unsignedInteger('post_id');
            $table->text('content');
            $table->timestamps();
            // liaison de cle etranger
            // est supprime si son auteur ou l'article est supprime
            $table->foreign('comment_author')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
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
