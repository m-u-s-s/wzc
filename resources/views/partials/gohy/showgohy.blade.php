<div class="show">
    <img src="{{ $gohy->url }}" alt="product-image">
    <div class="show-text">
        <p>name :{{ $gohy->name }}</p>
        <p>number : {{ $gohy->number }}</p>
        <p>stock :{{ $gohy->stock }}</p>
        <p>sort : {{ $gohy->sort }}</p>
    </div>
    <div class="show-btns">
        <form action="/gohy/edit/{{ $gohy->id }}">
            <input type="submit" value="edit">
        </form>
        <form action="/gohy/delete/{{ $gohy->id}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
        </form>
    </div>
</div>
