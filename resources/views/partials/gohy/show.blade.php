<div class="show">
    <img src="{{ $gohy->url }}" alt="product-image">
    <div class="show-text">
        <p>name: {{ $gohy->name }}</p>
        <p>number: {{ $gohy->number }}</p>
        <p>stock: {{ $gohy->stock }}</p>
        <p>sort: {{ $gohy->sort }}</p>
    </div>
    @if ($gohy->stock > 0)
        <form action="{{ url('addcarte', $gohy->id) }}" method="POST">

            @csrf
            <div class="clearfix">
                <div class="cart-plus-minus">

                    <input type="number" max="{{ $gohy->stock }}" value="1" min="1" name="quantity"
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
