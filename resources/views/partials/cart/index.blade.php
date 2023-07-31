<h1 id="title-shop">Winkelmantel</h1>


@if (count($cartes) > 0)

    <table class="tab">
        <thead>
            <tr>
                <th class="trses">
                    product image
                </th>
                <th class="trses">
                    woning
                </th>
                <th class="trses">
                    product name
                </th>
                <th class="trses">
                    product number
                </th>
                <th class="trses">
                    quantity
                </th>
                <th class="trses">
                    edit
                </th>
                <th class="trses">
                    delete
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartes as $product)
                <tr>
                    <td class="trses">
                        <img src="{{ $product->king_url }}" id="cart-img" alt="">
                    </td>
                    <td class="trses">
                        {{ $product->user_name }}</li>
                    </td>
                    <td class="trses">
                        {{ $product->king_name }}</li>
                    </td>
                    <td class="trses">
                        {{ $product->king_number }}</li>
                    </td>
                    <td class="trses">
                        {{ $product['quantity'] }}</li>
                    </td>
                    <td class="trses">
                        <form action="">
                            <input type="submit" value="edit">
                        </form>
                    </td>
                    <td class="trses">
                        <form action="">
                            <input type="submit" value="delete">
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Aucun produit dans la shop list.</p>
@endif

<div class="btn-shop">
    <button class="btn-shop">
        <a href="/send-cart-email">send</a>
    </button>
</div>
