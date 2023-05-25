<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;

class TelegramController extends Controller
{
    public function sendToTelegram(Request $request)
    {
        $telegram = new Api(config('telegram-bot-sdk.bots.default.token'));
        $chatId = '925986011'; // Replace with the actual chat ID you want to send the message to

        $message = $request->input('message');
        $name = $request->input('name');
        $telefon = $request->input('telefon');
        $telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => "‼️YANGI MUROJAAT‼️\n\n👤 ISM: : $name\n\n📞 TELEFON RAQAMI: $telefon\n\n✍️ XABAR:$message"
        ]);

        // Optionally, you can redirect back to the form after sending the message
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
