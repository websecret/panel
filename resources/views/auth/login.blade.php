@extends('layouts.auth')

@section('auth')
    <div class="login-box col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
        <div class="header">Вход</div>
        <form action="/" method="post">
            <fieldset>
                <div class="form-group first">
                    <div class="input-group col-sm-12">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control input-lg" id="username" placeholder="Введите email" name="email"/>
                    </div>
                </div>
                <div class="form-group last">
                    <div class="input-group col-sm-12">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" class="form-control input-lg" id="password" placeholder="Пароль" name="password"/>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col-xs-12">Войти</button>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <a href="/">Зарегистрироваться</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@stop