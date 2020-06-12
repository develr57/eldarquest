@extends('layouts.common')
@section('title', 'Форма обратной связи')
@section('content')
<div class="container-fluid">
    <h2 class="hn">Заполните форму</h2>
    <form action="/feedback/store" method="post" id="fdform" class="fdform">
        @csrf
        <div class="col-lg-9">
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Как к вам обращаться? </label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">E-mail: </label>
            <div class="col-md-9">
                <input class="form-control" type="email" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Телефон: </label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="phone">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Комментарий: </label>
            <div class="col-md-9">
                <textarea class="form-control" name="comment" form="fdform" rows="8"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-3 text-center">
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </div>
        </div>
        <div class="col-lg-3"></div>
    </form>
</div>
@endsection