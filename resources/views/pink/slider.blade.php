@if(count($sliders)>0)




<div class="col-md-9  col-xl-9 col-xl-9 text-left banner">
    <div class="slider single-item ">
        @foreach($sliders as $slide)
        <div><img src="{{ asset(env('THEME')) }}/img/slides/{{$slide->img}}" alt=""></div>
        @endforeach

    </div>
</div>
<div class="col-md-3   text-center deal">
    <span class="deal-head">Deal of the Month</span>
    <span class="deal-text">The Human Face of Big Data</span>
    <img class="deal-book" src="img/deal-book.png" alt="">
    <img class="deal-postament" src="img/deal-postament.png" alt=""><br>
    <span class="deal-disc">Save 45% Today</span><br>
    <span class="deal-price">$27.50</span><br>
    <button type="button" class="btn btn-success deal-btn">Buy now</button>

</div>


@endif