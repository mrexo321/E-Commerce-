@extends('layouts.main')


@section('container')


<!-- component -->
<form method="post" action="/login">
@csrf

<div class="loginWrapper flex flex-row justify-center p-4">
    <div class="textLogin text-center">
        <div class="textContent flex flex-col">
            <span class="text-black font-semibold text-3xl mb-6">LOGIN</span>
            <span class="text-gray-500 font-semibold text-md">Dont Have an Account? <a class="underline" href="/register">Sign up here.</a> </span>
        </div>
    </div>
</div>

<div class="container mx-auto max-w-xs my-8">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="username" id="username" type="text" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
      {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-8" type="submit">
        Sign In
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800 mb-16" href="#">
        Forgot Password?
      </a>
    </div>
</div>

</form>

@endsection
