<x-layout>
    <section class="container pricing-page">
        <h1 class="pricing-headline">
            Tarife
        </h1>
        <p class="pricing-subheadline">
            Mai jos găsiți lista completă de prețuri sau puteți folosi funcția de căutare pentru a găsi o anumită
            procedură.
        </p>
        <div class="search-box">
            <input type="search" id="searchInput" placeholder="Caută procedură..." class="search-input">
            <div class="search-result">
                <table class="pricing-table">

                </table>
            </div>
        </div>
        <div class="prices-holder">
            @include('components.price-items.price-item')
        </div>
    </section>

{{--    @push('scripts')--}}
{{--        <script src="resources/js/pages/prices.js"></script>--}}
{{--    @endpush--}}
</x-layout>

