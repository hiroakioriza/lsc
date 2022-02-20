<!doctype html>
<html data-theme="dark">

<head>
    <title>LSC - Laptop Service Cirebon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <link rel="icon" href="{{ url('img/favicon.ico') }}">
</head>

<body>

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
                    <li><a href="Gallery" aria-label="Gallery" title="Gallery"
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
                                    <li><a href="Gallery" aria-label="Gallery" title="Gallery"
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

    <!-- Headtext -->
    <section class="text-gray-400 bg-gray-900 body-font">
      <div class="container px-5 py-20 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Sparepart</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Sparepart laptop dan komputer, Hardware dan Software</p>
        </div>
      </div>
    </section>

    <!-- E-list -->
    <section class="text-gray-400 bg-gray-900 body-font">
      <div class="container px-5 mx-auto">
        <div class="flex flex-wrap -m-4">
          
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full transform transition duration-500 hover:scale-110" style="cursor: pointer;" onclick="window.location='Comingsoon';">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('img/view2.jpeg') }}">
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Hardware</h3>
              <h2 class="text-white title-font text-lg font-medium">Sparepart Laptop</h2>
              <p class="mt-1">List Hardware Sparepart Laptop</p>
            </div>
          </div>
          

          <div class="lg:w-1/4 md:w-1/2 p-4 w-full transform transition duration-500 hover:scale-110" style="cursor: pointer;" onclick="window.location='Comingsoon';">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('img/bios2.png') }}">
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Software</h3>
              <h2 class="text-white title-font text-lg font-medium">(BIOS) Sparepart Laptop</h2>
              <p class="mt-1">List Bios Laptop</p>
            </div>
          </div>

          <div class="lg:w-1/4 md:w-1/2 p-4 w-full transform transition duration-500 hover:scale-110" style="cursor: pointer;" onclick="window.location='Comingsoon';">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('img/mobo.jpeg') }}">
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Hardware</h3>
              <h2 class="text-white title-font text-lg font-medium">Sparepart Komputer</h2>
              <p class="mt-1">List Sparepart Komputer</p>
            </div>
          </div>

          <div class="lg:w-1/4 md:w-1/2 p-4 w-full transform transition duration-500 hover:scale-110" style="cursor: pointer;" onclick="window.location='Comingsoon';">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('img/view3.jpeg') }}">
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Hardware</h3>
              <h2 class="text-white title-font text-lg font-medium">Lainnya</h2>
              <p class="mt-1">List Hardware Lain</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="p-44 footer bg-gray-900 text-base-content footer-center">
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
