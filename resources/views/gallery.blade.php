@extends('layouts.app')
@section('tag-title') GALLERY @endsection

@section('content')

@foreach($images as $img)
<div class="tm-main-content tm-gallery-container">                    
    <div class="grid">                                                    
        <div class="grid-item">
            <img src="{{ $img->path }}" alt="Image">
        </div>
    </div>                    
</div> 
@endforeach

<!-- <div class="tm-main-content tm-gallery-container">                    
    <div class="grid">                                                    
        <div class="grid-item"><img src="img/gallery-img-23-01.jpg" alt="Image"></div>
        <div class="grid-item"><img src="img/gallery-img-11-01.jpg" alt="Image"></div>
        <div class="grid-item"><img src="img/gallery-img-12-01.jpg" alt="Image"></div>
        <div class="grid-item"><img src="img/gallery-img-11-02.jpg" alt="Image"></div>                        
        <div class="grid-item"><img src="img/gallery-img-12-02.jpg" alt="Image"></div>
        <div class="grid-item"><img src="img/gallery-img-23-02.jpg" alt="Image"></div>
        <div class="grid-item"><img src="img/gallery-img-11-03.jpg" alt="Image"></div>
        <div class="grid-item"><img src="img/gallery-img-23-03.jpg" alt="Image"></div>                        
        <div class="grid-item"><img src="img/gallery-img-11-04.jpg" alt="Image"></div>
        <div class="grid-item"><img src="img/gallery-img-11-05.jpg" alt="Image"></div>
        <div class="grid-item"><img src="img/gallery-img-12-03.jpg" alt="Image"></div>
        <div class="grid-item"><img src="img/gallery-img-12-04.jpg" alt="Image"></div>
        <div class="grid-item"><img src="img/gallery-img-11-06.jpg" alt="Image"></div>
        <div class="grid-item"><img src="img/gallery-img-23-04.jpg" alt="Image"></div>
        <div class="grid-item"><img src="img/gallery-img-11-07.jpg" alt="Image"></div>
        <div class="grid-item"><img src="img/gallery-img-23-05.jpg" alt="Image"></div>
    </div>                    
</div>  -->
<!-- tm-main-content -->
@endsection

@section('scripts')

@parent

<script>  

$(document).ready(function(){

    // init Masonry
    // https://codepen.io/craigwheeler/pen/MYjBga
    var $grid = $('.grid').masonry({
        
        // set itemSelector so .grid-sizer is not used in layout
        // itemSelector: '.grid-item',
        // use element for option
        // columnWidth: '.grid-sizer',
        // percentPosition: true

        itemSelector: '.grid-item',
        isFitWidth: true,
        columnWidth: 1
    });
    // layout Masonry after each image loads
    $grid.imagesLoaded().progress( function() {
        $grid.masonry('layout');
    });              
});

</script>

@endsection