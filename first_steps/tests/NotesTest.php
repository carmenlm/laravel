<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{

    public function test_notes_list()
    {

        //Having
        Note::create(['note' => 'My first note']);
        Note::create(['note' => 'Second note']);


        //when
        $this->visit('notes')
            //then
            ->see('My first note')
            ->see('Second note');
    }

    public function test_create_note()
    {
        //Route::post('notes')
        //when
        $this->post('notes')
            //then
            ->see('Creating a note');
    }
}
