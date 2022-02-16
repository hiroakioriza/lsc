@extends('layoutdashrep')

@section('content')

  @if ($errors->any())
      <div class="alert alert-warning px-4 py-3 relative">
        <div class="flex-1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current"> 
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>                         
            </svg> 
            <label><strong>Whoops!</strong> Input gagal.</label><br><br>
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
      </div>
  @endif

<div class="grid min-h-screen place-items-center">
    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 shadow-lg">
      <h1 class="text-xl font-semibold">Input Data Barang</h1>
      <form class="mt-6" action="{{ route('servs.update',$serv->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="KodeServis" class="block text-xs font-semibold text-gray-600 uppercase">Kode Servis</label>
        <input id="KodeServis" type="text" name="KodeServis" placeholder="0123456789" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" value="{{ $serv->KodeServis }}" readonly="readonly" required />
        <label for="NamaBarang" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Nama Barang</label>
        <input id="NamaBarang" type="text" name="NamaBarang" placeholder="Laptop" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" value="{{ $serv->NamaBarang }}"  required />
        <label for="KategoriBarang" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Kategori Barang</label>
        <select id="Kategori" type="text" name="Kategori" placeholder="Kategori Barang" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" value="{{ $serv->Kategori }}" required />
            <option disabled="disabled" selected="selected">Pilih Kategori Barang</option> 
            <option {{ $serv->Kategori == 'Komputer' ? 'selected' : '' }}>Komputer</option> 
            <option {{ $serv->Kategori == 'Laptop' ? 'selected' : '' }}>Laptop</option> 
            <option {{ $serv->Kategori == 'Lainnya'  ? 'selected': '' }}>Lainnya</option>
        </select>
        <label for="Kondisi" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Kondisi</label>
        <input id="Kondisi" type="text" name="Kondisi" placeholder="Kondisi Barang" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" value="{{ $serv->Kondisi }}"  required />
        <label for="Status" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Status</label>
        <select id="Status" type="text" name="Status" placeholder="Status Barang" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" value="{{ $serv->Status }}"  required />
            <option disabled="disabled" selected="selected">Set Status Barang</option> 
            <option {{ $serv->Status == 'Barang Masuk' ? 'selected' : '' }}>Barang Masuk</option>
            <option {{ $serv->Status == 'Menunggu Antrian' ? 'selected' : '' }}>Menunggu Antrian</option> 
            <option {{ $serv->Status == 'On Process' ? 'selected' : '' }}>On Process</option> 
            <option {{ $serv->Status == 'Gagal' ? 'selected' : '' }}>Gagal</option>
            <option {{ $serv->Status == 'Cancel' ? 'selected' : '' }}>Cancel</option>
            <option {{ $serv->Status == 'Berhasil' ? 'selected' : '' }}>Berhasil</option>
            <option {{ $serv->Status == 'Komplenan' ? 'selected' : '' }}>Komplenan</option>
        </select>
        <label for="Notes" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Notes</label>
        <textarea id="Notes" type="text" name="Notes" placeholder="Masuk Air" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner h-32" maxlength="50" required />{{ $serv->Notes }}</textarea>
        <label for="EstHarga" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Estimasi Harga</label>
        <input type="text" name="EstHarga" placeholder="400.000" class="sep-num block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" value="{{ $serv->EstHarga }}" required />
        <input type="text" id="result_input" name="EstHarga" hidden>
        <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
          Submit Update
        </button>
      </form>
    </div>
  </div>
@endsection
