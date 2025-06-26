<x-layout>
    <section class="doctors">
        <div class="container">
            <div class="page-title">
                <h1 class="pricing-headline">
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
                    Doctori
                </h1>
                <p class="pricing-subheadline">
                    Cunoaște echipa Onyx Dentistry
                </p>
            </div>
            <ul class="doctor-cards">
                @foreach($doctors as $doctor)

                    <li class="doctor-card">
                        <a href="{{ route('doctor.show', Str::slug($doctor->name)) }}">
                            <div class="doctor-card-image">
                                <img src="{{$doctor->image}}"/>
                            </div>
                            <div class="doctor-footer">
                                <h2 class="doctor-title">
                                    {{$doctor->name}}
                                </h2>
                                <h3 class="doctor-subtitle">
                                    {{$doctor->job_title}}
                                </h3>

                                <a class="doctor-cta link" href="{{ route('doctor.show', Str::slug($doctor->name)) }}">
                                    Află mai multe
                                    <span class="link-decoration black" aria-hidden="true">
                                <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4L9 4M9 4L5.5 0.5M9 4L5.5 7.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                              </span>
                                </a>
                            </div>
                        </a>

                    </li>
                @endforeach
            </ul>
        </div>
    </section>

</x-layout>
