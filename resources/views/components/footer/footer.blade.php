    @php
        $footer_links = array(
            1 =>     array(
                'index' => 1,
                'link' => '/blog',
                'name' => 'Blog'
            ),
            2 =>     array(
                'index' => 2,
                'link' => '/servicii',
                'name' => 'Servicii'
            ),
            3 =>     array(
                'index' => 3,
                'link' => '/doctori',
                'name' => 'Doctori'
            ),
             4 =>     array(
                 'index' => 4,
                'link' => '/preturi',
                'name' => 'Preturi'
            ),
            5 =>     array(
                'index' => 5,
                'link' => '/contact',
                'name' => 'Contact'
            ),
        )
    @endphp

<footer>
    <div class="container container-wide">
        <div class="footer_content">
            <div class="brand-details">
                <img class="main-logo " src="{{asset('images/main-logo-landscape.svg')}}" src="/_nuxt/home-hero.BO4CeNfa.png" alt="Illustration of a tooth with text: Onyx Dentistry" loading="eager" decoding="async">
                <p>
                    Partenerul dumneavoastră de încredere în domeniul sănătății stomatologice. Descoperiți servicii medicale de calitate care să vă satisfacă nevoile.
                </p>
                <div class="cta-holder">
                    <a href="{{ url('/servicii') }}" class="button bg-white">
                        <span>
                            Serviciile noastre
                        </span>
                    </a>
                    <a href="" class="link ">
                        Programează-te
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
                    @foreach($footer_links as $footer_link)

                    <li role="menuitem">
                        <a class="footer_link body-regular" type="anchor" href="{{$footer_link["link"]}}" >
                              <span class="link-number">
                               0{{$footer_link["index"]}}
                              </span>
                            {{$footer_link["name"]}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </nav>
            <div class="contact-details">
                <p>
                    <a class="animated-underscore" href="https://www.google.com/maps/place/Onyx+Dentistry/@44.4603121,26.0710752,17z/data=!3m1!4b1!4m6!3m5!1s0x40b2038edd03bd21:0x759bbf091cb29cb6!8m2!3d44.4603121!4d26.0710752!16s%2Fg%2F11sclthyf9?entry=ttu&g_ep=EgoyMDI1MDUyNy4wIKXMDSoASAFQAw%3D%3D">
                        București, Str. Turda Nr. 118, Bloc 37 (în cadrul Smile Up)
                    </a>
                </p>
                <a href="mailto:contact@onyx-dentistry.ro" class="footer-link animated-underscore">contact@onyx-dentistry.ro</a>
                <a href="tel:0765928071" class="footer-link animated-underscore">+(40)765.928.071
                </a>
                <a class="link animated-underscore" href="/contact">
                   Contactează-ne   <span class="link-decoration" aria-hidden="true">
                            <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 4L9 4M9 4L5.5 0.5M9 4L5.5 7.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                </a>
            </div>
        </div>

    </div>
    <div class="footer_copyright">
        <div class="container container-wide footer_copyright-content">
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
