<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome to Mamasewa</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.0/dist/cdn.min.js"></script>
</head>

<body class="h-full bg-gray-100 font-inter">
  <div x-data="{ profileOpen: false, sidebarOpen: true }" class="flex">
    <!-- Sidebar -->
    <div :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed inset-y-0 left-0 flex flex-col w-64 text-white transition-transform duration-200 ease-in-out transform bg-gradient-to-b from-indigo-600 to-purple-600">
      <div class="flex items-center justify-center h-16 bg-indigo-700">
        <span class="text-lg font-bold">Admin Panel</span>
      </div>
      <nav class="flex-1 mt-10">
        <a href="/admin" class="flex items-center px-4 py-2 text-sm font-medium hover:bg-indigo-500 {{ Request::path() == 'admin' ? 'bg-indigo-500' : '' }}">
          <i class="uil uil-estate text-xl mr-4"></i>
          Dashboard
        </a>
        <a href="/admin/produk" class="flex items-center px-4 py-2 text-sm font-medium hover:bg-indigo-500 {{ Request::path() == 'admin/produk' ? 'bg-indigo-500' : '' }}">
          <i class="uil uil-archive-alt text-xl mr-4"></i>
          Produk
        </a>
        <a href="/admin/sewa" class="flex items-center px-4 py-2 text-sm font-medium hover:bg-indigo-500 {{ Request::path() == 'admin/sewa' ? 'bg-indigo-500' : '' }}">
          <i class="uil uil-schedule text-xl mr-4"></i>
          Sewa
        </a>
        <a href="/admin/laporan" class="flex items-center px-4 py-2 text-sm font-medium hover:bg-indigo-500 {{ Request::path() == 'admin/laporan' ? 'bg-indigo-500' : '' }}">
          <i class="uil uil-clipboard-notes text-xl mr-4"></i>
          Laporan
        </a>
      </nav>
      <div class="flex-shrink-0 p-4">
        <a href="/" class="text-center flex w-full justify-center mb-4 hover:text-gray-200">Back to home?</a>
        <button @click="profileOpen = !profileOpen" class="flex items-center w-full p-2 bg-indigo-700 rounded-md hover:bg-indigo-600">
          <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          <span class="ml-3 text-sm font-medium">Ahmad Rayki Pahlevi</span>
        </button>
        <div x-show="profileOpen" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="p-2 mt-2 text-gray-700 bg-white rounded-md shadow-lg">
          <a href="#" class="block px-4 py-2 text-sm">Your Profile</a>
          <a href="#" class="block px-4 py-2 text-sm">Settings</a>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="block w-full px-4 py-2 text-sm text-left">Sign out</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>