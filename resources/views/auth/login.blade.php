@extends('layoutdash')

@section('content')
<!-- component -->

<div class="min-h-screen bg-gray-900 py-6 flex flex-col justify-center relative overflow-hidden sm:py-12">
    @if ($message = Session::get('succes'))
          <div class="alert alert-success w-1/2 max-w-md mx-auto">
              <p>{{ $message }}</p>
          </div>
          @endif
    <span class="border text-4xl text-yellow-800 px-6 pt-10 pb-8 bg-white w-1/2 max-w-md mx-auto rounded-t-md sm:px-10">Sign in</span>
<div class="border relative px-4 pt-7 pb-8 bg-white shadow-xl w-1/2 max-w-md mx-auto sm:px-10 rounded-b-md">
    <form method="POST" action="{{ route('login.custom') }}">
        @csrf
        <label for="" class="block">Username</label>
        <input type="text" id="email" name="email" class="border w-full h-10 px-3 mb-5 rounded-md" placeholder="Username or Email" required>
        <label for="" class="block">Password</label>
        <input type="password" id="password" name="password" class="border w-full h-10 px-3 mb-5 rounded-md" placeholder="password" required>
                <div class="flex items-start">
                    <div class="flex items-start">
                        <div class="flex items-center">
                            <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="bg-gray-50 border border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="">
                        </div>
                            <div class="text-sm ml-3">
                                <label for="remember" class="font-medium text-gray-900">Remember me</label>
                            </div>
                        </div>
                    </div>
      <button class="mt-5 bg-green-500 hover:bg-blue-700 shadow-xl text-white uppercase text-sm font-semibold px-14 py-3 rounded">Login</button>
    </form>
</div>
</div>

@endsection