<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhpvanSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        $table = (new PhpVan\Settings\PhpVanSettings())->getTable();

        if (!Schema::hasTable($table)) {
            Schema::create($table, static function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 191);
                $table->string('description', 191)->nullable();
                $table->string('category', 191)->default('default')->index();
                $table->string('key',191)->index();
                $table->unique(['category', 'key']);
                $table->text('value')->nullable();
                $table->tinyInteger('active');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        $table = (new PhpVan\Settings\PhpVanSettings())->getTable();
        Schema::dropIfExists($table);
    }
}
