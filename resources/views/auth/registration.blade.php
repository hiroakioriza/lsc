@extends('layoutdashrep')

@section('content')

<!-- component -->

<div class="min-h-screen bg-gray-900 py-6 flex flex-col justify-center relative overflow-hidden sm:py-12">
    @if ($message = Session::get('succes'))
          <div class="alert alert-success w-1/2 max-w-md mx-auto">
              <p>{{ $message }}</p>
          </div>
          @endif
    <span class="border text-4xl text-yellow-800 px-6 pt-10 pb-8 bg-white w-1/2 max-w-md mx-auto rounded-t-md sm:px-10">Registration Admin</span>
<div class="border relative px-4 pt-7 pb-8 bg-white shadow-xl w-1/2 max-w-md mx-auto sm:px-10 rounded-b-md">
    <form method="POST" action="{{ route('register.custom') }}">
        @csrf

        <label for="" class="block">Email</label>
        <input type="text" id="email" name="email" class="border w-full h-10 px-3 mb-5 rounded-md" placeholder="Email" required>
        @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif

        <label for="" class="block">Name</label>
        <input type="text" id="name" name="name" class="border w-full h-10 px-3 mb-5 rounded-md" placeholder="Name" required>
        @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif

        <label for="" class="block">Password</label>
        <input type="password" id="password" name="password" class="border w-full h-10 px-3 mb-5 rounded-md" placeholder="password" required>
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif

      <button type="submit" class="mt-5 bg-green-500 hover:bg-blue-700 shadow-xl text-white uppercase text-sm font-semibold px-14 py-3 rounded">Sign Up</button>
    </form>
</div>
</div>

@endsection