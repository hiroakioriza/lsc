@extends('layoutdashrep')

@section('content')
    <div class="flex relative" x-data="{navOpen: false}">
        <!-- NAV -->
        <nav class="absolute md:relative w-64 transform -translate-x-full md:translate-x-0 h-screen overflow-y-scroll bg-black transition-all duration-300"
            :class="{'-translate-x-full': !navOpen}">
            <div class="flex flex-col justify-between h-full">
                <div class="p-4">
                    <!-- LOGO -->
                    <a class="flex items-center text-white space-x-4" href="{{ route('dashboard') }}">
                        <svg class="w-7 h-7 bg-indigo-600 rounded-lg p-1" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.927,5.828h-4.41l-1.929-1.961c-0.078-0.079-0.186-0.125-0.297-0.125H4.159c-0.229,0-0.417,0.188-0.417,0.417v1.669H2.073c-0.229,0-0.417,0.188-0.417,0.417v9.596c0,0.229,0.188,0.417,0.417,0.417h15.854c0.229,0,0.417-0.188,0.417-0.417V6.245C18.344,6.016,18.156,5.828,17.927,5.828 M4.577,4.577h6.539l1.231,1.251h-7.77V4.577z M17.51,15.424H2.491V6.663H17.51V15.424z">
                            </path>
                        </svg>
                        <span class="text-2xl font-bold">LSC Dashboard</span>
                    </a>

                    <!-- SEARCH BAR -->
                    <div class="border-gray-700 py-5 text-white border-b rounded">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <form action="{{ route('kod.search') }}" method="GET">
                                <input type="text" name="query"
                                    class="w-full py-2 rounded pl-10 bg-gray-800 border-none focus:outline-none focus:ring-0"
                                    placeholder="Search">
                            </form>
                        </div>
                        <!-- COMPOSE -->
                    </div>
                    <div class="border-gray-700 py-5 text-white border-b rounded">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-5">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.303,4.742l-1.454-1.455c-0.171-0.171-0.475-0.171-0.646,0l-3.061,3.064H2.019c-0.251,0-0.457,0.205-0.457,0.456v9.578c0,0.251,0.206,0.456,0.457,0.456h13.683c0.252,0,0.457-0.205,0.457-0.456V7.533l2.144-2.146C18.481,5.208,18.483,4.917,18.303,4.742 M15.258,15.929H2.476V7.263h9.754L9.695,9.792c-0.057,0.057-0.101,0.13-0.119,0.212L9.18,11.36h-3.98c-0.251,0-0.457,0.205-0.457,0.456c0,0.253,0.205,0.456,0.457,0.456h4.336c0.023,0,0.899,0.02,1.498-0.127c0.312-0.077,0.55-0.137,0.55-0.137c0.08-0.018,0.155-0.059,0.212-0.118l3.463-3.443V15.929z M11.241,11.156l-1.078,0.267l0.267-1.076l6.097-6.091l0.808,0.808L11.241,11.156z">
                                    </path>
                                </svg>
                            </div>
                            <form action="{{ route('dashboard.create') }}">
                                <button
                                    class="btn btn-primary w-full rounded bg-blue-600 border-none focus:outline-none focus:ring-0">Create
                                    New</button>
                            </form>
                        </div>
                        <!-- SEARCH RESULT -->
                    </div>

                    <!-- NAV LINKS -->
                    <div class="py-4 text-gray-400 space-y-1">
                        <!-- BASIC LINK -->
                        <a href="{{ route('dashboard') }}"
                            class="block py-2.5 px-4 flex items-center space-x-2 hover:bg-gray-800 hover:text-white rounded">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                        <!-- DROPDOWN LINK -->
                        <div class="block" x-data="{open: true}">
                            <div @click="open = !open"
                                class="flex items-center justify-between hover:bg-gray-800 hover:text-white cursor-pointer py-2.5 px-4 rounded">
                                <div class="flex items-center space-x-2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                    <span>Data</span>
                                </div>
                                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7">
                                    </path>
                                </svg>
                                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                            <div x-show="open"
                                class="text-sm border-l-2 border-gray-800 mx-6 my-2.5 px-2.5 flex flex-col gap-y-1">
                                <a href="{{ route('dashboard.report') }}"
                                    class="block py-2 px-4 bg-gray-800 hover:bg-gray-800 text-white hover:text-white rounded">
                                    Rekap Data
                                </a>
                                <a href="{{ route('dashboard.bios') }}" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
                                    Bios File Manager
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PROFILE -->
                <div class="text-gray-200 border-gray-800 rounded flex items-center justify-between p-2">
                    <div class="flex items-center space-x-2">
                        <!-- AVATAR IMAGE BY FIRST LETTER OF NAME -->
                        <img src="https://ui-avatars.com/api/?name=LSC&size=128&background=ff4433&color=fff"
                            class="w-7 w-7 rounded-full" alt="Profile">
                        <h1>{{ Auth::user()->name }}</h1>
                    </div>
                    <a onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" href="#"
                        class="hover:bg-gray-800 hover:text-white p-2 rounded">
                        <form id="logoutForm" action="{{ route('signout') }}" method="GET"></form>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        </form>
                    </a>
                </div>

            </div>
        </nav>
        <!-- END OF NAV -->

        <!-- PAGE CONTENT -->
        <main class="flex-1 h-screen overflow-y-scroll overflow-x-hidden">
            <div class="md:hidden justify-between items-center bg-black text-white flex">
                <h1 class="text-2xl font-bold px-4">LSC</h1>
                <button @click="navOpen = !navOpen" class="btn p-4 focus:outline-none hover:bg-gray-800">
                    <svg class="w-6 h-6 fill-current" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                        </path>
                    </svg>
                </button>
            </div>
            <section class="max-w-7xl mx-auto py-4 px-5">
                <div class="flex justify-between items-center border-b border-gray-300">
                    <h1 class="text-2xl font-semibold pt-2 pb-6">Rekap Data</h1>
                </div>
                
                <!-- Date Picker -->
                <div class="my-2">
                    <form action="{{ route('rekap.data') }}" method="GET" target="_blank">
                        <label for="datepicker" class="font-bold mt-3 mb-1 text-gray-700 block">Select Date</label>
                        <div class="flex items-center rounded-md mt-3 animate__animated animate__fadeInLeft">
                            <input type="date" class="input input-bordered focus:outline-none w-52 rounded-md border-gray-300 bg-white" name="start_date" required>
                            <div class="inline-block px-2 h-full">to</div>
                            <input type="date" class="input input-bordered focus:outline-none w-52 rounded-md border-gray-300 bg-white" name="end_date" required>
                            <div class="inline-block px-2 h-full"></div>
                            <button class="btn btn-primary w-20 rounded bg-blue-600 border-none focus:outline-none focus:ring-0" type="submit" style="cursor: pointer;">Rekap</button>
                        </div>
                    </form>
                </div>

                @if ($message = Session::get('succes'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <!-- TABLE -->
                <div class="bg-white shadow rounded-sm my-2.5 overflow-x-auto animate__animated animate__fadeInUp">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left" width="20px">No</th>
                                <th class="py-3 px-6 text-center">Tanggal</th>
                                <th class="py-3 px-6 text-left">Kode Servis</th>
                                <th class="py-3 px-6 text-center">Nama Barang</th>
                                <th class="py-3 px-6 text-center">Kategori Barang</th>
                                <th class="py-3 px-6 text-center">Kondisi</th>
                                <th class="py-3 px-6 text-center">Status</th>
                                
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm">
                            @foreach ($servs as $key => $servisan)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <th scope="row" class="py-3 px-6 text-left" width="20px">{{ ++$key }}</th>
                                    <td class="py-3 px-6 text-center">{{ $servisan->created_at }}</td>
                                    <td class="py-3 px-6 text-left">{{ $servisan->KodeServis }}</td>
                                    <td class="py-3 px-6 text-center">{{ $servisan->NamaBarang }}</td>
                                    <td class="py-3 px-6 text-center">{{ $servisan->Kategori }}</td>
                                    <td class="py-3 px-6 text-center">{{ $servisan->Kondisi }}</td>
                                    <td class="py-3 px-6 text-center">
                                        @switch($servisan->Status)
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
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {!! $servs->links() !!}
                </div>
                <!-- END OF TABLE -->

            </section>
            <!-- END OF PAGE CONTENT -->
        </main>
    </div>

@endsection
