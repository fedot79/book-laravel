

<div class="col-md-10 tabs">
    <div class=" d-flex flex-wrap align-content-around tabs-cell best " id="best">

        <div  class="col-md-12 text-left category-name"> <p class="cat-name">category</p><br></div>
        @foreach($books as $book)

            <div class="tabs-unit text-center ">
                <a  href="{{route('books.show',['books'=>$book->id])}}">
                    <img class="sale" src="img/books/sale.png" alt="">
                    <img src="{{asset(env('THEME'))}}/img/books/{{$book->img}}" alt="">
                    <p class=" tabs-unit-name">{{$book->title}}</p>
                    <p class="tabs-unit-price">{{$book->price}}</p>
                   

                </a>
            </div>
        @endforeach

        <div class="col-md-12 d-flex justify-content-end pagination-block">
            <nav aria-label="..." >
                <ul class="pagination pagination-sm ">

                    <li class="page-item"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link active-page" href="#!">3</a></li>
                    <li class="page-item"><a class="page-link" href="#!">4</a></li>
                    <li class="page-item"><a class="page-link" href="#!">5</a></li>
                    <li class="page-item"><a class="page-link" href="#!">6</a></li>

                </ul>
            </nav>
        </div>
    </div>
</div>
