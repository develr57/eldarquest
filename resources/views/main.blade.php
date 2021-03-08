@extends('layouts.common')
@section('title', 'Главная')
@section('content')
<div class="container-fluid">
    <h2 class="hn">Самая лучшая компания для вас!</h2>
    <p>Оставьте ваши координаты и мы свяжемся с вами в ближайшее время!</p>
    <div class="text-center" style="padding-bottom: 20px;">
        <a href="{{route('showFeedbackForm')}}">
            <button type="button" class="btn btn-warning">Заказать обратную связь</button>
        </a>
    </div>
</div>
@endsection
