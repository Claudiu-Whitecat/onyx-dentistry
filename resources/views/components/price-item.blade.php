@foreach($priceCategories as $priceCategory)
    <details class="price-category"  >
        <summary>
            <h1 class="price-category-name">{{$priceCategory->name}}</h1>
        </summary>
        <table class="pricing-table">
            <thead>
            <tr>
                <td>
                    Procedură
                </td>
                <td>
                    Preț
                </td>
            </tr>
            </thead>
            <tbody id="list">
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
                            @foreach($priceCurrencies as $priceCurrency)
                                @if($price-> price_currency_id == $priceCurrency->id)
                                    {{$priceCurrency->name}}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>

        </table>
    </details>
@endforeach
