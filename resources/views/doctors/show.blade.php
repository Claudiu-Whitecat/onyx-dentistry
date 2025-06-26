<x-layout>
    <section class="doctors doctors-inner hero-section">
        <div class="container">
            <div class="doctor-holder">
                <div class="doctor-image">
                    <img src="/storage/{{$doctor->image}}"/>
                </div>
                <div class="doctor-info">
                    <span class="doctor-title">
                       {{$doctor->job_title}}
                    </span>
                    <h1 class="doctor-name">   {{$doctor->name}}</h1>
                    <p class="short-intro">
                        {{$doctor->short_description}}
                    </p>
                    <div class="doctor-contact-info">
                        @if($doctor->email)
                        <span>
                            Email: <a href="mailto:{{$doctor->email}}" class="plain-link animated-underscore">   {{$doctor->email}}</a>
                        </span>
                        @endif
                        <span>
                            Telefon: <a href="tel:{{$doctor->phone}}" class="plain-link animated-underscore">{{$doctor->email}}</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="markdown-container">
                {!! markdownToHtml($doctor->markdown_text) !!}
            </div>
        </div>
    </section>
    <section class="container ">
        @if($doctor->priceCategories)
        <div class="prices-holder">
            @foreach ($doctor->priceCategories as $category)
                <details class="price-category">
                    <summary>
                        <h1 class="price-category-name">{{ $category->name }}</h1>
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
                            @if($price->price_categories_id == $category->id)
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

        </div>
        @endif

    </section>
    <section class="form-container">
        <div class="container">
            <h1>Aici vine form-ul</h1>
        </div>
    </section>
</x-layout>
