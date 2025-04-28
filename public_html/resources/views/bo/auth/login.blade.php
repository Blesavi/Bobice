@extends('bo.auth.auth')

@section('content')
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <div id="nav_img_logo">
                    <img src="{{ asset('bo/images/huntr_logo_white2.png') }}" />
                </div>
            </div>

            <h3 class="white-color">Welcome to Goji Berry</h3>
            @if ($errors->has('status'))
                <div class="alert alert-success">
                    {{ $errors->first('status') }}
                </div>
            @endif
            <form class="m-t" role="form" method="POST" action="{{ route('login.submit') }}">
                {!! csrf_field() !!}

                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>

            <p class="p-white"> <strong>Copyright</strong> Goji Berry &copy; {{ Carbon\Carbon::now()->year }} </p>
        </div>
    </div>
@endsection