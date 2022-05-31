<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->enum('zone', getZones());
            $table->string('zone_code');
            $table->string('email');
            $table->string('institute');
            $table->string('department');
            $table->string('applicant_name');
            $table->string('primary_mobile');
            $table->string('mobile_02');
            $table->enum('gender', getGenders());
            $table->enum('religion', getReligions());
            $table->enum('blood_group', getBloodGroups());
            $table->string('nid');
            $table->enum('disabilities', getDisabilities())->default(getDisabilities()[0]);
            $table->string('father_name');
            $table->enum('father_living_status', getLivingStatuses())->default(getLivingStatuses()[0]);
            $table->enum('father_disability', getDisabilities())->default(getDisabilities()[0]);
            $table->string('mother_name');
            $table->enum('mother_living_status', getLivingStatuses())->default(getLivingStatuses()[0]);
            $table->enum('mother_disability', getDisabilities())->default(getDisabilities()[0]);
            $table->integer('other_disability')->default(0);
            $table->integer('guardian_number');
            $table->string('thana_police_station');
            $table->string('district');
            $table->string('school');
            $table->string('college');
            $table->integer('monthly_income');
            $table->integer('monthly_expense');
            $table->integer('family_asset');
            $table->integer('family_monthly_income');
            $table->integer('hsc_year');
            $table->string('hsc_result');
            $table->string('ssc_result');
            $table->integer('older_age');
            $table->integer('class1to8');
            $table->integer('class9to12_hifj');
            $table->integer('undergrad');
            $table->string('justification');
            $table->string('image');
            $table->boolean('is_processed')->default(false);
            $table->string('total_mark')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('applicants');
    }
};
