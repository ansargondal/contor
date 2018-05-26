<?php

namespace contactin\Http\Controllers\Contact;

use Illuminate\Http\Request;
use contactin\Http\Controllers\Controller;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }


    public function create()
    {
        return view('contact.create');
    }


    public function store(Request $request)
    {

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
