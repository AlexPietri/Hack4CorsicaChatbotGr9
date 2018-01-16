<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class OnboardingConversation extends Conversation
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