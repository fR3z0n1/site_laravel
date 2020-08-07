@extends('admin.layouts.app')
@section('tag-title') Добавить картинку @endsection

@section('content')

    <style>
       label { display: block; }
       textarea { width: 50%; height: 200px;}
       h3 { margin-bottom: 30px;}
    </style>

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
           <p>- {{ $error }} </p>
        @endforeach
    </div>
    @endif
   
    <form action="{{ route('add-img') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <h3><label for="img_new">Загрузить изображение в галерею</label></h3>
            <input type="file" name="img_new" id="img_new">
            <input type="submit" value="Отправить" class="btn btn-primary">
        </div>
    </form>
@endsection