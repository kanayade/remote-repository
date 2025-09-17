<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('add');
    }
    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();
        $tel = $request->tel0 . '-' . $request->tel1 . '-' . $request->tel2;
        return view('confirm', [
            'contact' => $contact,
            'tel' => $tel
        ])->withInput();
    }
    public function back()
    {
        return redirect()->route('contacts.create')->withInput($request->all());
    }
    public function store(ContactRequest $request)
    {
        $contact = $request->all();
        Contact::create($contact);
        return view('thanks');
    }
    public function index()
    {
        return view('admin');
    }
}
