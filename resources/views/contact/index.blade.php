@extends('layouts.app')
@section('header-text', 'Welcome! Ansar Gondal')
@section('content')
    <a href="{{route('contacts.create')}}" class="btn btn-primary float-right m-3">New +</a>
    <table class="table table-responsive-md ">
        <thead>
        <tr>
            <td class="text-uppercase text-center">ID</td>
            <td class="text-uppercase text-center">Name</td>
            <td class="text-uppercase text-center">Email</td>
            <td class="text-uppercase text-center">Phone</td>
            <td class="text-uppercase text-center">Created On</td>
            <td class="text-uppercase text-center">Updated On</td>
            <td class="text-uppercase text-center">Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td class="text-center">{{$contact->id}}</td>
                <td class="text-center">{{$contact->name}}</td>
                <td class="text-center">{{$contact->email}}</td>
                <td class="text-center">{{$contact->phone}}</td>
                <td class="text-center">{{date_format(new $contact->created_at, 'M, d, Y @ h:i')}}</td>
                <td class="text-center">{{date_format(new $contact->updated_at, 'M, d, Y @ h:i')}}</td>
                <td class="text-center">
                    <a href="{{route('contacts.edit', ['id' => $contact->id])}}">
                        <i class="fa fa-edit p-1" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('contacts.show', ['id' => $contact->id])}}">
                        <i class="fa fa-eye p-1" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('contacts.delete', ['id' => $contact->id])}}">
                        <i class="fa fa-trash-o p-1" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection