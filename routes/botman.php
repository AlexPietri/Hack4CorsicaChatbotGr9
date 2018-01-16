<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
	$bot->typesAndWaits(2);
	$bot->reply('Hello!');
});

$botman->hears(13, function ($bot) {
	$bot->typesAndWaits(2);
	$bot->reply(' ̶1̶3̶  5+8');
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');
