@extends('panel::layouts.auth')

@section('auth')
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <h3>Welcome</h3>
            <p>Login in</p>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"><small>@include('panel::layouts.partials.footer.copyright')</small></p>
        </div>
    </div>
@stop