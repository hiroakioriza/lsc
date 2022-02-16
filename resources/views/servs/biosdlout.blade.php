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
                            <form action="{{ route('dashboard.bioscreate') }}">
                                <button
                                    class="btn btn-primary w-full rounded bg-blue-600 border-none focus:outline-none focus:ring-0">Post Bios
                                </button>
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
                                <a href="{{ route('dashboard.report') }}" class="block py-2 px-4 hover:bg-gray-800 rounded">
                                    Rekap Data
                                </a>
                                <a href="{{ route('dashboard.bios') }}" class="block py-2 px-4  bg-gray-800 text-white hover:text-white rounded">
                                    Bios File Manager
                                </a>
                                <a href="#" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
                                    Instruction
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
                    <h1 class="text-2xl font-semibold pt-2 pb-6">Bios File Manager</h1>
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
                                <th class="py-3 px-6 text-center">Nama Bios</th>
                                <th class="py-3 px-6 text-left">Kategori Bios</th>
                                <th class="py-3 px-6 text-center">Keterangan Bios</th>
                                <th class="py-3 px-6 text-center">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm">
                            @foreach ($servs as $key => $biosfile)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <th scope="row" class="py-3 px-6 text-left" width="20px">{{ ++$key }}</th>
                                    <td class="py-3 px-6 text-center">{{ $biosfile->namabios }}</td>
                                    <td class="py-3 px-6 text-left">{{ $biosfile->kategoribios }}</td>
                                    <td class="py-3 px-6 text-center">{{ $biosfile->keteranganbios }}</td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">

                                            <div
                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer">
                                                <a href="{{ route('download.bios', $biosfile->id) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1"
                                                            d="M15.608,6.262h-2.338v0.935h2.338c0.516,0,0.934,0.418,0.934,0.935v8.879c0,0.517-0.418,0.935-0.934,0.935H4.392c-0.516,0-0.935-0.418-0.935-0.935V8.131c0-0.516,0.419-0.935,0.935-0.935h2.336V6.262H4.392c-1.032,0-1.869,0.837-1.869,1.869v8.879c0,1.031,0.837,1.869,1.869,1.869h11.216c1.031,0,1.869-0.838,1.869-1.869V8.131C17.478,7.099,16.64,6.262,15.608,6.262z M9.513,11.973c0.017,0.082,0.047,0.162,0.109,0.226c0.104,0.106,0.243,0.143,0.378,0.126c0.135,0.017,0.274-0.02,0.377-0.126c0.064-0.065,0.097-0.147,0.115-0.231l1.708-1.751c0.178-0.183,0.178-0.479,0-0.662c-0.178-0.182-0.467-0.182-0.645,0l-1.101,1.129V1.588c0-0.258-0.204-0.467-0.456-0.467c-0.252,0-0.456,0.209-0.456,0.467v9.094L8.443,9.553c-0.178-0.182-0.467-0.182-0.645,0c-0.178,0.184-0.178,0.479,0,0.662L9.513,11.973z" />
                                                    </svg>
                                                </a>
                                            </div>

                                            <form action="{{ route('delete.bios', $biosfile->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div
                                                    class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer">
                                                    <a href="#" onclick="this.closest('form').submit();">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>

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
