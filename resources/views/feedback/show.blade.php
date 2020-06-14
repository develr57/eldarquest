@extends('layouts.common')
@section('title', 'Форма обратной связи')
@section('content')
<div class="container-fluid">
    <h2 class="hn">Заполните форму</h2>
    <form action="/feedback/store" method="post" id="fdform" class="fdform">
        @csrf
        <div class="row">

            <div class="col-lg-9">
                <div class="form-group row">
                    <label class="col-md-4 col-form-label">Как к вам обращаться?* </label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="name" value="{{old('name')}}">
                        @error('name')
                            <label class="col-form-label error__color">{{$message}}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label">E-mail*: </label>
                    <div class="col-md-8">
                        <input class="form-control" type="email" name="email" value="{{old('email')}}">
                        @error('email')
                            <label class="col-form-label error__color">{{$message}}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label">Телефон*: </label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="phone" value="{{old('phone')}}">
                        @error('phone')
                            <label class="col-form-label error__color">{{$message}}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label">Комментарий*: </label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="comment" form="fdform" rows="8">{{old('comment')}}</textarea>
                        @error('comment')
                            <label class="col-form-label error__color">{{$message}}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3 text-center">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <?php echo isset($email) ? $email : ''; ?>
            </div>

        </div>
    </form>

</div>
@endsection