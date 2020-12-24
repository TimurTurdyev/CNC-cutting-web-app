<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Models\Pages;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $page = Pages::where('slug', 'contact')->firstOrFail();
        return view('contact.index', compact('page'));
    }

    public function sendContact(Request $request) {
        $form = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email:rfc,dns',
            'phone' => 'required|string|max:11',
            'message_text' => 'nullable|string',
        ]);

        $ts = microtime(true);
        $emailJob = (new SendEmailJob($form))->delay(now()->addSeconds(3));
        dispatch($emailJob);
        $spent = microtime(true) - $ts;

        dd('Email sent. Time spent ' . sprintf('%.4f sec', $spent));
        return back()->with('message', 'Ваше сообщение успешно отправлено!');
    }
}
