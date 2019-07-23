@if(count($sliders)>0)




<div class="col-md-9  col-xl-9 col-xl-9 text-left banner">
    <div class="slider single-item ">
        @foreach($sliders as $slide)
        <div><img src="{{ asset(env('THEME')) }}/img/slides/{{$slide->img}}" alt=""></div>
        @endforeach

    </div>
</div>


@endif