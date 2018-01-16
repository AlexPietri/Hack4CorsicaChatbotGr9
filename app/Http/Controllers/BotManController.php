<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\ExampleConversation;
use GuzzleHttp\Client;
use DB;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('Bonjour', function (BotMan $bot) {
            $bot->reply('Coucou toi :)');
        });

        $botman->hears('test {api}', function (Botman $bot, $api) {
            $bot->types();

            $type = "projets";
            $params = "&lieux=Corte,%20France";
            $results = $this->getAPI($api, $type, $params);
            $bot->reply($results);
        });

        $botman->hears(' {text}', function (Botman $bot, $text) {
            $bot->types();

            // $IDQuestion = DB::table('questions')->select('id')->where('text', 'like', '%'.$text.'%')->first();
            // $result = DB::table('answers')->select('text')->where('question_id', '=', $IDQuestion)->first();

            /*
            // Tableau de texte avec la séparation espace
            if (preg_match("[\s]", $text)) {
                $array = explode(" ", $text);

                $query = [];
                foreach ($array as $value) {

                    // Vérifie le texte par rapport à la base de donnée
                    $query[] = DB::table('questions')->select('id')->where('text', 'like', '%'.$value.'%')->first();
                }

                $result = "Les réponses";
            } else {
                $IDQuestion = DB::table('questions')->select('id')->where('text', 'like', '%'.$text.'%')->first();
                $result = DB::table('answers')->select('text')->where('question_id', '=', $IDQuestion)->first();
            }
            */

            $bot->reply($text);
        });

        $botman->fallback(function($bot) {
            $bot->types();
            $bot->reply('Désolé, nous n\'avons pas compris votre demande, merci de spécifier plus clairement...');
        });

        $botman->listen();
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

    public function getAPI($api, $type, $params)
    {
        $client = new Client();
        $res = $client->request('POST', 'https://dev.communiti.corsica/app/test.php', [
            'form_params' => [
                'action' => 'list.php',
                'email' => 'univ@corte.php',
                'pwd' => 'corte',
                'types' => $type,
                'parametres' => $params,
            ]
        ]);
        if ($res->getStatusCode() == 200) {
            echo $res->getHeader('content-type');
            echo $res->getBody();

            die;
        }

        // return $data;
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
