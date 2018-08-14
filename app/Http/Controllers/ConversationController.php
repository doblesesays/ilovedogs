<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\DefaultConversation;

class ConversationController extends Controller
{
    /**
     * Create a new conversation.
     *
     * @return void
     */
    public function index(BotMan $bot)
    {
        // We use the startConversation method provided by botman to start a new conversation and pass
        // our conversation class as a param to it. 
        $bot->startConversation(new DefaultConversation);
    }
}
