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
                    <li><a href="Customer" aria-label="Customer" title="Customer"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Customer</a>
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
                                    <li><a href="Customer" aria-label="Customer" title="Customer"
                                            class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Customer</a>
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

    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12" data-aos="fade-up" data-aos-duration="350">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Cek Servis</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Cek Status Barang Servisan Anda Disini!</p>
            </div>
            <form action="{{ route('kod.searchout') }}" method="GET">
                <div
                    class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 items-end sm:space-x-4 sm:space-y-0 space-y-4" data-aos="fade-up" data-aos-duration="550">
                    <div class="relative sm:mb-0 flex-grow w-full">
                        <label for="Kd lbl" class="leading-7 text-sm text-gray-400">Kode Servis</label>
                        <input type="number" id="kd" name="kd"
                            class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button type="sumbit"
                        class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Cek</button>
                </div>
            </form>
        </div>
    </section>

    @if (@isset($servs))
    
        
    <div class="flex items-center justify-center bg-gray-900">
      <div class="col-span-12">
        <div class="overflow-auto lg:overflow-visible ">
          <table class="table text-gray-400 border-separate space-y-6 text-sm table-auto">
            <thead class="bg-gray-800 text-gray-500">
                    <tr>
                        <th class="py-3 px-6 text-left" width="20px">No</th>
                        <th class="py-3 px-6 text-left">Kode Servis</th>
                        <th class="py-3 px-6 text-center">Nama Barang</th>
                        <th class="py-3 px-6 text-center">Status</th>
                        <th class="py-3 px-6 text-center">Estimasi Harga</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($servs) > 0)
                        @foreach ($servs as $servisan)
                            <tr class="bg-gray-800">
                                <td class="p-3">{{ $loop->iteration }}</td>
                                <td class="p-3 text-center">{{ $servisan->KodeServis }}</td>
                                <td class="p-3 text-center">{{ $servisan->NamaBarang }}</td>
                                <td class="p-3 text-center">@switch($servisan->Status)
                                    @case("Barang Masuk")
                                    <span class="bg-gray-700 text-white text-xs px-2 py-1 rounded">
                                        Barang Masuk
                                    </span>
                                    @break
                                  @case("Menunggu Antrian")
                                    <span class="bg-lime-300 text-white text-xs px-2 py-1 rounded">
                                        Menunggu Antrian
                                    </span>
                                  @break  
                                  @case("On Process")
                                    <span class="bg-green-500 text-white text-xs px-2 py-1 rounded">
                                       Dalam Pengerjaan
                                    </span>
                                    @break
                                  @case("Gagal")
                                    <span class="bg-red-500 text-white text-xs px-2 py-1 rounded">
                                        Gagal
                                    </span>
                                  @break
                                  @case("Cancel")
                                    <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">
                                        Cancel
                                    </span>
                                  @break
                                  @case("Berhasil")
                                    <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded">
                                        Solved
                                    </span>
                                    @break
                                     @case("Komplenan")
                                <span class="bg-fuchsia-700 text-white text-xs px-2 py-1 rounded">
                                    Komplen
                                </span>
                                @break
                                        @default
                                    @endswitch
                                </td>
                                <td class="p-3 text-center">@currency( $servisan->EstHarga )</td>
                                <td class="p-3">
                                    <div class="flex item-center justify-center">

                                        <div
                                            class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer">
                                            <a href="{{ route('kodser.show', [
                                                    'KodeServis' => $servisan->KodeServis,
                                                ]) }}" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </a>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else

                        <tr>
                            <div class="text-center">Kode Tidak Ditemukan , Mohon Cek Kembali</div>
                        </tr>
                        
                    @endif
                </tbody>
            </table>
        </div>
      </div>
    </div>
    @endif

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
