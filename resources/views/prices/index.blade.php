<x-layout>
    <section class="container pricing-page">
        <div class="page-title">
            <h1 class="pricing-headline">
                    <span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6351 10L16.616 11.6817C17.0226 11.9108 17.1618 12.4292 16.9243 12.8317L15.9551 14.4725C15.7243 14.8633 15.2235 14.9975 14.8285 14.7742L11.8185 13.0758V16.6667C11.8185 17.1267 11.4451 17.5 10.9851 17.5H9.01679C8.55679 17.5 8.18345 17.1267 8.18345 16.6667V13.0758L5.17345 14.7742C4.77845 14.9975 4.27762 14.8633 4.04679 14.4725L3.07762 12.8317C2.84012 12.43 2.97929 11.9117 3.38595 11.6817L6.36512 10L3.38429 8.31833C2.97762 8.08917 2.83845 7.57083 3.07595 7.16833L4.04512 5.5275C4.27595 5.13667 4.77679 5.0025 5.17179 5.22583L8.18179 6.92417V3.33333C8.18179 2.87333 8.55512 2.5 9.01512 2.5H10.9835C11.4435 2.5 11.8168 2.87333 11.8168 3.33333V6.92417L14.8268 5.22583C15.2218 5.0025 15.7226 5.13667 15.9535 5.5275L16.9226 7.16833C17.1601 7.57 17.021 8.08833 16.6143 8.31833L13.6351 10Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
                Tarife
            </h1>
            <p class="pricing-subheadline">
                Mai jos găsiți lista completă de prețuri sau puteți folosi funcția de căutare pentru a găsi o anumită
                procedură.
            </p>
        </div>
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

