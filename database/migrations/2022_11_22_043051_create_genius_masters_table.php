<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genius_masters', function (Blueprint $table) {
            $table->id();
            $table->enum('status',[''])->nullable();
            $table->enum('zone',[''])->nullable();
            $table->enum('year',[''])->nullable();
            $table->enum('batch',[''])->nullable();
            $table->enum('university',[''])->nullable();


            $table->timestamps();
        'GSP Zone'
        'GSP Year'
        'GSP Batch'
        'Genius ID'
        'University Name'
        'Academic Discipline'
        'Academic Session'
        'Name of the recipients'
        'Mobile Number 01'
        'Mobile Number 02'
        'Email Address'
        'Gender'
        'Religion'
        'NID Number'
        'Recipients Disability'
        	'Date of Birth'
        		'Blood Group'
        'Permanent Address'
        'Thana Name'
        'Home District'
        'HSC Result'
        'SSC Result '
        'Fathers Name'
        'Father Living Status'
        'Father Occupation	'
        'Mothers Name'
        'Mother Living Status'
        'Mother Occupation'
        'Guardian Mobile Number'
       ' Number of Family Members'
        'Bank Account Number'
        'Bank Account Name'
        'Bank Account Branch Name'
        'Sponsor Name'
        'Stipend Starting Month'
'        Stipend Ending Month'
        'Primary Marks	'
        'Viva Marks	'
        'Remarks	'
        'Other Scholarship'
        'Stipend Amount	'
        'Picturelink	'
        'Document Link'
        'Statement'


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genius_masters');
    }
};
