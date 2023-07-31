

<h2 class="title">Cathaloog van King</h2>
<div class="bts-div">
    <button class="bts"><a href="/form">+ add a product to King</a></button>
</div>
<div class="">
    <table class="tab">
        <thead class="w-full">
            <tr  class="trs">
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
            @foreach ($kings as $king)
                <tr class="trses">
                    <td class="px-6 py-4 trses">
                        <img src="{{$king->url}} " class="tabimg" alt="">
                    </td>
                    <td scope="row" class="">
                        {{$king->name}}
                    </td>
                    <td class="px-6 py-4 trses">
                        {{$king->number}}
                    </td>
                    <td class="px-6 py-4 trses">
                        {{$king->stock}}
                    </td>
                    <td class="px-6 py-4 trses">
                        {{$king->sort}}
                    </td>
                    <td class="px-6 py-4 trses">
                        <a href="/kings/{{$king->id}}" class="">More...</a>
                    </td>
                </tr>                
                @endforeach
        </tbody>
    </table>
</div>










