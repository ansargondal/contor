@extends('layouts.app')
@section('title', 'Create Contact')


@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <form action="{{route('contacts.store')}}" method="post" enctype="multipart/form-data">
                    <div class="card-header">
                        <h3 class="card-title">New Contact</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control {{ $errors->has('name')? 'is-invalid': ''  }}"
                                   name="name" value="{{old('name')}}">
                            @if($errors->has('name'))
                                <span class="invalid-feedback"> </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text"
                                   class="form-control {{ $errors->has('email')? 'is-invalid' : '' }}"
                                   name="email" value="{{old('email')}}">
                            @if($errors->has('email'))
                                <span class="invalid-feedback"> </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control {{$errors->has('phone')? 'is-invalid'  : ''}}"
                                   name="phone" value="{{old('phone')}}">
                            @if($errors->has('phone'))
                                <span class="invalid-feedback"> </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="image">Contact Image</label>
                                <input type="file" id="image-uploader"
                                       class="form-control {{$errors->has('image')? 'is-invalid' : ''}}" name="image"
                                       value="{{old('image')}}">
                                @if($errors->has('image'))
                                    <span class="invalid-feedback"> </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="contact-image">
                                    <img src="{{asset('images/avatar.jpg')}}" alt="alt text" id="contact-image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <a href="{{route('contacts.index')}}" class="btn btn-danger float-right ml-3">CANCEL</a>
                        <button class="btn btn-primary float-right mb-3">SAVE
                            <i class="fa fa-spinner fa-spin d-none" aria-hidden="true"></i>
                        </button>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>
        </div>{{--!col--}}
    </div>{{--!row--}}
@endsection
