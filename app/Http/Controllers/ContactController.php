<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\NewSubmission;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $fields = $request->only([
            'name', 'company', 'email', 'url', 'description', 'more',
        ]);

        Notification::route('mail', env('CONTACT_TO_EMAIL'))
            ->notify(new NewSubmission($fields));

        if ($request->ajax()) {
            return response('true');
        }

        return back();
    }
}
