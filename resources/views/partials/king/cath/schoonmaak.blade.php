<div class="articles mx-auto">
    @forelse ($kings as $king)
        <div class="max-w-sm border border-gray-200 rounded-lg shadow dark:border-gray-700 arti">
            <a href="/king/{{$king->id}}">
                <img class="rounded-t-lg" src="{{$king->url}}" alt="" />
            </a>
            <div class="p-5">
                <a href="/king/{{$king->id}}">
                    <h5 class="mb-3 text-2xl font-normal tracking-tight text-gray-100 dark:text-gray-400">{{$king->number}}</h5>
                </a>
                <a href="/king/{{$king->id}}">
                    <h5 class="mb-3 font-normal tracking-tight text-gray-900 dark:text-gray-400">{{$king->name}}</h5>
                </a>
            </div>
        </div>
        @empty
        <div>
            <div class="articles mx-auto">
                <p>
                    there are no products avaible in this catheghory
                </p>
            </div>
        </div>
        
    @endforelse
</div>