<div class="show">
    <img src="{{ $kings->url }}" alt="product-image">
    <div class="show-text">
        <p>name: {{ $kings->name }}</p>
        <p>number: {{ $kings->number }}</p>
        <p>stock: {{ $kings->stock }}</p>
        <p>sort: {{ $kings->sort }}</p>
    </div>
    @if ($kings->stock > 0)
        <form action="{{ url('addcart', $kings->id) }}" method="POST">

            @csrf
            <div class="clearfix">
                <div class="cart-plus-minus">

                    <input type="number" max="{{ $kings->stock }}" value="1" min="1" name="quantity"
                        class="cart-plus-minus-box">
                </div>
                <div class="product-action clearfix">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i
                            class="zmdi zmdi-zoom-in"></i></a>
                    <button type="submit"> <i class="zmdi zmdi-shopping-cart-plus">submit</i></button>


                </div>
            </div>
        </form>
    @else
        <span class="cart">OUT OF STOCK</span>
    @endif
</div>
