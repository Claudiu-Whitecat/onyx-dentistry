<header role="banner">
    <section class="header-info-bar">
        <div class="container  header-info--content">
            <div class="nav-wrapper">
                <a href="/">
                    <div class="logo-holder">
                        <picture>
                            <source srcset="{{asset('images/main-logo-portrait.svg')}}" media="(max-width: 450px)">
                            <source srcset="{{asset('images/main-logo-landscape.svg')}}" media="(min-width: 459px)" >
                            <img class="main-logo " src="{{asset('images/main-logo-landscape.svg')}}" src="/_nuxt/home-hero.BO4CeNfa.png" alt="Illustration of a tooth with text: Onyx Dentistry" loading="eager" decoding="async">
                        </picture>
                    </div>
                </a>
                <div class="nav-divider"></div>
                <address class="header-contact">
                    <ul class="header-contact--list">
                        <li class="header-element">
                            <a class="link-button animated-underscore" href="tel:0765928071">+(40)765.928.071</a>
                        </li>
                        <li class="header-element">

                            <a href="https://www.google.com/maps/place/Onyx+Dentistry/@44.4603121,26.0685003,17z/data=!3m1!4b1!4m6!3m5!1s0x40b2038edd03bd21:0x759bbf091cb29cb6!8m2!3d44.4603121!4d26.0710752!16s%2Fg%2F11sclthyf9?entry=ttu&g_ep=EgoyMDI1MDUyMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="link-button animated-underscore">
                                București, Str. Turda 118, Bloc 37
                            </a>
                        </li>
                    </ul>
                </address>
            </div>
            <div class="hamburger-menu">
                <div class="top-line"></div>
                <div class="middle-line"></div>
                <div class="bottom-line"></div>
            </div>
            <div class="nav-wrapper right-nav">
                <div class="nav-menu-wrap">
                                <nav class="header_primary-navigation" aria-label="Onyx Dentistry Main Navigation">
                                    <ul role="menubar" class="primary-navigation_holder">
                                        <li role="none">
                                            <x-nav-link type="anchor" :href="'/'" :active="request()->is('/')" >
                                                Acasă
                                            </x-nav-link>
                                        </li>
                                        <li>
                                            <x-nav-link type="anchor" :href="'/blog'"  :active="request()->is('blog')" >
                                                Blog
                                            </x-nav-link>
                                        </li>
                                        <li>
                                            <x-nav-link type="anchor" :href="'doctori'" :active="request()->is('doctori')" >
                                                Doctori
                                            </x-nav-link>
                                        </li>
                                        <li x-data="{open:false}" >
                                            <x-nav-link type="button" :hasSubmenu="true" >
                                                Servicii

                                                <svg class="icon" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.1426 3.92854L5.99972 9.0714L0.856864 3.92854" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>

                                            </x-nav-link>
                                            <ul class="dropdown-menu hidden">
                                                <li>
                                                    <x-nav-link class="submenu-item" type="anchor" :href="'services/crown-bridges'" :active="request()->is('crown-bridges')" >
                                                        Coroane
                                                    </x-nav-link>
                                                </li>
                                                <li>
                                                    <x-nav-link class="submenu-item" type="anchor" :href="'services/crown-bridges'" :active="request()->is('crown-bridges')" >
                                                        Implanturi
                                                    </x-nav-link>
                                                </li>
                                                <li>
                                                    <x-nav-link class="submenu-item" type="anchor" :href="'services/crown-bridges'" :active="request()->is('crown-bridges')" >
                                                        Extracii
                                                    </x-nav-link>
                                                </li>
                                                <li>
                                                    <x-nav-link class="submenu-item" type="anchor" :href="'services/crown-bridges'" :active="request()->is('crown-bridges')" >
                                                        Coroane
                                                    </x-nav-link>
                                                </li>
                                                <li>
                                                    <x-nav-link class="submenu-item" type="anchor" :href="'services/crown-bridges'" :active="request()->is('crown-bridges')" >
                                                        Coroane
                                                    </x-nav-link>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <x-nav-link type="anchor" :href="'preturi'" :active="request()->is('preturi')" >
                                                Prețuri
                                            </x-nav-link>
                                        </li>
                                        <li>
                                            <x-nav-link type="button" :active="request()->is('contact')" >
                                                Contact
                                            </x-nav-link>
                                        </li>
                                    </ul>
                                </nav>
                </div>
                <a href="" class="button button--tertiary bg-tertiary ">
                        <span>Programează-te</span>
                </a>
            </div>
{{--            <x-social-media-nav>--}}

