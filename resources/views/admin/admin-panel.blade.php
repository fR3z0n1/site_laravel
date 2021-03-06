@extends('admin.layouts.app')
@section('content')

<style>
    tr.caption-table td { background-color: #bfbfbf; }
    td { background-color: #eee; }
</style>

<div class="container">
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <h3>Все новости</h3>
    <table border="1" cellpadding="5">
    <tr class="caption-table">
        <td>ID</td>
        <td>Заголовок</td>
        <td>Превью текст новости</td>
        <td>Дата создания</td>
        <td>Возможность</td>
    </tr>
    @foreach($news as $new)
        <tr>
            <td>{{ $new->id }}</td>
            <td>{{ $new->title }}</td>
            <td>{{ $new->preview_text }}</td>
            <td>{{ $new->created_at }}</td>
            <td>
                <a href="{{ route('delete-new', $new->id) }}"><button class="btn btn-danger">Удалить</button></a>
                <a href=""><button class="btn btn-primary">Изменить</button></a>
            </td>
        </tr>
    @endforeach
    </table>

    <h3>Вся галерея</h3>
    <table border="1" cellpadding="5">
    <tr class="caption-table">
        <td>ID</td>
        <td>Имя картинки</td>
        <td>Путь</td>
        <td>Дата создания</td>
    </tr>
    @foreach($images as $image)
        <tr>
            <td>{{ $image->id }}</td>
            <td>{{ $image->name }}</td>
            <td>{{ $image->path }}</td>
            <td>{{ $image->created_at }}</td>
            <td>
                <a href="{{ route('delete-img', $image->id) }}"><button class="btn btn-danger">Удалить</button></a>
            </td>
        </tr>
    @endforeach
    </table>
</div>

@endsection