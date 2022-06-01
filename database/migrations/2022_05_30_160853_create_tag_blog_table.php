<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_blog', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tag_id');
            $table->unsignedInteger('blog_id');

            $table->unique(['tag_id', 'blog_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_blog');
    }
}
