<h1>Mon panier</h1>
<ul>
    @foreach ($cartProducts as $cartProduct)
        <li>
            {{ $cartProduct->King->name }} (Quantité: {{ $cartProduct->pivot->quantity }})
            <form action="{{ route('cart.remove', $cartProduct->products->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </li>
    @endforeach
</ul>
<a href="/">Continuer les achats</a>