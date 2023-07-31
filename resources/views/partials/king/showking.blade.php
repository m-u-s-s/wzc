<div class="show">
    <img src="{{ $kings->url }}" alt="product-image">
    <div class="show-text">
        <p>name :{{ $kings->name }}</p>
        <p>number : {{ $kings->number }}</p>
        <p>stock :{{ $kings->stock }}</p>
        <p>sort : {{ $kings->sort }}</p>
    </div>
    <div class="show-btns">
        <form action="/king/edit/{{ $kings->id }}">
            <input type="submit" value="edit">
        </form>
        <form action="/king/delete/{{ $kings->id}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
        </form>
    </div>
</div>
