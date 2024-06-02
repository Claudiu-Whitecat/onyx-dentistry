<footer>
    <div class="container">
        <div class="footer_content">
            <nav class="footer_navigation" aria-label="Onyx Dentistry Secondary Navigation">
                <ul  class="footer-navigation_holder">
                    <li class="footer-navigation_header">
                        <p>Resurse</p>
                    </li>
                    <li role="menuitem">
                        <x-nav-link class="footer_link body-regular" type="anchor" :href="'/blog'"  :active="request()->is('blog')" >
                            Blog
                        </x-nav-link>
                    </li>
                    <li role="menuitem">
                        <x-nav-link class="footer_link body-regular" type="anchor" :href="'/doctori'"  :active="request()->is('doctori')" >
                            Doctori
                        </x-nav-link>
                    </li>
                    <li role="menuitem">
                        <x-nav-link class="footer_link body-regular" type="anchor" :href="'/servicii'"  :active="request()->is('servicii')" >
                            Servicii
                        </x-nav-link>
                    </li>
                    <li role="menuitem">
                        <x-nav-link class="footer_link body-regular" type="anchor" :href="'/preturi'"  :active="request()->is('preturi')" >
                            Prețuri
                        </x-nav-link>
                    </li>
                    <li role="menuitem">
                        <x-nav-link class="footer_link body-regular" type="anchor" :href="'/contact'"  :active="request()->is('contact')" >
                            Contact
                        </x-nav-link>
                    </li>
                </ul>
                <ul  class="footer-navigation_holder">
                    <li class="footer-navigation_header">
                        <p>Date de contact</p>
                    </li>
                    <li role="menuitem">
                        <p class="footer-navigation_text">
                            Adresă
                        </p>
                        <p>
                            București, Str. Turda 118, Bloc 37
                        </p>
                    </li>
                    <li role="menuitem">
                        <p class="footer-navigation_text">
                            Telefon
                        </p>
                        <p>
                            <a class="link-button " href="tel:0765928071">0765.928.071</a>
                        </p>
                    </li>
                    <li role="menuitem">
                        <p class="footer-navigation_text">
                            Email
                        </p>
                        <p>
                            <a class="link-button" href="mailto:contact@onyx-dentistry.ro" target="_blank">
                                contact@onyx-dentistry.ro</a>
                        </p>
                    </li>
                </ul>
                <ul  class="footer-navigation_holder">
                    <li class="footer-navigation_header">
                        <p>Locație</p>
                    </li>
                    <li>
                        <img alt="Placeholder image" class="placeholder-map" src="{{asset('images/placeholder-map.png')}}"/>
                    </li>
                </ul>
                <ul  class="footer-navigation_holder">
                    <li class="footer-navigation_header">
                        <p>Program</p>
                    </li>
                    <li>
                        <ol class="open-hours--holder">
                            <li class="open-hours">
                                <div class="week-day footer-navigation_text">
                                    Luni
                                </div>
                                <div class="time-frame">
                                    10:00 - 22:00
                                </div>
                            </li>
                            <li class="open-hours">
                                <div class="week-day footer-navigation_text">
                                    Marți
                                </div>
                                <div class="time-frame">
                                    10:00 - 22:00
                                </div>
                            </li>
                            <li class="open-hours">
                                <div class="week-day footer-navigation_text">
                                    Miercuri
                                </div>
                                <div class="time-frame">
                                    10:00 - 22:00
                                </div>
                            </li>
                            <li class="open-hours">
                                <div class="week-day footer-navigation_text">
                                    Joi
                                </div>
                                <div class="time-frame">
                                    10:00 - 22:00
                                </div>
                            </li>
                            <li class="open-hours">
                                <div class="week-day footer-navigation_text">
                                    Vineri
                                </div>
                                <div class="time-frame">
                                    10:00 - 22:00
                                </div>
                            </li>
                            <li class="open-hours">
                                <div class="week-day footer-navigation_text">
                                    Sâmbătă
                                </div>
                                <div class="time-frame">
                                    12:00 - 16:00
                                </div>
                            </li>
                            <li class="open-hours">
                                <div class="week-day footer-navigation_text">
                                    Duminică
                                </div>
                                <div class="time-frame">
                                    Închis
                                </div>
                            </li>
                        </ol>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="footer_copyright">
            <p class="body-regular">
                &#169; 2023 - <?= date("Y") ?>
            </p>
            <x-social-media-nav>

            </x-social-media-nav>
        </div>
    </div>

</footer>
