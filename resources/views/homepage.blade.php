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
            <ul class="cards-services grid-even-columns">
                <li class="card-services">
                    <img class="card-services--image" src="      {{ asset('images/home-18.jpg') }}" alt="Placeholder image with dentistry equipment" loading="lazy" decoding="async"/>
                    <h3 class="card-services--heading">
                        General Dentistry
                    </h3>
                    <p class="paragraph-base card-services--paragraph">
                        General dentistry incorporates a broad range of diseases and disorders of the oral and maxillofacial region.
                    </p>
                </li>
                <li class="card-services">
                    <img class="card-services--image" src="      {{ asset('images/home-19.jpg') }}" alt="Placeholder image with a pacient" loading="lazy" decoding="async"/>
                    <h3 class="card-services--heading">
                        Cosmetic Dentistry
                    </h3>
                    <p class="paragraph-base card-services--paragraph">
                        Your smile is the first impression that others have of you, making sense that you would want it bright, white, and healthy.
                    </p>
                </li>
                <li class="card-services">
                    <div class="card-services--image">
                        <img src="
                        {{ asset('images/home-20.jpg') }}" alt="Placeholder image with an implant model." loading="lazy" decoding="async"/>
                    </div>
                    <h3 class="card-services--heading">
                        Restorative Dentistry
                    </h3>
                    <p class="paragraph-base card-services--paragraph">
                        We offer fillings, crowns, bridges and implants as common restorative options to bring back your natural smile.
                    </p>
                </li>
            </ul>
        </div>
    </section>
</x-layout>
