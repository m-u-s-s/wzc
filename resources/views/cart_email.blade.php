<h1>Votre panier d'achat :</h1>
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
        </tr>
    </thead>
    <tbody>
        @foreach ($cartData as $product)
            <tr>
                <td class="trses">
                    <img src="{{ $product->king_url}}" alt="">
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
                    {{ $product->quantity }}</li>
                </td>
            </tr>
        
        @endforeach
    </tbody>
</table>
