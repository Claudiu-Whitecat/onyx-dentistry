@foreach($priceCategories as $priceCategory)
    <details class="price-details">
        <summary>{{$priceCategory->name}}</summary>
        <table class="pricing-table">
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
                            @if($price->quantifier !== null)
                                ({{$price->quantifier}})
                            @endif
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
                    </tr>
                @endif
            @endforeach
        </table>
    </details>
@endforeach
