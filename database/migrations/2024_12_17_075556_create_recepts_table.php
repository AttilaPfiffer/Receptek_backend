<?php

use App\Models\Recept;
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
        Schema::create('recepts', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->foreignId('kat_id')->references('id')->on('kategorias');
            $table->text('kep_eleresi_ut');
            $table->text('leiras');
            $table->timestamps();
        });

        Recept::create([
            'nev' => 'Somlói galuska',
            'kat_id' => 3,
            'kep_eleresi_ut' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.mindmegette.hu%2Frecept%2Fsomloi-galuska-az-eredeti-recept-alapjan&psig=AOvVaw1lals0a4zIcPw2WVwmD2Vo&ust=1734510177508000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCJCCzYmwrooDFQAAAAAdAAAAABAE',
            'leiras' => 'A tojásokat szétválasztjuk. A tojásfehérjéket a csipet sóval, konyhai robotgéppel (habverővel) először a legalacsonyabb, majd pedig a legmagasabb fokozaton kemény habbá verjük. A tojássárgájákat a cukorral, konyhai robotgéppel (habverővel) először a legalacsonyabb, majd pedig a legmagasabb fokozaton 3 percig verjük. A lisztet átszitáljuk. A lisztet és a tojásfehérjehabot fakanállal, felváltva a tojássárgájához keverjük, vigyázva, hogy a hab ne törjön össze. A masszát az első tepsibe simítjuk, majd a sütő alsó harmadában megsütjük.'
        ]);

        Recept::create([
            'nev' => 'Lasagne',
            'kat_id' => 1,
            'kep_eleresi_ut' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fcookidoo.international%2Frecipes%2Frecipe%2Fhu%2Fr237136&psig=AOvVaw0YHwpIten8tkfUI1XTjNba&ust=1734510396983000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCPi7pfKwrooDFQAAAAAdAAAAABAc',
            'leiras' => 'A lasagne elkészítéséhez kevés olajon megdinszteljük az apróra vágott vöröshagymát a fokhagymával együtt, majd rátesszük a darált húst, és nagyobb lángon egészen addig pároljuk, amíg a hús kifehéredik.'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepts');
    }
};
