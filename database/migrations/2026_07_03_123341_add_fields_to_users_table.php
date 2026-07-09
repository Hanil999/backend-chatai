<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Colonnes déjà ajoutées dans 0001_01_01_000000_create_users_table
        // Migration conservée pour l'historique mais désormais no-op
    }

    public function down(): void
    {
        // No-op
    }
};
