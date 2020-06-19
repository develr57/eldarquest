@extends('layouts.common')
@section('title', 'Админка')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a class="btn btn-info" href="{{route('showFeedbacks')}}">Заявки обратной связи</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
