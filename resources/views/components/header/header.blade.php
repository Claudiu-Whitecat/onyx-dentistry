<header role="banner">
    <section class="header-info-bar">
        <div class="container  header-info--content">
            <address class="header-contact">
                <ul class="header-contact--list">
                    <li class="header-element">
            <span class="social-icon clr-white" aria-hidden="true">
              <i class="fa-solid fa-phone-flip  fa-rotate-90"></i>
            </span>
                        Telefon:
                        <a class="link-button" href="tel:0765928071">0765.928.071</a>
                    </li>
                    <li class="header-element">
            <span class="social-icon clr-white" aria-hidden="true">
              <i class="fas fa-map-marker-alt"></i>
            </span>
                        <a href="https://www.google.com/maps/place/Onyx+Dentistry/@44.4803076,26.0922886,15z/data=!4m6!3m5!1s0x40b2038edd03bd21:0x759bbf091cb29cb6!8m2!3d44.4603121!4d26.0710752!16s%2Fg%2F11tsclhyf9?entry=ttu" target="_blank" class="link-button">
                            București, Str. Turda 118, Bloc 37
                        </a>
                    </li>
                </ul>
            </address>
            <x-social-media-nav>

            </x-social-media-nav>
        </div>
    </section>
    <section class="header-menu">
        <div class="container  header-navigation">
            <a href="/">
                <div class="logo-holder">
                    <img class="main-logo mobile" src="{{asset('images/main-logo-portrait.svg')}}" alt="Illustration of a tooth with text: Onyx Dentistry" loading="eager" decoding="async">
                    <img class="main-logo desktop" src="{{asset('images/main-logo-landscape.svg')}}" alt="Illustration of a tooth with text: Onyx Dentistry" loading="eager" decoding="async">
                </div>
            </a>
            <button class="js-hamburger hamburger mobile">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <nav class="header_primary-navigation" aria-label="Onyx Dentistry Main Navigation">
                <ul role="menubar" class="primary-navigation_holder">
                    <li role="none">
                        <x-nav-link type="anchor" :href="'/'" :active="request()->is('/')" >
                            Acasă
                        </x-nav-link>
                    </li>
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
                    <li>
                        <x-nav-link type="anchor" :href="'preturi'" :active="request()->is('prices')" >
                            Prețuri
                        </x-nav-link>
                    </li>
{{--                    <li>--}}
{{--                        <x-nav-link type="button" :active="request()->is('contact')" >--}}
{{--                            Contact--}}
{{--                        </x-nav-link>--}}
{{--                    </li>--}}
                </ul>
            </nav>
            <button class="button button--cta button--to-form button--tertiary">
                Programează-te
            </button>
        </div>
    </section>
</header>
