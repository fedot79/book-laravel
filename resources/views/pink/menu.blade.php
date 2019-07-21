


@foreach($categories as $item)
    <li class="d-inline"><a href="">{{ $item->name }}</a></li>
@endforeach

<div class="hdr-bot">
    <div class="container">
        <div class="row">
            <div class="col-md-12 hdr-menu">
                <nav class="d-flex justify-content-between" >
                    @foreach($categories as $item)
                        <li class="d-inline"><a href="">{{ $item->title }}</a></li>
                    @endforeach

                    <li class="d-inline"><a href="">Computers</a></li>
                    <li class="d-inline"><a href="">Cooking</a></li>
                    <li class="d-inline"><a href="">Education</a></li>
                    <li class="d-inline"><a href="">Fiction</a></li>
                    <li class="d-inline"><a href="">Health</a></li>
                    <li class="d-inline"><a href="">Mathematics</a></li>
                    <li class="d-inline"><a href="">Medical</a></li>
                    <li class="d-inline"><a href="">Reference</a></li>
                    <li class="d-inline"><a href="">Science</a></li>
                </nav>
            </div>
        </div>
    </div>
</div>