<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Mail;

class ContactController extends Controller
{
    public function contactForm()
    {
        $user_id = Auth::user()->id;
        $user = Auth::user()->name;
        $email = Auth::user()->email;
        //dd($user_id);
        return view('user.contact.contact', ["user_id" => $user_id, "user" => $user, "email" => $email]);
    }

    public function index()
    {
        $contacts = Contact::all();
        //dd($contacts);

        return view('user.contact.index', compact('contacts'));
    }

    public function storeContactForm(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'series' => 'required|string:17|',
            'message' => 'required',
            'imageFile' => 'required|mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
        ]);

        // 'imageFile' => 'nullable',
        $input = $request->all();


        //  Send mail to admin
        Mail::send('user.contact.contactMail', array(
            'id_user' => $input['id_user'],
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'series' => $input['series'],
            'messag' => $input['message'],
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('admin@admin.com', 'Admin')->subject($request->get('name'));
        });

//dd($request->file('imageFile'));
        if ($request->hasfile('imageFile')) {
            $file=$request->file('imageFile');
                $image_name = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads/', $image_name);
            $input["image_name"]=$image_name;
            $input["image_path"]=$image_name;
        }
        Contact::create($input);
        
        return back()->with(['success' => 'Contact Form Submit Successfully']);
    }



    public function offersSend()
    {
        //abort_if(Gate::denies('contact_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user_id = Auth::user()->id;
        $contacts = Contact::where("id_user", "=", $user_id)
            ->where("price", "=", 0)
            ->where("accept", "=", 0)
            ->get();
        //dd($contacts);

        return view('user.contact.index', compact('contacts'));
    }

    public function show(Request $request, Contact $contact)
    {

        return view('user.contact.show', compact('contact'));
    }

    public function offersHistory()
    {
        //abort_if(Gate::denies('contact_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user_id = Auth::user()->id;
        $contacts = Contact::where("id_user", "=", $user_id)
            ->where("price", ">", 0)
            ->where("accept", "=", 1)
            ->where("date_to", ">", date("Y-m-d"))
            ->get();
        //dd($contacts);
        return view('user.contact.index', compact('contacts'));
    }
    public function offersReceived()
    {
        //abort_if(Gate::denies('contact_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user_id = Auth::user()->id;
        $contacts = Contact::where("id_user", "=", $user_id)
            ->where("price", ">", 0)
            ->where("accept", "=", 0)
            ->get();
        //dd($contacts);

        return view('user.contact.index', compact('contacts'));
    }
    public function offersAccepted()
    {
        //abort_if(Gate::denies('contact_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user_id = Auth::user()->id;
        $contacts = Contact::where("id_user", "=", $user_id)
            ->where("price", ">", 0)
            ->where("accept", "=", 1)
            ->get();
        //dd($contacts);

        return view('user.contact.index', compact('contacts'));
    }
}
