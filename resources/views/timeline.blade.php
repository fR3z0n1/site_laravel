@extends('layouts.app')
@section('tag-title') TIMELINE @endsection

@section('content')


<div class="tm-main-content">

    @foreach($news as $new)

    <?php 

    $timestamp = strtotime($new->created_at);
    $create_date = date('D M Y', $timestamp);;

    ?>

        <div class="row mb-5">
            <div class="media tm-flexbox-ie-fix tm-width-ie-fix">
                <div class="tm-media-img-container">
                    <div class="text-center pt-31 pb-31 tm-timeline-date tm-bg-pink">{{ $create_date }}</div>
                    <img class="d-flex img-fluid" src="{{ $new->path_img }}" alt="Generic placeholder image">
                </div>
            
                <div class="media-body tm-flexbox-ie-fix tm-width-ie-fix tm-bg-light-gray">
                    <div class="p-5">
                        <h2 class="mb-4 mt-0 tm-blue-text tm-timeline-item-title">{{ $new->title }}</h2>
                        <p class="mb-4">
                        {{ $new->preview_text }}
                        </p>
                        <a href="#" class="btn btn-primary tm-button-rounded tm-button-pink tm-button-no-border tm-button-normal tm-button-timeline">Read More</a>
                    </div>                            
                </div>
            </div>
        </div> <!-- row -->

    @endforeach

</div> <!-- container-fluid -->

@endsection
