<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Group;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        $contacts = Contact::with('group');

        $groupId = request('group_id');
        $search = request('search');

        if ($groupId) {
            $contacts->where('group_id', $groupId);
        }

        if ($search) {
            $contacts->where('name', 'like', '%' . $search . '%');
        }

        $contacts = $contacts->get();

        return view('contacts.index', compact('contacts', 'groups'));
    }

    public function create()
    {
        $groups = Group::all();
        return view('contacts.create', compact('groups'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'group_id' => 'nullable|exists:groups,id'
        ]);

        Contact::create($request->only('name','email','phone','group_id'));

        return redirect()->route('contacts.index')->with('success','Contact créé avec succès');
    }

    public function edit(Contact $contact)
    {
        $groups = Group::all();
        return view('contacts.edit', compact('contact','groups'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'group_id' => 'nullable|exists:groups,id'
        ]);

        $contact->update($request->only('name','email','phone','group_id'));

        return redirect()->route('contacts.index')->with('success','Contact modifié avec succès');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success','Contact supprimé avec succès');
    }

    public function byGroup(Group $group)
    {
        $contacts = $group->contacts()->with('group')->get();
        $groups = Group::all();
        return view('contacts.index', compact('contacts', 'groups'));
    }
}
