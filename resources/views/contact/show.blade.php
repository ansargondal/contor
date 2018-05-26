@extends('layouts.app')
{{--@extends('title', 'Edit')--}}

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('CONATACT DETAILS')}}</h3>
                </div>
                <div class="card-body">
                    <div class="form-group ">

                        <div class="contact-image text-right">
                            <img src="{{asset('images/headshot-1.jpg')}}" alt="alt text" id="contact-image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control is-invalid" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control is-invalid" name="email">

                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control is-invalid" name="phone">

                    </div>

                </div>
                <div class="card-footer ">
                    <a href="{{route('contacts.index')}}" class="btn btn-success float-right ml-3">BACK</a>
                    </button>
                </div>
            </div>
        </div>{{--!col--}}
    </div>{{--!row--}}
@endsection
