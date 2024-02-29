<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Camp;

class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();

            // Step 1 relation on table
            // $table->unsignedBigInteger('camp_id');
            $table->foreignIdFor(Camp::class)->constrained();
            $table->string('name');
            $table->timestamps();

            // Step 1 Relation on table
            // $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade'); // foreign key constraint to camps table, if camp is deleted, all its benefits will be deleted as well
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
}
