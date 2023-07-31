{{-- gohy --}}


<h2 class="title">Cathaloog van gohy</h2>
<div class="bts-div">
    <button class="bts"><a href="/form2">+ add a product to Gohy</a></button>
</div>
<div class="">
    <table class="tab">
        <thead class="w-full">
            <tr class="trses">
                <th scope="col" class="px-6 py-3 trses">
                    url
                </th>
                <th scope="col" class="px-6 py-3 trses">
                    name
                </th>
                <th scope="col" class="px-6 py-3 trses">
                    number
                </th>
                <th scope="col" class="px-6 py-3 trses">
                    stock
                </th>
                <th scope="col" class="px-6 py-3 trses">
                    sort
                </th>
                <th scope="col" class="px-6 py-3 trses">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gohy as $gohies)
                <tr class="">
                    <td class="px-6 py-4 trses">
                        <img src="{{$gohies->url}}" alt="">
                    </td>
                    <td scope="row" class=" trses">
                        {{$gohies->name}}
                    </td>
                    <td class="px-6 py-4 trses">
                        {{$gohies->number}}
                    </td>
                    <td class="px-6 py-4 trses">
                        {{$gohies->stock}}
                    </td>
                    <td class="px-6 py-4 trses">
                        {{$gohies->sort}}
                    </td>
                    <td class="px-6 py-4 trses">
                        <a href="/gohys/{{$gohies->id}}" class="">More...</a>
                    </td>
                </tr>                
                @endforeach
        </tbody>
    </table>
</div>