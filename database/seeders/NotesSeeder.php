<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Seeder;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 10) as $key) {
            $note = new Note;
            $note->lead_id = rand(1, 10);
            $note->user_id = rand(1, 3);
            $note->description = 'Note-' . $key;
            $note->time_duration = date('H:i');
            $note->status = 'planned';
            $note->save();
        }
    }
}
