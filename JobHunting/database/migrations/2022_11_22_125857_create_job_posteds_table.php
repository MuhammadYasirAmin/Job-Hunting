<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posteds', function (Blueprint $table) {
            $table->id();
            $table->string('Job_Title');
            $table->string('Job_Category');
            $table->string('Job_Type');
            $table->string('Job_Salary');
            $table->string('Job_Experience');
            $table->string('Job_Qualification');
            $table->string('Job_Gender');
            $table->string('Job_Country');
            $table->string('Job_City');
            $table->string('Job_Email');
            $table->string('Job_Website');
            $table->string('Job_Address');
            $table->text('Job_Desc');
            $table->string('Job_SDate');
            $table->string('Job_EDate');
            $table->bigInteger('EMP_ID')->unsigned();
            $table->bigInteger('CMP_ID')->unsigned();
            $table->timestamps();
            $table->foreign('EMP_ID')->references('id')->on('employers')->onDelete('cascade');
            $table->foreign('CMP_ID')->references('id')->on('company_profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_posteds');
    }
}
