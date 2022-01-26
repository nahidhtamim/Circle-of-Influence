<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfluencersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('influencers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('type_id')->constrained('influencer_types');
            // $table->foreign('type_id')->references('id')->on('influencer_types');
            $table->foreignId('influencer_id')->constrained('users');
            // $table->foreign('influencer_id')->references('id')->on('users');
            $table->string('influencer_note');
            $table->foreignId('selection_id')->constrained('selections');
            // $table->foreign('selection_id')->references('id')->on('selections');
            $table->integer('influencer_no');
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
        Schema::dropIfExists('influencers');
    }
}
