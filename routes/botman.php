<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears(13, function ($bot) {
	$bot->reply(' ̶1̶3̶  5+8');
});

// $botman->hears('Start conversation', BotManController::class.'@startConversation');

$botman->hears('Start conversation', BotManController::class.'@startConversation');
