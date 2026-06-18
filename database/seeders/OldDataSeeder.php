<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class OldDataSeeder extends Seeder
{
    public function run(): void
    {
        $sqlPath = 'C:\\Users\\user\\Downloads\\cs\\cs.sql';
        if (!File::exists($sqlPath)) {
            $this->command->error("SQL file not found at: {$sqlPath}");
            return;
        }

        $handle = fopen($sqlPath, "r");
        if ($handle) {
            $targetTables = ['teachers', 'alumnis', 'slides', 'reasons', 'events', 'programs', 'newses', 'notices'];
            
            while (($line = fgets($handle)) !== false) {
                $line = trim($line);
                if (empty($line)) {
                    continue;
                }
                
                foreach ($targetTables as $table) {
                    if (preg_match('/^INSERT INTO\s+`?' . $table . '`?/i', $line)) {
                        // DB::statement runs the raw query
                        DB::statement($line);
                        $this->command->info("Seeded data for table: {$table}");
                    }
                }
            }
            fclose($handle);
        }
    }
}
