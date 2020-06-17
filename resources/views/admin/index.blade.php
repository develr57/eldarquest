@extends('layouts.common')
@section('title', 'Админка')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a class="btn btn-info" href="{{route('showfeedbacks')}}">Заявки обратной связи</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
