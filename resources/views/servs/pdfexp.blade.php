@extends('layoutdash')

@section('content')
    <div class="flex relative justify-center" x-data="{navOpen: false}">
                <!-- TABLE -->
                  
                <div class="bg-white shadow rounded-sm my-2.5 overflow-x-auto animate__animated animate__fadeInDown">
                    <span class="flex items-center justify-center space-x-3 transition-all duration-1000 ease-out transform text-thumeza-500 py-2">
                        <img class="w-56 h-32" src="{{ asset('img/logo/logo.png') }}">
                    </span>
                    <div class="flex flex-row justify-center py-5">
                        <div class="py-2">
                            <p align="center" class="text-2xl"></b>REKAP DATA</b></p>
                            <p align="center" class="text-lg py-2">Total Pendapatan </b>@currency($sum_servs)</b></p>
                        </div>
                    </div>
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left" width="20px">No</th>
                                <th class="py-3 px-6 text-center">Tanggal</th>
                                <th class="py-3 px-6 text-left">Kode Servis</th>
                                <th class="py-3 px-6 text-center">Nama Barang</th>
                                <th class="py-3 px-6 text-center">Kategori Barang</th>
                                <th class="py-3 px-6 text-center">Status</th>
                                <th class="py-3 px-6 text-center">Pendapatan</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm">
                            @foreach ($servs as $key => $servisan)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <th scope="row" class="py-3 px-6 text-left" width="20px">{{ ++$key }}</th>
                                    <td class="py-3 px-6 text-center">{{ $servisan->updated_at }}</td>
                                    <td class="py-3 px-6 text-left">{{ $servisan->KodeServis }}</td>
                                    <td class="py-3 px-6 text-center">{{ $servisan->NamaBarang }}</td>
                                    <td class="py-3 px-6 text-center">{{ $servisan->Kategori }}</td>
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
                                    <td class="py-3 px-6 text-center">@currency($servisan->EstHarga)</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- END OF TABLE -->
    </div>

@endsection
