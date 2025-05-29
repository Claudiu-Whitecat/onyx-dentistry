<footer>
    <div class="container">
        <div class="footer_content">
            <div class="brand-details">
                <img class="main-logo " src="{{asset('images/main-logo-landscape.svg')}}" src="/_nuxt/home-hero.BO4CeNfa.png" alt="Illustration of a tooth with text: Onyx Dentistry" loading="eager" decoding="async">
                <p>
                    Your trusted partner in comprehensive healthcare. Discover quality health to meet your needs.
                </p>
                <div class="cta-holder">
                    <a href="" class="button bg-white">
                        <span>
                            Our services
                        </span>
                    </a>
                    <a href="" class="link ">
                        Book Appointment
                        <span class="link-decoration" aria-hidden="true">
                            <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 4L9 4M9 4L5.5 0.5M9 4L5.5 7.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </a>
                </div>
                <x-social-media-nav>

                </x-social-media-nav>
            </div>
            <nav class="footer_navigation" aria-label="Onyx Dentistry Secondary Navigation">
                <ul  class="footer-navigation_holder">
                    <li class="footer-navigation_header">
                        <p>Resurse</p>
                    </li>
                    <li role="menuitem">
                        <a class="footer_link body-regular" type="anchor" :href="'/blog'"  :active="request()->is('blog')" >
                            Blog
                        </a>
                    </li>
                    <li role="menuitem">
                        <a class="footer_link body-regular" type="anchor" :href="'/doctori'"  :active="request()->is('doctori')" >
                            Doctori
                        </a>
                    </li>
                    <li role="menuitem">
                        <a class="footer_link body-regular" type="anchor" :href="'/servicii'"  :active="request()->is('servicii')" >
                            Servicii
                        </a>
                    </li>
                    <li role="menuitem">
                        <a class="footer_link body-regular" type="anchor" :href="'/preturi'"  :active="request()->is('preturi')" >
                            Prețuri
                        </a>
                    </li>
                    <li role="menuitem">
                        <a class="footer_link body-regular" type="anchor" :href="'/contact'"  :active="request()->is('contact')" >
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
    <div class="footer_copyright">
        <div class="container footer_copyright-content">
            <p class="body-regular">
                &#169; 2023 - <?= date("Y") ?>
            </p>
            <nav class="" aria-label="Onyx Dentistry Secondary Navigation">
                <ul  class="footer-navigation-legal">
                    <li role="menuitem">
                        <a class="footer_link body-regular" type="anchor" :href="'/blog'"  :active="request()->is('blog')" >
                            Termeni & Condiții
                        </a>
                    </li>
                    <li role="menuitem">
                        <a class="footer_link body-regular" type="anchor" :href="'/doctori'"  :active="request()->is('doctori')" >
                            Cookies
                        </a>
                    </li>
                    <li role="menuitem">
                        <a class="footer_link body-regular" type="anchor" :href="'/doctori'"  :active="request()->is('doctori')" >
                            ANPC
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</footer>
