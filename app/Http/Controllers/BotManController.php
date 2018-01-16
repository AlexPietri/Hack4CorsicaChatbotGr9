<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\ExampleConversation;
use App\Conversations\OnboardingConversation;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use DB;

class BotManController extends Controller
{
    protected $country;

    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('Bonjour', function (BotMan $bot) {
            $bot->reply('Coucou toi 👦');
        });

        $botman->hears('Ton nom', function (BotMan $bot) {
            $bot->reply('Je m\'appelle Pasquale');
        });

        $botman->hears('nom', function (BotMan $bot) {
            $bot->reply('I am Batman 🤖');
        });

        $botman->hears(13, function (BotMan $bot) {
            $bot->reply(' ̶1̶3̶   5+8');
        });

        $botman->hears('Projets qui recrute sur {city}', function ($bot, $city) {
            $bot->types();

            $type = "projets";
            $params = "&besoins=equipe&lieux=".$city.",%20France";
            $results = $this->getAPI($type, $params);

            $text = "";
            $i = 1;
            foreach ($results as $value) {
                if ($i <= 3) {
                    $text .= "".$value["nom"]." | \n\n https://www.communiti.corsica/page_projet.php?idProjet=".$value["id"];
                }
            }
            
            $bot->reply($text);
        });

        $botman->hears('Membres compétents en dev info à {city}', function ($bot, $city) {
            $bot->types();

            $type = "membres";
            $params = "&lieux=".$city.",%20France";
            $results = $this->getAPI($type, $params);

            if (count($results) > 3) {
                $bot->startConversation(new OnboardingConversation);
            } else {
                $text = "";
                $i = 1;
                foreach ($results as $value) {
                    if ($i <= 3) {
                        $text .= "".$value["nom"]." | \n\n https://www.communiti.corsica/profil_membre.php?idProfil=".$value["id"];
                    }
                }
                
                $bot->reply($text);
            }
        });

        $botman->hears('- {text}', function ($bot, $text) {
            $bot->types();

            // Tableau de texte avec la séparation espace
            /*if (preg_match("[\s]", $text)) {
                $array = explode(" ", $text);

                $query = [];
                foreach ($array as $value) {

                    // Vérifie le texte par rapport à la base de donnée
                    $query[] = DB::table('questions')->select('id')->where('text', 'like', '%'.$value.'%')->first();
                }

                $text = "Les réponses";
                $bot->reply($text);
            } else {
                $IDQuestion = DB::table('questions')->select('id')->where('text', 'like', '%'.$text.'%')->first();
                $result = DB::table('answers')->select('text')->where('question_id', '=', $IDQuestion->id)->first();

                $bot->reply($result->text);
            }*/

            $IDQuestion = DB::table('questions')->select('id')->where('text', 'like', '%'.$text.'%')->first();
            $result = DB::table('answers')->select('text')->where('question_id', '=', $IDQuestion->id)->first();

            $bot->reply($result->text);
        });

        $botman->hears('Taux en {currency} ', function ($bot, $currency) {
            $bot->types();
            $results = $this->getCurrency($currency);
            $bot->reply($results);
        });

        $botman->fallback(function($bot) {
            $bot->types();
            $bot->reply('Désolé, nous n\'avons pas compris votre demande, merci de spécifier plus clairement...');
        });

        $botman->listen();
    }

    public function getAPI($type, $params)
    {
        $client = new Client();
        $res = $client->post('https://dev.communiti.corsica/app/test.php', [
            'form_params' => [
                'action' => 'list.php',
                'email' => 'univ@corte.com',
                'pwd' => 'corte',
                'type' => $type,
                'parametres' => $params
            ]
        ]);

        if ($res->getStatusCode() == 200) {
            // $res->getHeader('content-type');
            $results = json_decode($res->getBody()->getContents(), true);
        } else {
            $results = null;
        }

        return $results;
    }

    public function getCurrency($currency)
    {
        $client = new Client();
        $uri = 'http://api.fixer.io/latest?base='.$currency;
        $response = $client->get($uri);
        $results = json_decode($response->getBody()->getContents());
        $date = date('d F Y', strtotime($results->date));
        $data = "Voici les taux de change basés sur l'échange ".$currency." \nDate: ".$date."\n";

        foreach($results->rates as $k => $v) {
            $data .= $k." - ".$v."\n";
        }

        return $data;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tinker()
    {
        return view('tinker');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function web()
    {
        return view('web');
    }

    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new ExampleConversation());
    }
}
