<div class="articles mx-auto">
    @forelse ($gohy as $gohies)
        <div class="max-w-sm  border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 arti">
            <a href="/gohy/{{$gohies->id}}">
                <img class="rounded-t-lg" src="{{$gohies->url}}" alt="" />
            </a>
            <div class="p-5">
                <a href="/gohy/{{$gohies->id}}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-100 ">{{$gohies->number}}</h5>
                </a>
                <a href="/gohy/{{$gohies->id}}">
                    <h5 class=" font-bold tracking-tight text-gray-100 ">{{$gohies->name}}</h5>
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