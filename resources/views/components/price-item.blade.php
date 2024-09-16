@foreach($priceCategories as $priceCategory)
    <details>
        <summary>  {{$priceCategory->name}} </summary>
        <table>
            <thead>
            <tr>
                <td>
                    Procedură
                </td>
                <td>
                    Preț
                </td>
                <td>
                    Monedă
                </td>
            </tr>
            </thead>
            @foreach($prices as $price)

                @if($price->price_categories_id == $priceCategory->id)
                    <tr>
                        <td>
                            {{$price->name}}
                        </td>
                        <td>
                            {{$price->value}}
                        </td>

                        <td>
                            @foreach($priceCurrencies as $priceCurrency)
                                @if($price-> price_currency_id == $priceCurrency->id)
                                    {{$priceCurrency->name}}
                                @endif
                            @endforeach
                        </td>
                        @if($price->quantifier !== null)
                            <td>

                                {{$price->quantifier}}

                            </td>
                        @endif
                    </tr>
                @endif
            @endforeach
        </table>
    </details>
@endforeach
