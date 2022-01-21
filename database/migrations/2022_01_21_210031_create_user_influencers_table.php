<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfluencersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_influencers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('first_per_influencer');
            $table->string('first_per_influencer_note');
            $table->integer('second_per_influencer');
            $table->string('second_per_influencer_note');
            $table->integer('third_per_influencer');
            $table->string('third_per_influencer_note');
            $table->integer('first_pro_influencer');
            $table->string('first_pro_influencer_note');
            $table->integer('second_pro_influencer');
            $table->string('second_pro_influencer_note');
            $table->integer('third_pro_influencer');
            $table->string('third_pro_influencer_note');
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
        Schema::dropIfExists('user_influencers');
    }
}
