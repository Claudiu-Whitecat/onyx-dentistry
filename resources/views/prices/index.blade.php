<x-layout>
    <section class="container">
        <h1 class="pricing-headline">
            Tarife
        </h1>
        <p>
            Mai jos găsiți lista completă de prețuri.
        </p>
        <div class="prices-holder">
            @include('components.price-item')
        </div>

    </section>

    @push('scripts')
        <script src="js/prices.js"></script>
    @endpush
</x-layout>

