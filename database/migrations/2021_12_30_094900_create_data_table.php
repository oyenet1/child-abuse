<?php

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public ?array $type = ['Physical', 'Sexual', 'Emotional Neglect'];
    public ?array $status = ['verified', 'unverified'];
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->nullable()->constrained()->onDelete('set null');
            $table->string('name');
            $table->integer('age');
            $table->string('sex');
            $table->string('type')->default($this->type[array_rand($this->type)]);
            $table->string('status')->default($this->status[array_rand($this->status)]);
            $table->string('lga');
            $table->longText('summary')->default(Str::random(500));
            $table->dateTime('date_occurred')->default(Carbon::now()->subYears(random_int(2, 15)));
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
        Schema::dropIfExists('data');
    }
}
