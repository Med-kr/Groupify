<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Group;
use App\Models\Contact;

class Controller extends BaseController
{

    public function index()
    {
        $groupsCount = Group::count();
        $contactsCount = Contact::count();
        $latestContacts = Contact::latest()->take(5)->get();

        return view('welcome', compact('groupsCount', 'contactsCount', 'latestContacts'));
    }
}
