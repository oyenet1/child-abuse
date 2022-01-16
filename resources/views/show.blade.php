<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Styles -->
  @livewireStyles
  @powerGridStyles
  <title>Child Abuse</title>

  {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
  <script src="https://cdn.tailwindcss.com"></script>

  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
  {{-- chartjs --}}
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body class="antialiased  bg-cover" style="background-image: url(') ">
  <div class="w-full h-screen bg-white">
    {{-- <header>
      <nav class="shadow px-2 lg:p-0" x-data="{toggle: false}">
        <div class="flex justify-between mx-auto max-w-7xl py-3 items-center flex-wrap">
          <div class="">
            <a href="" class="img text-xl font-fira italic text-purple-500 font-semibold">
              Child Abuse Data
            </a>
          </div>
          <button class="shadow p-2 text-white hidden" @click="toggle =! toggle">
            <svg class="w-6 h-6 text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
          <ul class="list-none space-y-4 space-y-0 flex flex-row space-x-8 xl:space-x-12 2xl:space-x-16 font-normal">
            {{-- <li class="">
            <a href="/" class="nav">Home</a>
          </li> 
            <li class="">
              <a href="/login" class="border-2 border-purple-500 px-8 uppercase font-medium text-white hover:bg-purple-700 transition duration-300 rounded-full py-2 bg-purple-500">Admin</a>
            </li>
          </ul>
        </div>
      </nav>
    </header> --}}

    {{-- datas charts --}}
    
    <div class="w-full max-w-5xl p-8 shadow mx-auto my-4">
      <h1 class="font-bold text-3xl uppercase text-red-500 font-mono text-center my-3">One Child International</h1>
      <table class="w-full table max-w-7xl">
        <tbody>
          <tr class="p-2  w-full my-2">
            <td class="w-1/5 text-xl uppercase upper p-2 font-semibold">Ref No:</td>
            <td class="w-4/5 border shadow-sm border-black m-2 capitalize font-medium p-2 text-justify text-gray-500">{{ Str::random(12) . '/'.$data->date_occurred  }}</td>
          </tr>
          <tr class="p-2  w-full my-2">
            <td class="w-1/5 text-xl uppercase upper p-2 font-semibold">Name:</td>
            <td class="w-4/5 border shadow-sm border-black m-2 capitalize font-medium p-2 text-justify text-gray-500">{{ $data->name }}</td>
          </tr>
          <tr class="p-2  w-full my-2">
            <td class="w-1/5 text-xl uppercase upper p-2 font-semibold">gender</td>
            <td class="w-4/5 border shadow-sm border-black m-2 capitalize font-medium p-2 text-justify text-gray-500">{{ $data->sex }}</td>
          </tr>
          <tr class="p-2  w-full my-2">
            <td class="w-1/5 text-xl uppercase upper p-2 font-semibold">Contact Address</td>
            <td class="w-4/5 border shadow-sm border-black m-2 capitalize font-medium p-2 text-justify text-gray-500">{{ $data->lga . ', ' . $data->area->state }}</td>
          </tr>
          <tr class="p-2  w-full my-2">
            <td class="w-1/5 text-xl uppercase upper p-2 font-semibold">Type of Abuse</td>
            <td class="w-4/5 border shadow-sm border-black m-2 capitalize font-medium p-2 text-justify text-gray-500">{{ $data->type }}</td>
          </tr>
          <tr class="p-2  w-full my-2">
            <td class="w-1/5 text-xl uppercase upper p-2 font-semibold">Summary</td>
            <td class="w-4/5 border shadow-sm border-black m-2 capitalize font-normal p-2 text-justify text-gray-500">{{ $data->summary }}</td>
          </tr>
          <tr class="p-2  w-full my-2">
            <td class="w-1/5 text-xl uppercase upper p-2 font-semibold">Status</td>
            <td class="w-4/5 border shadow-sm border-black m-2 capitalize font-medium p-2 text-justify text-gray-500">{{ $data->status }}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="w-full max-w-5xl p-8 shadow mx-auto overflow-x-auto my-4">
      <h1 class="font-bold  uppercase text-black font-mono text-center">One Child International &copy {{ date('Y') }}</h1>
      <p class="text-center my-3"><a href="javascript:void(0)" onclick="window.print();" class=" rounded py-2 px-8 shadow-sm text-white bg-green-500">Print</a></p>
    </div>
  </div>

  <!-- Scripts -->
  @livewireScripts
  {{-- @powerGridScripts




  laravel charts
  {!! $chart->renderChartJsLibrary() !!}
  {!! $chart->renderJs() !!} --}}
</body>
</html>
