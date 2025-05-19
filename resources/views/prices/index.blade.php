<x-layout>
    <section class="container pricing-page">
        <h1 class="pricing-headline">
            Tarife
        </h1>
        <p class="pricing-subheadline">
            Mai jos găsiți lista completă de prețuri sau puteți folosi funcția de căutare pentru a găsi o anumită procedură.
        </p>
        <div class="search-box">
            <input type="search" id="searchInput" placeholder="Caută procedură..." class="search-input">
            <div class="search-result">
{{--                <table class="pricing-table">--}}
{{--                    <tr>--}}
{{--                        <td>--}}
{{--                            Fațetă de compozit--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            300 ron--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>--}}
{{--                            Fațetă de zirconiu--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            500 ron--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>--}}
{{--                            Fațetă de aur--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            800 ron--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                </table>--}}
            </div>
        </div>
        <div class="prices-holder">
            @include('components.price-item')
        </div>
    </section>

    @push('scripts')
        <script src="js/prices.js"></script>
    @endpush
</x-layout>

