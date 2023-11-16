@extends('layouts.app')
<title>About Me</title>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('About') }}</div>

                    <div class="card-body">
                        <p>Muhammad Andrian Farliansyah</p>
                        <p>Tangerang Selatan</p>
                        <p>Institut Teknologi Indonesia</p>
                        <p>S1 Informatika</p>
                    </div>
                </div>
            </div>
        </div>
    </div><p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Contact') }}</div>

                    <div class="card-body">
                        <p><a href="mailto:andrianfarliansyah@yahoo.com">andrianfarliansyah@yahoo.com</a></p>
                        <p>+6281261116346</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </p>
@endsection
</html>
