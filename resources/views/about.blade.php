<!doctype html>
<html data-theme="dark">

<head>
    <title>LSC - Laptop Service Cirebon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <link rel="icon" href="{{ url('img/favicon.ico') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        //Slider Script
        var cont = 0;
    
        function loopSlider() {
          var xx = setInterval(function() {
            switch (cont) {
              case 0: {
                $("#slider-1").fadeOut(400);
                $("#slider-2").delay(400).fadeIn(400);
                break;
              }
              case 1: {
                $("#slider-2").fadeOut(400);
                $("#slider-3").delay(400).fadeIn(400);
                break;
              }
              case 2: {
                $("#slider-3").fadeOut(400);
                $("#slider-1").delay(400).fadeIn(400);
                break;
              }
            }
            if (cont++ > 3) cont = 0
          }, 4000);
    
        }
    
        function reinitLoop(time) {
          clearInterval(xx);
          setTimeout(loopSlider(), time);
        }
    
        $(window).ready(function() {
          $("#slider-2").hide();
          $("#slider-3").hide();
          loopSlider();
        });
      </script>
</head>

<body>
    <script>
        AOS.init();
      </script>

    <!-- Header -->
    <div class="bg-gray-900 z-20">
        <div class="px-1 py-6 mx-auto lg:py-3 sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-3">
            <div class="relative flex items-center justify-between lg:justify-center lg:space-x-16">
                <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li><a href="/" aria-label="Home" title="Home"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Home</a>
                    </li>
                    <li><a href="About" aria-label="About" title="About"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">About us</a>
                    </li>
                </ul>
                <a href="/" aria-label="LSC" title="LSC" class="inline-flex items-center">
                    <img class="h-14 w-24" src="{{ asset('img/logo/logo.png') }}" />
                </a>
                <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li><a href="Sparepart" aria-label="Sparepart" title="Sparepart"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Sparepart</a>
                    </li>
                    <li><a href="{{ route('Gallery') }}" aria-label="Gallery" title="Gallery"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Gallery</a>
                    </li>
                </ul>

                <!-- Mobile menu -->
                <div class="lg:hidden z-20">
                    <button aria-label="Open Menu" title="Open Menu"
                        class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline mobile-menu-button">
                        <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                            <path fill="currentColor"
                                d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                            <path fill="currentColor"
                                d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                        </svg>
                    </button>


                    <div class="absolute top-0 left-0 w-full lg:hidden hidden mobile-menu">
                        <div class="p-5 bg-white border rounded shadow-sm">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <a href="/" aria-label="LSC" title="LSC" class="inline-flex items-center">
                                        <img class="h-12 w-20" src="{{ asset('img/logo/logo.png') }}" />
                                    </a>
                                </div>
                                <div>
                                    <button aria-label="Close Menu" title="Close Menu"
                                        class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline close-menu">
                                        <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <nav>
                                <ul class="space-y-4">
                                    <li><a href="/" aria-label="Home" title="Home"
                                            class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Home</a>
                                    </li>
                                    <li><a href="About" aria-label="About" title="About"
                                            class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">About us</a>
                                    </li>
                                    <li><a href="Sparepart" aria-label="Sparepart" title="Sparepart"
                                            class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Sparepart</a>
                                    </li>
                                    <li><a href="{{ route('Gallery') }}" aria-label="Gallery" title="Gallery"
                                            class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Gallery</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Slideshow -->
  <div class="sliderAx h-auto -z-0 max-h-96">
    <div id="slider-1" class="relative mx-auto">
      <div class="bg-cover bg-center h-auto text-white py-36 px-10 object-fill" style="background-image: url({{ asset('img/view2.jpeg') }})">
        <div class="md:w-1/2">
          <p class="font-bold text-sm uppercase">Services</p>
          <p class="text-3xl font-bold">Memperbaiki Kerusakan</p>
          <p class="text-2xl mb-10 leading-none">MacBook dan Laptop</p>
        </div>
      </div> <!-- container -->
      <br>
    </div>

    <div id="slider-2" class="relative mx-auto">
      <div class="bg-cover bg-top h-auto text-white py-36 px-10 object-fill" style="background-image: url({{ asset('img/view4.png') }})">
        <div class="md:w-1/2">
          <p class="font-bold text-sm uppercase">Recovery</p>
          <p class="text-3xl font-bold">Recovery Data</p>
          <p class="text-2xl mb-10 leading-none">Data Dalam HDD</p>
        </div>
      </div> <!-- container -->
      <br>
    </div>

    <div id="slider-3" class="relative mx-auto">
      <div class="bg-cover bg-top h-auto text-white py-36 px-10 object-fill" style="background-image: url({{ asset('img/view6.png') }})">
        <div class="md:w-1/2">
          <p class="font-bold text-sm uppercase">Re-Installation</p>
          <p class="text-3xl font-bold">Installasi Ulang OS</p>
          <p class="text-2xl mb-10 leading-none">Install Ulang Windows dan Mac Os</p>
        </div>
      </div> <!-- container -->
      <br>
    </div>

  </div>
  <!-- End Slideshow -->

  <!-- About Us -->
  <section class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center" data-aos="fade-up">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 md:mb-0 mb-10">
        <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/logo/logo.png') }}">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">About Us
        </h1>
        <p class="mb-8 leading-relaxed">Berdiri Sejak 2015 dengan Motto : Kami akan selalu berikan Harga dan Kualitas yang terbaik untuk para pelanggan jasa kami.
          <b><i>"Kepuasan Anda adalah Kenyamanan bagi Kami"</i></b>, Terimakasih atas Kepercayaan Anda.
          Sukses Selalu
        </p>
      </div>
    </div>
  </section>
  <!-- End About Us -->

  <!-- Services Information -->
  <section class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-12 mx-auto flex flex-wrap">
      <div class="flex flex-col text-center w-full mb-20">
        <div class="grid justify-items-center py-3" data-aos="fade-up">
          <a href="/" aria-label="LSC" title="LSC" class="inline-flex items-center">
            <img class="h-24 w-24" src="{{ asset('img/checklist.png') }}" />
          </a>
        </div>
        <h2 class="text-xs text-indigo-400 tracking-widest font-medium title-font mb-1" data-aos="fade-up">Laptop Service Cirebon</h2>
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-white" data-aos="fade-up">Kelebihan Reparasi di Laptop Service Cirebon</h1>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg h-full bg-gray-800 bg-opacity-60 p-8 flex-col" data-aos="fade-up">
            <div class="inline-flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-blue-500 text-white flex-shrink-0" data-aos="fade-up">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
              </div>
              <h2 class="text-white text-lg title-font font-medium">Analisa Kerusakan</h2>
            </div>
            <div class="flex-grow" data-aos="fade-up">
              <p class="leading-relaxed text-base">Proses Analisa kerusakan langsung kita tangani dengan sebaik mungkin</p>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg h-full bg-gray-800 bg-opacity-60 p-8 flex-col" data-aos="fade-up">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-blue-500 text-white flex-shrink-0" data-aos="fade-up">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
              </div>
              <h2 class="text-white text-lg title-font font-medium">Bergaransi</h2>
            </div>
            <div class="flex-grow" data-aos="fade-up">
              <p class="leading-relaxed text-base">Service Bergaransi dengan kerusakan yang sama</p>
              </a>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg h-full bg-gray-800 bg-opacity-60 p-8 flex-col" data-aos="fade-up">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-blue-500 text-white flex-shrink-0" data-aos="fade-up">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
                </svg>
              </div>
              <h2 class="text-white text-lg title-font font-medium">Transparansi</h2>
            </div>
            <div class="flex-grow" data-aos="fade-up">
              <p class="leading-relaxed text-base">Kerusakan yang di sebabkan oleh komponen atau non komponen akan kita jelaskan</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Services Information -->

  <!-- Partners -->
  <section class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="text-center mb-20" data-aos="fade-up">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-white mb-4">Our Partners</h1>
        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-400 text-opacity-80">LSC Mempunyai Partner Dalam Berbisnis</p>
        <div class="flex mt-6 justify-center">
          <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
        </div>
      </div>
      <div class="flex items-center justify-center flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-9">
        <div class="p-4 md:w-1/3 flex flex-col text-center items-center" data-aos="fade-up">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-5 flex-shrink-0">
            <img src="{{ asset('img/TLC.png') }}" />
          </div>
          <div class="flex-grow">
            <h2 class="text-white text-lg title-font font-medium mb-3">TLC</h2>
            <p class="leading-relaxed text-base">Tergabung Dalam TLC (Teknisi Laptop Ciayumajakuning)</p>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex flex-col text-center items-center" data-aos="fade-up">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-5 flex-shrink-0">
            <img src="{{ asset('img/APKC.png') }}" />
          </div>
          <div class="flex-grow">
            <h2 class="text-white text-lg title-font font-medium mb-3">APKC</h2>
            <p class="leading-relaxed text-base">Tergabung Dalam APKC (Asosiasi Pedagang Komputer Ciayumajakuning)</p>
          </div>
        </div>
  </section>


  <!-- Address and Contact -->
  <section class="text-gray-400 bg-gray-900 body-font relative">
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap" data-aos="fade-up">
      <div class="lg:w-2/3 md:w-1/2 bg-gray-900 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <iframe width="100%" height="100%" title="map" class="absolute inset-0" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.059338529237!2d108.56235351497737!3d-6.762619568010248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1d9053fecf0b%3A0x7063a5cd0c7b5fea!2sLaptop%20Service%20Cirebon!5e0!3m2!1sen!2sid!4v1642673860642!5m2!1sen!2sid" style="filter: grayscale(1) contrast(1.2) opacity(0.16);"></iframe>
        <div class="bg-gray-900 relative flex flex-wrap py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-white tracking-widest text-xs">ADDRESS</h2>
            <p class="mt-1">Bumi Cirebon Adipura Jl. Lestari 1, Jl. Pamengkang Raya No.29, Pamengkang, Kec. Mundu, Kota Cirebon, Jawa Barat 45173</p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-white tracking-widest text-xs">EMAIL</h2>
            <a class="text-indigo-400 leading-relaxed">laptopservicecirebon@gmail.com</a>
            <h2 class="title-font font-semibold text-white tracking-widest text-xs mt-4">PHONE</h2>
            <p class="leading-relaxed">Phone (0231)8306701 / WA +6282128414008</p>
          </div>
        </div>
      </div>
      
      <!-- Form Input -->
        <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0" data-aos="fade-up">
          <h2 class="text-white text-lg mb-1 font-medium title-font">Contact With Us</h2>
          <p class="leading-relaxed mb-5">Kamu bisa mengirim pesan melalui Email , Silahkan isi form Disini :</p>
          <form action="https://formspree.io/f/myyokbpe" method="POST">
          <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
            <input type="email" id="email" name="_replyto" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <label for="message" class="leading-7 text-sm text-gray-400">Message</label>
            <textarea id="message" name="message" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
          <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Kirim</button>
          <p class="text-xs text-gray-400 text-opacity-90 mt-3">*Not Charge , is free</p>
        </div>
      </form>

    </div>
  </section>
  <!-- End Address and Contact -->



  <!-- Footer -->
  <footer class="p-10 footer bg-gray-900 text-base-content footer-center">
    <div>
      <img class="h-20 w-32" src="{{ asset('img/logo/logo.png') }}" />
      <p class="font-bold">Laptop Service Cirebon
        <br>Solution Repair your device
        <br>(0231)8306701
      </p>
      <p>Copyright © 2022 - All right reserved</p>
    </div>
    <div>
      <div class="grid grid-flow-col gap-4">
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
          </svg>
        </a>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
          </svg>
        </a>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
          </svg>
        </a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

    <!-- Header Script Dropdown -->
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });

        const btn2 = document.querySelector("button.close-menu")

        btn2.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        })
    </script>
</body>

</html>
