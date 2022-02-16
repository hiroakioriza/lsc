@extends('layoutdashrep')

@section('content')

    <div class="p-10">
        <div class="max-w-5xl mx-auto bg-white flex flex-col rounded-2xl overflow-hidden shadow-lg ">
            <div class="flex justify-center">
                <div class="flex flex-col w-auto p-5 mx-12 card">
                    <div class="flex flex-row justify-between ">
                        <div class="brand">
                            <span
                                class="flex items-center justify-center space-x-3 transition-all duration-1000 ease-out transform text-thumeza-500">
                                <img class="w-56 h-28" src="{{ asset('img/logo/logo.png') }}">
                            </span>
                        </div>
                        <div class="flex flex-col w-full mx-auto">
                            <div class="flex flex-row">
                                <h1 class="text-2xl">Kode Servis # <small>{{ $serv->KodeServis }}</small></h1>
                            </div>

                            <div class="flex flex-row justify-between mt-3">
                                <div>
                                    Barang Masuk Tanggal : <b>{{ $serv->created_at->format('d M Y H:i') }}</b>
                                </div>
                                <div>||</div>
                                <div>
                                    Tanggal Update : <b>{{ $serv->updated_at->format('d M Y H:i') }}</b>
                                </div>
                            </div>

                            <div class="flex flex-row justify-between mt-3">
                                <div>
                                    <strong>LAPTOP SERVICE CIREBON</strong>
                                    <p>Bumi Cirebon Adipura Jl. Lestari 1, Jl. Pamengkang Raya No.29, Pamengkang, Kec.
                                        Mundu, Kota Cirebon, Jawa Barat 45173</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-4 border-t-2 border-gray-200 "></div>

                    <div class="flex justify-between mt-3">
                        <div class="flex flex-col ">
                            <h1 class="text-2xl">Nama Barang :</h1>
                            <p>
                            <h1 class="text-2xl"><strong>{{ $serv->NamaBarang }}</strong></h1><br>
                            </p>
                            <h1 class="text-2xl">Kategori Barang :</h1>
                            <p>
                            <h1 class="text-2xl"><strong>{{ $serv->Kategori }}</strong></h1><br>
                            </p>
                            <h1 class="text-2xl">Kondisi :</h1>
                            <p>
                            <h1 class="text-2xl"><strong>{{ $serv->Kondisi }}</strong></h1><br>
                            </p>
                            <h1 class="text-2xl">Status :</h1>
                            <p>
                            <h1 class="text-2xl"><strong>
                                    @switch($serv->Status)
                                        @case('Barang Masuk')
                                            <span class="bg-gray-700 text-white text-xs px-2 py-1 rounded">
                                                Barang Masuk
                                            </span>
                                        @break
                                        @case('Menunggu Antrian')
                                            <span class="bg-lime-300 text-white text-xs px-2 py-1 rounded">
                                                Menunggu Antrian
                                            </span>
                                        @break
                                        @case('On Process')
                                            <span class="bg-green-500 text-white text-xs px-2 py-1 rounded">
                                                Dalam Pengerjaan
                                            </span>
                                        @break
                                        @case('Gagal')
                                            <span class="bg-red-500 text-white text-xs px-2 py-1 rounded">
                                                Gagal
                                            </span>
                                        @break
                                        @case('Cancel')
                                            <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">
                                                Cancel
                                            </span>
                                        @break
                                        @case('Berhasil')
                                            <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded">
                                                Solved
                                            </span>
                                        @break
                                        @case('Komplenan')
                                            <span class="bg-fuchsia-700 text-white text-xs px-2 py-1 rounded">
                                                Komplen
                                            </span>
                                        @break
                                        @default
                                    @endswitch
                                </strong></h1><br>
                            </p>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-2xl">Notes :</h1>
                            <p>
                            <h1 class="text-sm whitespace-pre-wrap break-words"><strong>{{ $serv->Notes }}</strong></h1>
                            <br>
                            </p>
                            <h1 class="text-2xl">Estimasi Biaya :</h1>
                            <p>
                            <h1 class="text-2xl"><strong>@currency( $serv->EstHarga )</strong></h1><br>
                            </p>
                            <p>
                            <h1 class="text-2xl">Tanda Terima :</h1>
                            </p>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <p class="text-xs text-gray-400">( Nama Penerima )</p>
                        </div>
                        <div class="flex flex-col pr-4">
                            <div class="visible-print text-center">
                                <h1>Scan this QrCode</h1>

                                {!! QrCode::size(300)->generate("laptopservicecirebon.com/kodeservice?kd=$serv->KodeServis") !!}
                                <h1>laptopservicecirebon.com/Customer</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
