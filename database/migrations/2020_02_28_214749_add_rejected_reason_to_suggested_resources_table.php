<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRejectedReasonToSuggestedResourcesTable extends Migration
{
    public function up()
    {
        Schema::table('suggested_resources', function (Blueprint $table) {
            $table->text('rejected_reason')->nullable();
        });
    }

    public function down()
    {
        Schema::table('suggested_resources', function (Blueprint $table) {
            $table->dropColumn('rejected_reason');
        });
    }
}
