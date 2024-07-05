<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id('nim');
            $table->string('nama', 50);
            $table->string('tmp_lahir', 50);
            $table->date('tgl_lahir');
            $table->char('jk', 1);
            $table->string('ipk');
            $table->foreignId('prodi_id')->constrained('prodis');
            $table->foreignId('rombel_id')->constrained('rombels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
