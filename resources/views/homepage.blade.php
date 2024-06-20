<x-layout>
    <section class="billboard" aria-labelledby="#hero-section">
        <div class="container container-wide main-gradient hero-section">
            <div class="hero-holder">
                <div class="content-wrapper">
                    <header>
                        <h1 id="hero-section" class="headline-primary headline-primary--hero ">
                            A first class dentistry experience
                        </h1>
                        <p class="paragraph-primary">
                            Because your smile is the beauty of your soul.
                        </p>
                    </header>
                    <div class="cta-holder">
                        <button class="button button--cta button--to-form button--tertiary">
                            Programează-te
                        </button>
                        <div class="cta-phone">
                            <a class="icon-holder icon-holder--phone" href="tel:1-800-123-1234" title="A button to make a phone call">
                                <img aria-hidden="true" alt="an image of a phone" class="icon icon-telephone" src="{{ asset('images/icon-phone-ringing.svg') }}"/>
                            </a>
                            <span>
                        Call: 1-800-123-1234
                    </span>
                        </div>
                    </div>
                </div>
                <div class="main-image">
                    <img alt="A woman smiling" src="{{ asset('images/placeholders/home-1.jpg') }}" loading="eager"
                    decoding="async"/>
                </div>
            </div>
        </div>
    </section>
    <section class="welcome base-spacing" aria-labelledby="#welcome-message">
        <header>
            <h2 id="welcome-message" class="heading-secondary color-tertiary-48">
                Welcome to Onyx Dentistry
            </h2>
            <h3 class="heading-section">
                Cosmetic & General Dentistry
            </h3>
            <p class="paragraph-base">
                Every day, more than 100 patients receive professional assistance in our clinic.
            </p>
        </header>
        <div class="container">
            @include('components.cards.cards-services')
        </div>
    </section>
</x-layout>
