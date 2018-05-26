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
        <tr>
            <td class="text-center">01</td>
            <td class="text-center">Ansar Gondal</td>
            <td class="text-center">ansarabbas395@gmail.com</td>
            <td class="text-center">0308-4025391</td>
            <td class="text-center">Oct, 10 2015 @ 2:10 AM</td>
            <td class="text-center">Oct, 10 2015 @ 2:10 PM</td>
            <td class="text-center">
                <a href="{{route('contacts.edit', ['id' => 1])}}">
                    <i class="fa fa-edit p-1" aria-hidden="true"></i>
                </a>
                <a href="{{route('contacts.show', ['id' => 1])}}">
                    <i class="fa fa-eye p-1" aria-hidden="true"></i>
                </a>
                <a href="{{route('contacts.delete', ['id' => 1])}}">
                    <i class="fa fa-trash-o p-1" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        </tbody>
    </table>
@endsection