<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome to Mamasewa</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.0/dist/cdn.min.js"></script>
</head>

<body class="h-full bg-gray-100 font-inter">
  <div x-data="{ profileOpen: false, sidebarOpen: true }" class="flex min-h-full">
    <!-- Sidebar -->
    <div :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed inset-y-0 left-0 flex flex-col w-64 text-white transition-transform duration-200 ease-in-out transform bg-gradient-to-b from-indigo-600 to-purple-600">
      <div class="flex items-center justify-center h-16 bg-indigo-700">
        <span class="text-lg font-bold">Admin Panel</span>
      </div>
      <nav class="flex-1 mt-10">
        <a href="/admin" class="flex items-center px-4 py-2 text-sm font-medium hover:bg-indigo-500 {{ Request::path() == 'admin' ? 'bg-indigo-500' : '' }}">
          <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5h6a2 2 0 012 2v12a2 2 0 01-2 2h-6m-6 0H5a2 2 0 01-2-2V9a2 2 0 012-2h6m0 0l2-2m0 0l-2-2"></path></svg>
          Dashboard
        </a>
        <a href="/admin/produk" class="flex items-center px-4 py-2 text-sm font-medium hover:bg-indigo-500 {{ Request::path() == 'admin/produk' ? 'bg-indigo-500' : '' }}">
          <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7a1 1 0 011-1h16a1 1 0 011 1v10a1 1 0 01-1 1H4a1 1 0 01-1-1V7z"></path></svg>
          Produk
        </a>
        <a href="/admin/sewa" class="flex items-center px-4 py-2 text-sm font-medium hover:bg-indigo-500 {{ Request::path() == 'admin/sewa' ? 'bg-indigo-500' : '' }}">
          <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v16a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm8 4v4m0 4v.01M4 8h16M4 16h16"></path></svg>
          Sewa
        </a>
        <a href="/admin/laporan" class="flex items-center px-4 py-2 text-sm font-medium hover:bg-indigo-500 {{ Request::path() == 'admin/laporan' ? 'bg-indigo-500' : '' }}">
          <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l-3 3m3-3l-3-3m3 3h14m0 0l3 3m-3-3l3-3"></path></svg>
          Laporan
        </a>
      </nav>
      <div class="flex-shrink-0 p-4">
        <button @click="profileOpen = !profileOpen" class="flex items-center w-full p-2 bg-indigo-700 rounded-md hover:bg-indigo-600">
          <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          <span class="ml-3 text-sm font-medium">Tom Cook</span>
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
