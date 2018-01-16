<?php

namespace App\Http\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class Test2Conversation extends Conversation
{
    public function askMorePeople() {
        $this->ask('Ah, j\'ai remarqué qu\'il y avait beacoup trop de monde à afficher ! Soyez plus précis !', function() {

            $this->say('Je traite votre demande, très cher ...');
            $this->checkName();
        });
    }

    public function checkName() {
        $this->say("J'ai trouvé la personne que vous cherchez ! \n https://www.communiti.corsica/profil_membre.php?idProfil=253");
    }

    public function run() {
        // This will be called immediately
        $this->askMorePeople();
    }
}
