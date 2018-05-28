<?php

namespace contactin\Http\Controllers\Contact;

use contactin\Http\Requests\ContactRequest;
use contactin\Model\Contact\Contact;
use Illuminate\Http\Request;
use contactin\Http\Controllers\Controller;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('contact.index')->with(['contacts' => $contacts]);
    }


    public function create()
    {
        return view('contact.create');
    }


    public function store(ContactRequest $request)
    {

        //store image details in file
        $file = $request->file('image');

        //path to store images
        $images_path = public_path('/images');

        //generates unique name
        $filename = $file->store('images');

        //moves image to the public directory
        $file->move($images_path, $filename);


        Contact::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'user_id' => 1,  //TODO: Pull in the real user Id
            'image_path' => $filename
        ]);

        return redirect(route('contacts.index'))
            ->with(['info' => 'New Contact Saved Successfully!']);

    }


    public function show($id)
    {
        return view('contact.show');
    }


    public function edit($id)
    {
        return view('contact.edit');
    }

    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        die('delted!');
    }
}
