<?php
use App\Http\Controllers\BotManController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\AllBreedsController;
use App\Http\Controllers\SubBreedController;
use App\Http\Controllers\FallbackController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');

$botman->hears('/random', AllBreedsController::class.'@random');

$botman->hears('/b {breed}', AllBreedsController::class.'@byBreed');

$botman->hears('/s {breed}:{subBreed}', SubBreedController::class.'@random');

$botman->hears('start', ConversationController::class.'@index');

$botman->fallback(FallbackController::class.'@index');

