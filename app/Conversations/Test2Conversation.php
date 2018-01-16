<?php

namespace App\Http\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class Test2Conversation extends Conversation
{
    protected $firstname;

    public function askMorePeople() {
        $this->ask('Ah, j\'ai remarqué qu\'il y avait beacoup trop de monde à afficher ! Soyez plus précis !', function(Answer $answer) {
            // Save result
            $this->firstname = $answer->getText();

            $this->say('Je traite votre demande, très cher ...');
            $this->checkName();
        });
    }

    public function checkName() {
        $this->say('J\'ai trouvé la personne que vous cherchez !');
    }

    public function run() {
        // This will be called immediately
        $this->askMorePeople();
    }
}
