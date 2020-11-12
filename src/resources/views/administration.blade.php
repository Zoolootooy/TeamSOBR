@extends('layouts.main ')

@section('content')
    <div class="row">
        @foreach($data as $admin)
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="card mt-1 mb-3">
                    <img src="https://interactive-examples.mdn.mozilla.net/media/cc0-images/grapefruit-slice-332-332.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-center">{{$admin->name}}</h4>
{{--                        <a href="#" class="btn btn-primary">See more</a>--}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
