<?php

use App\Models\Action;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dice');
            $table->timestamps();
        });
        $actions=['sperone','giavelotto','multiattacco','tentacolo'];
        $dices=['1d4+dex','1d6+dex','null','2d6+str'];


        for ($i = 0; $i < count($actions); ++$i) {
            Action::create([
                'name'=>$actions[$i],
                'dice'=>$dices[$i],
            ]);
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actions');
    }
};
