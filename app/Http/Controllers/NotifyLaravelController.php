<?php

namespace App\Http\Controllers;

use notify;
use Illuminate\Http\Request;

class NotifyLaravelController extends Controller
{
    public function index()
    {

        return view('welcome');
    }

    public function showNotification(Request $request)
    {
        notify()->success('Laravel Notify is awesome! oke');
        response()->json(['message' => 'ok']);

        return redirect()->route('notif.index');
    }
}
