@extends('layoutdash')

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
      <h1 class="text-xl font-semibold">Add Image Gallery</h1>
      <form class="mt-6" action="{{ route('uploadingimage') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label class="block text-xs font-semibold text-gray-600 uppercase">Nama Gambar</label>
        <input type="text" name="namabarang" placeholder="Servis Mac" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required/>

        <label class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Detail Gambar</label>
        <textarea type="text" name="keterangan" placeholder="Memperbaiki Laptop Mac" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner h-32" maxlength="100"/></textarea>
        
        <label class="block mt-2 text-xs font-semibold text-gray-600 uppercase">File Gambar :</label>
        <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue-500 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-600 hover:text-white">
            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
            </svg>
            <span class="mt-2 text-base leading-normal">Select a file</span>
            <input type='file' name="filegambar" accept="image/png, image/jpg, image/jpeg" class="hidden" onchange="getFileData(this);" />
          </label>
        <p id="inputname" class="block mt-2 text-xs font-semibold text-gray-600 uppercase"></p>

        <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
          Submit
        </button>
      </form>
    </div>
  </div>
@endsection

<script>
      function getFileData(myFile){
      var file = myFile.files[0];  
      var filename = file.name;
      document.getElementById("inputname").innerHTML = filename;
      }  
</script>
