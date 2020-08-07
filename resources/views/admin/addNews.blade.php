@extends('admin.layouts.app')
@section('tag-title') Добавить новость @endsection

@section('content')

    <style>
       label { display: block; }
       textarea { width: 50%; height: 200px;}
    </style>

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
           <p>- {{ $error }} </p>
        @endforeach
    </div>
    @endif
   
    <form action="{{ route('add-new') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title_new">Введите заголовок статьи:</label>
            <input type="text" name="title_new" id="title_new" placeholder="Заголовок новости">

            <label for="preview_new">Введите короткое описание статьи:</label>
            <input type="text" name="preview_new" id="preview_new" placeholder="Описание новости">
            
            <label for="text_new">Введите полный текст статьи:</label>
            <textarea type="text" name="text_new" id="text_new" placeholder="Текст новости"></textarea>

            <label for="img_new">Изображение новости</label>
            <input type="file" name="img_new" id="img_new">
            <input type="submit" value="Отправить" class="btn btn-primary">
        </div>
    </form>
@endsection