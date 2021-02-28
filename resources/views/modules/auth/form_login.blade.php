@extends('layouts.auth.app')
@section('content')
    <div class='box'>
        <div class='box-form'>
            <div class='box-login-tab'></div>
            <div class='box-login-title'>
                <div class='i i-login'></div><h2>LOGIN</h2>
            </div>
            <div class='box-login'>
                <form class="form-horizontal" method="post" action="{{ route('login.auth') }}">
                    @csrf
                <div class='fieldset-body' id='login_form'>

                    <p class='field'>
                        <label for='user'>E-MAIL</label>
                        <input type='text' id='email' name='email' title='Email' />
                        <span id='valida' class='i i-warning'></span>
                    </p>
                    <p class='field'>
                        <label for='pass'>PASSWORD</label>
                        <input type='password' id='password' name='password' title='Password' />
                        <span id='valida' class='i i-close'></span>
                    </p>

                    <input type='submit' id='do_login' value='GET STARTED' title='Get Started' />

                </div>
                </form>
            </div>
        </div>

    </div>



@endsection
