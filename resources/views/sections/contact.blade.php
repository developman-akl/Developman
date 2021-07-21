<!-- This is an example component -->
<section x-data="contactForm()" x-ref="contact" id="contact" class="md:px-0 relative flex flex-col items-center justify-between w-screen pb-24 bg-dvlpmn-blue-dark">
    <div class="absolute top-0 z-0 w-full h-[15%] bg-white"></div>
    <div class="absolute bottom-0 z-0 w-full h-[85%] bg-dvlpmn-blue-dark"></div>
    <div class="relative top-10 md:w-3/5 lg:w-2/5 w-[90%] h-[content] pt-16 pb-8 mb-8 md:mb-0 bg-dvlpmn-gray-dark rounded" style="box-shadow: 8px 5px 10px #00000029;">
        <h1 class="sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl mb-4 text-xl font-extrabold tracking-wider text-center text-dvlpmn-blue-dark">
            <span>CONTACT</span>
        </h1>
        <h2 class="sm:text-sm md:text-base lg:text-lg xl:text-xl mb-0 2xl:mb-12 text-xl font-extrabold tracking-wider text-center text-dvlpmn-blue-light">
            <span>CONTACT DEVELOPMAN TODAY</span>
        </h2>
        
        <form action="/contact" method="POST" x-cloak @submit.prevent="submitData">
            @csrf
            
            <div class="flex flex-col items-center mx-auto">
                <div class="md:mx-2 hover:border-dvlpmn-blue-light flex mx-4 my-8 w-4/5 border-b-2 border-gray-700">
                    <input type="text" name="name" x-model="formData.name" placeholder="Name" autocomplete="on" class="text-center md:text-left focus:outline-none caret-black bg-dvlpmn-gray-dark w-full py-3 pl-5 border-0 placeholder-dvlpmn-blue-light placeholder-opacity-75">
                </div>
                <div class="md:mx-2 hover:border-dvlpmn-blue-light flex mx-4 my-8 w-4/5 border-b-2 border-gray-700">
                    <input type="email" name="email" x-model="formData.email" placeholder="Email" class="text-center md:text-left focus:outline-none caret-black bg-dvlpmn-gray-dark w-full py-3 pl-5 border-0 placeholder-dvlpmn-blue-light placeholder-opacity-75">
                </div>
                <div class="md:mx-2 hover:border-dvlpmn-blue-light flex mx-4 my-8 w-4/5 border-b-2 border-gray-700">
                    <textarea name="message" x-model="formData.message" rows="10" cols="50" class="text-center md:text-left caret-black bg-dvlpmn-gray-dark w-full focus:outline-none h-40 py-3 pl-5 placeholder-dvlpmn-blue-light placeholder-opacity-75 border-0" placeholder="Message"></textarea>
                </div>
            </div>
            
            <div class="relative flex justify-center px-2 mt-6">
                <button x-text="buttonLabel" @click="$refs.contact.scrollIntoView(); hideAlert();" :disabled="loading" class="disabled:opacity-50 hover:shadow-none shadow-lg transition ripple font-orbitron md:w-auto hover:bg-dvlpmn-blue-light focus:outline-none focus:ring-2 tracking-widest focus:ring-offset-2 focus:ring-dvlpmn-blue-light inline-flex items-center uppercase justify-center w-full md:py-4 md:text-base px-24 py-2 text-sm font-bold leading-6 text-white bg-dvlpmn-blue-dark border border-transparent rounded-md caret-transparent">
                    SEND
                </button>
            </div>

         
        </form>
    </div>

    <div class="absolute mt-2">
            <div 
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

            <div
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
    
</section>

<style>
    button:disabled {
      cursor: not-allowed;
      opacity: 0.5;
    }
</style>

<script>
    function contactForm() {
        return {
            formData: {
                name: '',
                email: '',
                message: ''
            },
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