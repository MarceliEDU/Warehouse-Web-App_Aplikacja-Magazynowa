<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(
            'dzialy', function (Blueprint $table) {
                $table->id();
                $table->string('dzial',50);
                $table->timestamps();
            }
        );

        Schema::create(
            'produkty', function (Blueprint $table) {
                $table->id();
                $table->string('nazwa',100);
                $table->integer('ilosc');
                $table->unsignedBigInteger('id_dzialy');
                $table->timestamps();

                $table->foreign('id_dzialy')->references('id')->on('dzialy')->onUpdate('cascade')->onDelete('cascade');
            }
        );

        Schema::create(
            'dostawcy', function (Blueprint $table) {
                $table->id();
                $table->string('nazwa',100);
                $table->string('telefon',15);
                $table->timestamps();
            }
        );

        Schema::create(
            'dostawy', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_dostawcy');
                $table->unsignedBigInteger('id_produkty');
                $table->timestamps();

                $table->foreign('id_dostawcy')->references('id')->on('dostawcy')->onUpdate('cascade')->onDelete('cascade');
                $table->foreign('id_produkty')->references('id')->on('produkty')->onUpdate('cascade')->onDelete('cascade');
            }
        );

        Schema::create(
            'zejscia', function (Blueprint $table) {
                $table->id();
                $table->unsignedInteger('czy_zeszlo');
                $table->timestamps();
            }
        );

        Schema::create(
            'wychodzace', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_zejscia');
                $table->unsignedBigInteger('id_produkty');
                $table->timestamps();

                $table->foreign('id_zejscia')->references('id')->on('zejscia')->onUpdate('cascade')->onDelete('cascade');
                $table->foreign('id_produkty')->references('id')->on('produkty')->onUpdate('cascade')->onDelete('cascade');
            }
        );
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
