<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Note;
class NoteTest extends TestCase
{
use WithoutMiddleware;
    public function test_notes_list()
    {

        Note::create(['note'=>'My first note']);
        Note::create(['note'=>'Second note']);
        $this->visit('notes')

        ->see('My first note')
        ->see('Second note');
    }

    public function test_create_note()
    {
        $this->visit('notes')
        ->click('Add a note')
        ->seePageIs('notes/create')
        ->see('Create a Note')
        ->type('A new note','note')
        ->press('Create note')
        ->seePageIs('notes')
        ->see('A new note')
        ->seeInDatabase('notes',[

            'note'=>'A new Note'

            ]);
    }
}
