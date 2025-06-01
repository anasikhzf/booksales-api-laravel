<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->integer('stok'); // Fixed 'int' to 'integer'
            $table->string('cover_image_name');
            $table->foreignId('genre_id')->constrained('genres')->onDelete('cascade'); // Fixed 'contrained' to 'constrained'
            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade'); // Fixed 'contrained' to 'constrained'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}