

<div class=" d-flex flex-wrap align-content-around tabs-cell best " id="best">
    @foreach($books as $book)
    <div class="tabs-unit text-center ">
        <a  href="{{--route('books.show')--}}">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="{{ asset(env('THEME')) }}/img/books/{{$book->img}}" alt="">
            <p class=" tabs-unit-name">{{$book->title}}</p>
            <p class="tabs-unit-price">${{$book->price}}</p>
        </a>
    </div>
    @endforeach
   <!-- <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b2.png" alt="">
            <p class=" tabs-unit-name"><br>The war of  Art</p>
            <p class=" tabs-unit-price">$60</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b3.png" alt="">
            <p class=" tabs-unit-name">The Hare With Amber Eyes</p>
            <p class="tabs-unit-price">$25</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b4.png" alt="">
            <p class=" tabs-unit-name">The Immortals of Meluha</p>
            <p class="tabs-unit-price">$80</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b5.png" alt="">
            <p class=" tabs-unit-name">Life Is What You  Make It</p>
            <p class="tabs-unit-price">$200</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b6.png" alt="">
            <p class=" tabs-unit-name">The Hare With Amber Eyes</p>
            <p class="tabs-unit-price">$200</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b7.png" alt="">
            <p class=" tabs-unit-name"><br>The war of  Art</p>
            <p class="tabs-unit-price">$150</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b8.png" alt="">
            <p class=" tabs-unit-name">The Hare With Amber Eyes</p>
            <p class="tabs-unit-price">$100</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b9.png" alt="">
            <p class=" tabs-unit-name">The Immortals of Meluha</p>
            <p class="tabs-unit-price">$152</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b10.png" alt="">
            <p class=" tabs-unit-name">Life Is What You  Make It</p>
            <p class="tabs-unit-price">$200</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b11.png" alt="">
            <p class=" tabs-unit-name">The Hare With Amber Eyes</p>
            <p class="tabs-unit-price">$220</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b12.png" alt="">
            <p class=" tabs-unit-name"><br>The war of  Art</p></p>
            <p class="tabs-unit-price">$10</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b13.png" alt="">
            <p class=" tabs-unit-name">The Hare With Amber Eyes</p>
            <p class="tabs-unit-price">$22</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b14.png" alt="">
            <p class=" tabs-unit-name">The Immortals of Meluha</p>
            <p class="tabs-unit-price">$300</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b15.png" alt="">
            <p class=" tabs-unit-name">Life Is What You  Make It</p>
            <p class="tabs-unit-price">$205</p>
        </a>
    </div>-->
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
<!--<div class=" d-flex flex-wrap align-content-around tabs-cell new">
    <div class="tabs-unit text-center ">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b1.png" alt="">
            <p class=" tabs-unit-name">New Arivals </p>
            <p class="tabs-unit-price">$50</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b2.png" alt="">
            <p class=" tabs-unit-name"><br>New Arivals</p>
            <p class=" tabs-unit-price">$60</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b3.png" alt="">
            <p class=" tabs-unit-name">New Arivals</p>
            <p class="tabs-unit-price">$25</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b4.png" alt="">
            <p class=" tabs-unit-name">New Arivals</p>
            <p class="tabs-unit-price">$80</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b5.png" alt="">
            <p class=" tabs-unit-name">New Arivals</p>
            <p class="tabs-unit-price">$200</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b6.png" alt="">
            <p class=" tabs-unit-name">New Arivals</p>
            <p class="tabs-unit-price">$200</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b7.png" alt="">
            <p class=" tabs-unit-name"><br>New Arivals</p>
            <p class="tabs-unit-price">$150</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b8.png" alt="">
            <p class=" tabs-unit-name">New Arivals</p>
            <p class="tabs-unit-price">$100</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b9.png" alt="">
            <p class=" tabs-unit-name">New Arivals</p>
            <p class="tabs-unit-price">$152</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b10.png" alt="">
            <p class=" tabs-unit-name">New Arivals</p>
            <p class="tabs-unit-price">$200</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b11.png" alt="">
            <p class=" tabs-unit-name">New Arivals</p>
            <p class="tabs-unit-price">$220</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b12.png" alt="">
            <p class=" tabs-unit-name"><br>New Arivals</p></p>
            <p class="tabs-unit-price">$10</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b13.png" alt="">
            <p class=" tabs-unit-name">New Arivals</p>
            <p class="tabs-unit-price">$22</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b14.png" alt="">
            <p class=" tabs-unit-name">New Arivals</p>
            <p class="tabs-unit-price">$300</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b15.png" alt="">
            <p class=" tabs-unit-name">New Arivals</p>
            <p class="tabs-unit-price">$205</p>
        </a>
    </div>
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
<div class=" d-flex flex-wrap align-content-around tabs-cell used">
    <div class="tabs-unit text-center ">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b1.png" alt="">
            <p class=" tabs-unit-name">Used Books </p>
            <p class="tabs-unit-price">$50</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b2.png" alt="">
            <p class=" tabs-unit-name"><br>Used Books</p>
            <p class=" tabs-unit-price">$60</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b3.png" alt="">
            <p class=" tabs-unit-name">Used Books</p>
            <p class="tabs-unit-price">$25</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b4.png" alt="">
            <p class=" tabs-unit-name">Used Books</p>
            <p class="tabs-unit-price">$80</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b5.png" alt="">
            <p class=" tabs-unit-name">Used Books</p>
            <p class="tabs-unit-price">$200</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b6.png" alt="">
            <p class=" tabs-unit-name">Used Books</p>
            <p class="tabs-unit-price">$200</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b7.png" alt="">
            <p class=" tabs-unit-name"><br>Used Books</p>
            <p class="tabs-unit-price">$150</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b8.png" alt="">
            <p class=" tabs-unit-name">Used Books</p>
            <p class="tabs-unit-price">$100</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b9.png" alt="">
            <p class=" tabs-unit-name">Used Books</p>
            <p class="tabs-unit-price">$152</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b10.png" alt="">
            <p class=" tabs-unit-name">Used Books</p>
            <p class="tabs-unit-price">$200</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b11.png" alt="">
            <p class=" tabs-unit-name">Used Books</p>
            <p class="tabs-unit-price">$220</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b12.png" alt="">
            <p class=" tabs-unit-name"><br>Used Books</p></p>
            <p class="tabs-unit-price">$10</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b13.png" alt="">
            <p class=" tabs-unit-name">Used Books</p>
            <p class="tabs-unit-price">$22</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b14.png" alt="">
            <p class=" tabs-unit-name">Used Books</p>
            <p class="tabs-unit-price">$300</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b15.png" alt="">
            <p class=" tabs-unit-name">Used Books</p>
            <p class="tabs-unit-price">$205</p>
        </a>
    </div>
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
<div class=" d-flex flex-wrap align-content-around tabs-cell offer">
    <div class="tabs-unit text-center ">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b1.png" alt="">
            <p class=" tabs-unit-name">Special Offers </p>
            <p class="tabs-unit-price">$50</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b2.png" alt="">
            <p class=" tabs-unit-name"><br>Special Offers</p>
            <p class=" tabs-unit-price">$60</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b3.png" alt="">
            <p class=" tabs-unit-name">Special Offers</p>
            <p class="tabs-unit-price">$25</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b4.png" alt="">
            <p class=" tabs-unit-name">Special Offers</p>
            <p class="tabs-unit-price">$80</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b5.png" alt="">
            <p class=" tabs-unit-name">Special Offers</p>
            <p class="tabs-unit-price">$200</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b6.png" alt="">
            <p class=" tabs-unit-name">Special Offers</p>
            <p class="tabs-unit-price">$200</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b7.png" alt="">
            <p class=" tabs-unit-name"><br>Special Offers</p>
            <p class="tabs-unit-price">$150</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b8.png" alt="">
            <p class=" tabs-unit-name">Special Offers</p>
            <p class="tabs-unit-price">$100</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b9.png" alt="">
            <p class=" tabs-unit-name">Special Offers</p>
            <p class="tabs-unit-price">$152</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b10.png" alt="">
            <p class=" tabs-unit-name">Special Offers</p>
            <p class="tabs-unit-price">$200</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b11.png" alt="">
            <p class=" tabs-unit-name">Special Offers</p>
            <p class="tabs-unit-price">$220</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b12.png" alt="">
            <p class=" tabs-unit-name"><br>Special Offers</p></p>
            <p class="tabs-unit-price">$10</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b13.png" alt="">
            <p class=" tabs-unit-name">Special Offers</p>
            <p class="tabs-unit-price">$22</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img class="sale" src="img/books/sale.png" alt="">
            <img src="img/books/b14.png" alt="">
            <p class=" tabs-unit-name">Special Offers</p>
            <p class="tabs-unit-price">$300</p>
        </a>
    </div>
    <div class="tabs-unit text-center">
        <a  href="product-page.html">
            <img src="img/books/b15.png" alt="">
            <p class=" tabs-unit-name">Special Offers</p>
            <p class="tabs-unit-price">$205</p>
        </a>
    </div>
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
</div>-->
