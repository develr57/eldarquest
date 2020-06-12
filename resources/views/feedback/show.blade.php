@extends('layouts.common')
@section('title', 'Форма обратной связи')
@section('content')
<div class="container-fluid">
    <h2 class="hn">Заполните форму</h2>
    <form action="/feedback/store" method="post" id="fdform">
        @csrf
        <label>Как к вам обращаться? </label>
        <input type="text" name="name">
        <label>E-mail: </label>
        <input type="email" name="email">
        <label>Телефон: </label>
        <input type="text" name="phone">
        <label>Комментарий: </label>
        <textarea name="comment" form="fdform" rows="12"></textarea>
    </form>
</div>
@endsection