{{--            </x-social-media-nav>--}}
        </div>
    </section>
{{--    <section class="header-menu">--}}
{{--        <div class="container  header-navigation">--}}
{{--            <a href="/">--}}
{{--                <div class="logo-holder">--}}
{{--                    <img class="main-logo mobile" src="{{asset('images/main-logo-portrait.svg')}}" alt="Illustration of a tooth with text: Onyx Dentistry" loading="eager" decoding="async">--}}
{{--                    <img class="main-logo desktop" src="{{asset('images/main-logo-landscape.svg')}}" alt="Illustration of a tooth with text: Onyx Dentistry" loading="eager" decoding="async">--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <button class="js-hamburger hamburger mobile">--}}
{{--                <span class="line"></span>--}}
{{--                <span class="line"></span>--}}
{{--                <span class="line"></span>--}}
{{--            </button>--}}
{{--            <nav class="header_primary-navigation" aria-label="Onyx Dentistry Main Navigation">--}}
{{--                <ul role="menubar" class="primary-navigation_holder">--}}
{{--                    <li role="none">--}}
{{--                        <x-nav-link type="anchor" :href="'/'" :active="request()->is('/')" >--}}
{{--                            Acasă--}}
{{--                        </x-nav-link>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <x-nav-link type="anchor" :href="'/blog'"  :active="request()->is('blog')" >--}}
{{--                            Blog--}}
{{--                        </x-nav-link>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <x-nav-link type="anchor" :href="'doctori'" :active="request()->is('doctori')" >--}}
{{--                            Doctori--}}
{{--                        </x-nav-link>--}}
{{--                    </li>--}}
{{--                    <li x-data="{open:false}" >--}}
{{--                        <x-nav-link type="button" :hasSubmenu="true" >--}}
{{--                            Servicii--}}
{{--                            <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-dropdown" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
{{--                            </svg>--}}
{{--                        </x-nav-link>--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                            <li>--}}
{{--                                <x-nav-link class="submenu-item" type="anchor" :href="'services/crown-bridges'" :active="request()->is('crown-bridges')" >--}}
{{--                                    Coroane--}}
{{--                                </x-nav-link>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <x-nav-link class="submenu-item" type="anchor" :href="'services/crown-bridges'" :active="request()->is('crown-bridges')" >--}}
{{--                                    Implanturi--}}
{{--                                </x-nav-link>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <x-nav-link class="submenu-item" type="anchor" :href="'services/crown-bridges'" :active="request()->is('crown-bridges')" >--}}
{{--                                    Extracii--}}
{{--                                </x-nav-link>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <x-nav-link class="submenu-item" type="anchor" :href="'services/crown-bridges'" :active="request()->is('crown-bridges')" >--}}
{{--                                    Coroane--}}
{{--                                </x-nav-link>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <x-nav-link class="submenu-item" type="anchor" :href="'services/crown-bridges'" :active="request()->is('crown-bridges')" >--}}
{{--                                    Coroane--}}
{{--                                </x-nav-link>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <x-nav-link type="anchor" :href="'preturi'" :active="request()->is('prices')" >--}}
{{--                            Prețuri--}}
{{--                        </x-nav-link>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <x-nav-link type="button" :active="request()->is('contact')" >--}}
{{--                            Contact--}}
{{--                        </x-nav-link>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--            <button class="button button--cta button--to-form button--tertiary">--}}
{{--                Programează-te--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </section>--}}
</header>
