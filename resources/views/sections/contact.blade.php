<section class="section" id="contact" x-ref="contact" >
    <div
        x-data="contactForm()" 
        x-ref="contactInner"
        x-intersect.once="showAnimation = true"
        class="md:px-0 bg-dvlpmn-blue-dark relative flex flex-col items-center justify-around w-screen pb-12"
    >
        <div class="absolute top-0 z-0 w-full h-[11.5%] bg-white"></div>
        <div class="absolute bottom-0 z-0 w-full h-[88.5%] bg-dvlpmn-blue-dark"></div>
        <div class="relative top-4 md:w-3/5 lg:w-2/5 w-[90%] h-[content] pt-9 pb-8 mb-8 md:mb-0 bg-dvlpmn-gray-dark rounded shadow-contact">
            <h1 
                x-cloak 
                x-show="showAnimation" 
                x-transition.duration.1100ms.opacity.enter.scale.50.leave.scale.60.origin.top
                class="lg:text-4xl xl:text-5xl lg:mb-5 text-dvlpmn-blue-dark mb-6 text-3xl font-extrabold tracking-wider text-center"
            >
                <span>CONTACT</span>
            </h1>
            <h2 
                x-cloak 
                x-show="showAnimation" 
                x-transition.duration.1100ms.delay.100ms.opacity.enter.scale.50.leave.scale.60.origin.bottom
                class=" md:text-base lg:text-lg xl:text-xl 2xl:mb-10 text-dvlpmn-blue-light mb-0 text-sm font-extrabold tracking-wider text-center"
            >
                <span>CONTACT DEVELOPMAN TODAY</span>
            </h2>
            
            <form action="/contact" method="POST" x-cloak @submit.prevent="submitData">
                @csrf

                <input type="hidden" name="recaptcha" id="recaptcha" x-model="formData.recaptcha" />
                
                <div class="flex flex-col items-center mx-auto">
                    <div 
                        x-cloak 
                        x-show="showAnimation"
                        x-transition.duration.1200ms.delay.150ms.opacity.enter.scale.10.leave.scale.60.origin.right
                        class="md:mx-2 hover:border-dvlpmn-blue-light flex w-4/5 mx-4 my-5 border-b-2 border-gray-700"
                    >
                        <input type="text" name="name" x-model="formData.name" placeholder="Name" autocomplete="on" class="md:text-left focus:outline-none caret-black bg-dvlpmn-gray-dark placeholder-dvlpmn-blue-light w-full py-3 pl-5 text-center placeholder-opacity-75 border-0">
                    </div>
                    <div 
                        x-cloak 
                        x-show="showAnimation"
                        x-transition.duration.1200ms.delay.200ms.opacity.enter.scale.10.leave.scale.60.origin.right
                        class="md:mx-2 hover:border-dvlpmn-blue-light flex w-4/5 mx-4 my-5 border-b-2 border-gray-700"
                    >
                        <input type="email" name="email" x-model="formData.email" placeholder="Email" class="md:text-left focus:outline-none caret-black bg-dvlpmn-gray-dark placeholder-dvlpmn-blue-light w-full py-3 pl-5 text-center placeholder-opacity-75 border-0">
                    </div>
                    <div 
                        x-cloak 
                        x-show="showAnimation"
                        x-transition.duration.1200ms.delay.250ms.opacity.enter.scale.10.leave.scale.60.origin.right
                        class="md:mx-2 hover:border-dvlpmn-blue-light flex w-4/5 mx-4 my-5 border-b-2 border-gray-700"
                    >
                        <textarea name="message" x-model="formData.message" rows="8" cols="50" class="md:text-left caret-black bg-dvlpmn-gray-dark focus:outline-none placeholder-dvlpmn-blue-light w-full h-40 py-3 pl-5 text-center placeholder-opacity-75 border-0" placeholder="Message"></textarea>
                    </div>
                </div>
                
                <div 
                    x-cloak 
                    x-show="showAnimation" 
                    x-transition.duration.1200ms.delay.600ms.opacity.enter.scale.50.leave.scale.60.origin.bottom
                    class="relative flex justify-center px-2 mt-6"
                >
                    <button x-text="buttonLabel" @click="$refs.contactInner.scrollIntoView({behavior: 'smooth'}); hideAlert();" :disabled="loading" class="disabled:opacity-50 hover:shadow-none ripple font-orbitron md:w-auto hover:bg-dvlpmn-blue-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-dvlpmn-blue-light md:py-4 md:text-base bg-dvlpmn-blue-dark caret-transparent inline-flex items-center justify-center w-full px-24 py-2 text-sm font-bold leading-6 tracking-widest text-white uppercase transition border border-transparent rounded-md shadow-lg" aria-label="SEND">
                        SEND
                    </button>
                </div>
                
                <div class="mt-5 text-xs text-gray-400 w-[70%] text-center justify-center mx-auto">
                    This site is protected by reCAPTCHA and the Google
                    <a href="https://policies.google.com/privacy" target="_blank" class="text-blue-500">Privacy Policy</a> and
                    <a href="https://policies.google.com/terms" target="_blank" class="text-blue-500">Terms of Service</a> apply.
                </div>

                <a 
                    x-cloak 
                    x-show="showAnimation" 
                    x-transition.duration.1500ms.delay.1000ms.opacity.enter.scale.50.leave.scale.60.origin.bottom
                    href="mailto:info@developman.tech" 
                    target="_blank"
                >
                    <p class="hover:text-dvlpmn-blue-light hover:underline text-dvlpmn-blue-dark justify-center mt-6 text-lg font-bold text-center transition duration-500" >
                        info@developman.tech
                    </p>
                </a>
                      
                <div class="flex flex-col justify-center mx-auto mt-5 text-xs text-center text-blue-500">
                    <p class="text-lg font-bold">DevelopmanTech Kft.</p>
                    <p>8800 Nagykanizsa,</p>
                    <p>Munkás utca 8/D fszt. 2.</p>
                    <p>Cégjegyzékszám: 20-09-078403</p>
                    <p>Adószám: 32078952-2-20</p>
                    <p>Közösségi adószám: HU32078952</p>
                </div> 
            
            </form>
        </div>

        <div class="top-2 absolute">
                <div x-cloak 
                    x-on:click.away="show = false" 
                    x-show="responseStatus == 'success'" 
                    x-transition:enter.duration.400ms
                    x-transition:leave.duration.500ms
                >
                    <div class="alert flex flex-row items-center p-5 bg-green-200 border-b-2 border-green-300 rounded-lg shadow-lg">
                        <div class="alert-icon flex items-center justify-center flex-shrink-0 w-10 h-10 bg-green-100 border-2 border-green-500 rounded-full">
                            <span class="text-green-500">
                                <svg fill="currentColor"
                                    viewBox="0 0 20 20"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="alert-content ml-4">
                            <div class="alert-title text-lg font-semibold text-green-800">
                                <span class="font-montserrat" x-text="responseMessage"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div x-cloak 
                    x-on:click.away="show = false" 
                    x-show="responseStatus == 'error'" 
                    x-transition:enter.duration.400ms
                    x-transition:leave.duration.500ms
                >
                    <div class="alert flex flex-row items-center p-5 bg-red-200 border-b-2 border-red-300 rounded-lg shadow-lg">
                        <div class="alert-icon flex items-center justify-center flex-shrink-0 w-10 h-10 bg-red-100 border-2 border-red-500 rounded-full">
                            <span class="text-red-500">
                                <svg fill="currentColor"
                                    viewBox="0 0 20 20"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="alert-content ml-4">
                            <div class="alert-title text-lg font-semibold text-red-800">
                                <span class="font-montserrat" x-text="responseMessage"></span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

@push('scripts')
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
<script>
    
    var recaptchaToken;

    $(document).ready(function() {
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: '/contact'}).then(function(token) {
                if (token) {
                    recaptchaToken = token;
                }
            });
        });
    });
    
    function contactForm() {

        return {
            formData: {
                name: '',
                email: '',
                message: '',
            },
            showAnimation: false,
            show: false,
            loading: false,
            buttonLabel: 'SEND',
            responseStatus: '',
            responseMessage: '',

            hideAlert() {
                setTimeout(() => this.responseStatus = false, 3500);
            },

            submitData() {
                this.buttonLabel = 'SENDING...'
                this.loading = true;
                this.formData.recaptcha = recaptchaToken;

                fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(this.formData)
                })
              
                .then(response => response.json())
                .then(data => {
                    this.responseMessage = data.message;
                    this.responseStatus = data.status;

                    if (this.responseStatus == 'success') {
                        this.formData = {};
                    }
                })
                .catch((err) => {
                    console.log(err);
                    this.responseStatus = 'error';
                })
                .finally(() => {
                    this.loading = false;
                    this.buttonLabel = 'SEND';
                    this.show = true;
                    window.location.hash = "#contact";
                })
            }
        }
    }
</script>
@endpush