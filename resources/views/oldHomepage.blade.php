<x-layout>
    <section id="contact" class="contact">
        <div class="container grid-uneven-columns">
            <div class="form-wrapper">
                <div class="booking-text">
                    <h2 class="main-heading">Site-ul se află în dezvoltare</h2>
                    <div class="main-text">
                        <p class="main-paragraph main-paragraph--black">
                            Dar ne găsești oricând la cabinetul nostru de pe
                            <a class="link-button" href="https://maps.app.goo.gl/FJLwDQZdQh5B5C698" target="_blank">strada Turda, nr. 118, Bloc 37 (în cadrul clinicii Smile Up)</a>.
                        </p>
                    </div>
                </div>
                <div class="form-holder grid-flow-rows">
                    <p class="form-contact--paragraph">
                        Pentru a stabili o programare, lasă-ne datele tale de contact și
                        un scurt mesaj în care să ne spui cu ce probleme te confrunți.
                    </p>
                    <form method="POST" id="form" class="form form-contact" role="" action="{{ route('contact.submit') }}">
                        @csrf {{-- Cross-Site Request Forgery protection --}}
                        <div class="form-contact--content">
                            <div class="field name">
                                <label for="name">Nume și Prenume*</label>
                                <input name="name" id="name" class="input input-text" type="text" autocomplete="off" placeholder="Ex: Mihăilescu Adrian" value="" />
                                <span class="error-message"></span>
                                <svg class="icon icon-success hidden hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>

                                <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="field telephone">
                                <label for="phone">Telefon*</label>
                                <input name="phone" id="phone" class="input input-tel" type="tel" inputmode="tel" autocomplete="tel" placeholder="Ex: 0734064XXX" value="" />
                                <span class="error-message"></span>
                                <svg class="icon icon-success hidden hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>

                                <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="field email">
                                <label for="email">Email*</label>
                                <input name="email" id="email" class="input input-email" type="email" autocomplete="email" placeholder="Ex: Mihailescuadrian@gmail.com" value="" />
                                <span class="error-message"></span>
                                <svg class="icon icon-success hidden hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>

                                <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="field message">
                                <label for="textarea">Mesaj*</label>
                                <textarea name="message" id="textarea" class="input input-textarea" value=""></textarea>
                                <span class="error-message"></span>
                                <svg class="icon icon-success hidden hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>

                                <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                <p class="form-disclaimer">*câmpuri obligatorii.</p>
                            </div>
                            <div class="field radio-group">
                                <p class="radio-disclaimer">Cum vrei să te contactăm?</p>
                                <div class="field-radio">
                                    <input type="radio" id="option-phone" name="contact-answer" value="telefon" />
                                    <label for="option-phone">Doresc să fiu contactat prin telefon.</label>
                                </div>
                                <div class="field-radio">
                                    <input type="radio" id="option-email" name="contact-answer" value="email" />
                                    <label for="option-email">Doresc să fiu contactat prin email.</label>
                                </div>
                                <div class="field-radio">
                                    <input type="radio" id="option-either" name="contact-answer" value="oricare modalitate" checked />
                                    <label for="option-either">Îmi este indiferent.</label>
                                </div>
                            </div>
                            <div class="form-actions form-actions--contact">
                                <button type="submit" enterkeyhint="send" title="submit-form" class="form-action action-submit button button-contact-form">
                                    Trimite mesaj
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="address-schedule">
                <div class="schedule">
                    <h2 class="secondary-heading">Program</h2>
                    <div class="schedule-day">
                        <div class="day">Luni - Vineri</div>
                        <div class="time">10:00 - 20:00</div>
                    </div>
                    <div class="schedule-day">
                        <div class="day">Sâmbătă</div>
                        <div class="time">Urgențe și cazuri speciale</div>
                    </div>
                    <div class="schedule-day">
                        <div class="day">Duminică</div>
                        <div class="time">Închis</div>
                    </div>
                </div>
                <div class="address">
                    <h2 class="secondary-heading">Contact</h2>
                    <div class="address-grid">
                        <div class="addreess-info addreess-location">
                            <img class="icon-map" src="/images/icon-phone.svg" alt="Icon Telephone" decoding="async" loading="lazy" width='32' height='32' />
                            <span>
                  <a class="link-button" href="tel:0765928071" target="_blank">0765.928.071</a></span>
                        </div>
                        <div class="addreess-info address-phone">
                            <img class="icon-map" src="/images/icon-email.svg" alt="Icon email" decoding="async" loading="lazy" width='32' height='32' />
                            <span>
                  <a class="" href="mailto:contact@onyx-dentistry.ro" target="_blank">
                    contact@onyx-dentistry.ro</a>
                </span>
                        </div>
                    </div>
                </div>
                <div class="map-holder">
                    <div class="lazy-load-map" data-src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11386.80276164945!2d26.0922886!3d44.4803076!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b2038edd03bd21%3A0x759bbf091cb29cb6!2sOnyx%20Dentistry!5e0!3m2!1sen!2sro!4v1695059330043!5m2!1sen!2sro'></div>
                    <!--			  <iframe-->
                    <!--				title='Map of the location'-->
                    <!--              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11386.80276164945!2d26.0922886!3d44.4803076!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b2038edd03bd21%3A0x759bbf091cb29cb6!2sOnyx%20Dentistry!5e0!3m2!1sen!2sro!4v1695059330043!5m2!1sen!2sro"-->
                    <!--              style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"-->
                    <!--              aria-hidden="false"></iframe>-->
                </div>
            </div>
        </div>
        <div class='toasts error-toast'></div>
    </section>
    @push('scripts')
        <script src="js/contact-form.js"></script>
    @endpush
</x-layout>


