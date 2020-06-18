@extends('layouts.common')
@section('title', 'Зявки обратной связи')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header"><h3>Заявки обратной связи</h3></div>
        <div class="card-body">
            @foreach ($feedbacks as $feedback)
                <div class="card">
                    <div class="row col-md-12 card-body">
                        <div class="col-md-5">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th class="col-2" scope="row">Дата: </td>
                                    <td class="col-10">{{$feedback['created_at']}}</td>
                                </tr>
                                <tr>
                                    <th class="col-2" scope="row">Имя: </td>
                                    <td class="col-10">{{$feedback['name']}}</td>
                                </tr>
                                <tr>
                                    <th class="col-2" scope="row">Тел.: </td>
                                    <td class="col-10">{{$feedback['phone']}}</td>
                                </tr>
                                <tr>
                                    <th class="col-2" scope="row">Почта: </td>
                                    <td class="col-10">{{$feedback['email']}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-7">
                            <p>{{$feedback['comment']}}</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix" style="padding-bottom: 1.25rem;"></div>
            @endforeach
        </div>
    </div>
</div>
@endsection