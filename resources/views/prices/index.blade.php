<x-layout>

    @foreach($priceCategories as $priceCategory)
        <details>
            <summary>  {{$priceCategory->name}} </summary>
            <table>
                @foreach($prices as $price)
                    @if($price->price_categories_id == $priceCategory->id)
                        <tr>
                            <td>
                                {{$price->name}}
                            </td>
                            <td>
                                {{$price->value}}
                            </td>
                            <td>@if($price-> price_currency_id == 1)
                                    lei
                                @elseif($price-> price_currency_id == 2)
                                    euro
                                @endif
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </details>
    @endforeach

</x-layout>
