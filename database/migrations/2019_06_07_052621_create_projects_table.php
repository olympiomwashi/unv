<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country')->nullable();
            $table->string('implementing_office')->nullable();
            $table->string('project_title')->nullable();
            $table->string('Grant_amount')->nullable();
            $table->string('date_from_CGF')->nullable();
            $table->string('start_Date')->nullable();
         
            $table->string('duration_Months')->nullable();
            $table->string('end_Date')->nullable();
            $table->string('readiness_or_NAP_Date')->nullable();
            $table->string('type_of_readiness_Monts')->nullable();
            $table->string('First_disbursement_amount')->nullable();
            $table->string('status')->nullable();
            
            $table->string('save1')->nullable();
            $table->string('save2')->nullable();
            $table->string('save3')->nullable();           
            $table->string('save4')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
