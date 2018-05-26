@extends('layouts.app')
@section('title', 'Delete Contact')

@section('content')
    <div class="card">
        <form action="{{route('contacts.destroy', ['id' , 1])}}" method="post">
            {{method_field('DELETE')}}
            <div class="card-header">
                <h4 class="card-title">{{__('DELETE CONTACT')}}</h4>
            </div>
            <div class="card-body">
                Do you really want to delete?
                <br><br>
                <ul>
                    <li>Ansar Gondal</li>
                    <li>ansar@gmail.com</li>
                    <li>0308-4025391</li>
                </ul>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">YES</button>
                <a href="{{route('contacts.index')}}" class="btn btn-danger">CANCEL</a>
            </div>
            {{csrf_field()}}
        </form>
    </div>
@endsection