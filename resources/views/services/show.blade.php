

<x-layout>
    <section class="service-innerpage">
        <div class="container">
            <div class="page-title">
                <span class="title">
                    <span>
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.05078 2.75C6.05078 11 15.9508 11 15.9508 19.25" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.9508 2.75C15.9508 11 6.05078 11 6.05078 19.25" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.08594 3.57499H15.9126" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.0957 6.87502H14.9057" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.9126 18.425H6.08594" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.8507 15.125H7.0957" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    Servicii
                </span>
                <h1 class="subtitle">{{$service->title}}</h1>
            </div>
            <div class="markdown-container">
                <div class="main-image">
                    <img
                        src="{{asset($service->imagePath)}}"
                       alt="Main image of current article" loading="eager" decoding="async"/>
                </div>
                {!! markdownToHtml($service->body) !!}


            </div>
        </div>

    </section>
    <section class="form-container">
        <div class="container">
            <h1>Aici vine form-ul</h1>
        </div>
    </section>
</x-layout>
