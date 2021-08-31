<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyContactRequest;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Mail\contact as MailContact;
use App\Models\Contact;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactsController extends Controller
{
    public function index()
    {

        $contacts = Contact::all();
        //dd($contacts);

        return view('admin.contacts.index', compact('contacts'));
    }

    public function create()
    {
        abort_if(Gate::denies('contact_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        return view('admin.contacts.create');
    }

    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->all());
        //dd($contact);
        return redirect()->route('admin.contacts.index');
    }

    public function edit(Contact $contact)
    {
        abort_if(Gate::denies('contact_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $contact->update($request->all());

        return redirect()->route('admin.contacts.index');
    }

    public function show(Contact $contact)
    {
        abort_if(Gate::denies('contact_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //dd($contact);
        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        abort_if(Gate::denies('contact_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contact->delete();

        return back();
    }

    public function massDestroy(MassDestroyContactRequest $request)
    {
        Contact::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function offersRequest()
    {
        $contacts = Contact::where("price","=",0)->get();
        //dd($contacts);

        return view('admin.contacts.index', compact('contacts'));
    }
    
    public function offersMade()
    {
        $contacts = Contact::where("price",">",0)
        ->where("accept","=",0)->get();
        //dd($contacts);

        return view('admin.contacts.index', compact('contacts'));
    }

    public function offersAccepted()
    {
        
        
        $contacts = Contact::where("price",">",0)
        ->where("accept","=",1)
        ->get();
        //dd($contacts);

        return view('admin.contacts.index', compact('contacts'));
    }

    public function entriesToday()
    {
        
        $contacts = Contact::where("price",">",0)
        ->where("date_from","=",date('Y-m-d'))
        ->get();
        

        return view('admin.contacts.index', compact('contacts'));
    }

    public function exitsToday()
    {
        
        $contacts = Contact::where("price",">",0)
        ->where("date_to","=",date('Y-m-d'))
        ->get();
        

        return view('admin.contacts.index', compact('contacts'));
    }

    public function offersHistory()
    {
        //abort_if(Gate::denies('contact_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $contacts = Contact::where("price",">",0)
        ->where("accept","=",1)
        ->where("date_to",">",date("Y-m-d"))
        ->get();
        //dd($contacts);

        return view('admin.contacts.index', compact('contacts'));
    }
}
