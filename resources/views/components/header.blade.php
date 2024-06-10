<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Markimah</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.0/dist/cdn.min.js"></script>
</head>

<body class="">
  <div class="bg-white">
    <!--
    Mobile menu

    Off-canvas menu for mobile, show/hide based on off-canvas menu state.
  -->
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
      <!--
      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
      <div class="fixed inset-0 bg-black bg-opacity-25"></div>

      <div class="fixed inset-0 z-40 flex">
        <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
        <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
          <div class="flex px-4 pb-2 pt-5">
            <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
              <span class="sr-only">Close menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

          <!-- Links -->
          <div class="mt-2">
            <div class="border-b border-gray-200">
              <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                <button id="tabs-1-tab-1" class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>
                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                <button id="tabs-1-tab-2" class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
              </div>
            </div>

            <!-- 'Women' tab panel, show/hide based on tab state. -->
            <div id="tabs-1-panel-1" class="space-y-12 px-4 pb-6 pt-10" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
              <div class="grid grid-cols-1 items-start gap-x-6 gap-y-10">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10">
                  <div>
                    <p id="mobile-featured-heading-0" class="font-medium text-gray-900">Featured</p>
                    <ul role="list" aria-labelledby="mobile-featured-heading-0" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Sleep</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Swimwear</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Underwear</a>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <p id="mobile-categories-heading" class="font-medium text-gray-900">Categories</p>
                    <ul role="list" aria-labelledby="mobile-categories-heading" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Basic Tees</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Artwork Tees</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Bottoms</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Underwear</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Accessories</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="grid grid-cols-1 gap-x-6 gap-y-10">
                  <div>
                    <p id="mobile-collection-heading" class="font-medium text-gray-900">Collection</p>
                    <ul role="list" aria-labelledby="mobile-collection-heading" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Everything</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Core</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">New Arrivals</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Sale</a>
                      </li>
                    </ul>
                  </div>

                  <div>
                    <p id="mobile-brand-heading" class="font-medium text-gray-900">Brands</p>
                    <ul role="list" aria-labelledby="mobile-brand-heading" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Full Nelson</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">My Way</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Re-Arranged</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Counterfeit</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Significant Other</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- 'Men' tab panel, show/hide based on tab state. -->
            <div id="tabs-1-panel-2" class="space-y-12 px-4 pb-6 pt-10" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
              <div class="grid grid-cols-1 items-start gap-x-6 gap-y-10">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10">
                  <div>
                    <p id="mobile-featured-heading-1" class="font-medium text-gray-900">Featured</p>
                    <ul role="list" aria-labelledby="mobile-featured-heading-1" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Casual</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Boxers</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Outdoor</a>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <p id="mobile-categories-heading" class="font-medium text-gray-900">Categories</p>
                    <ul role="list" aria-labelledby="mobile-categories-heading" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Artwork Tees</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Pants</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Accessories</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Boxers</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Basic Tees</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="grid grid-cols-1 gap-x-6 gap-y-10">
                  <div>
                    <p id="mobile-collection-heading" class="font-medium text-gray-900">Collection</p>
                    <ul role="list" aria-labelledby="mobile-collection-heading" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Everything</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Core</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">New Arrivals</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Sale</a>
                      </li>
                    </ul>
                  </div>

                  <div>
                    <p id="mobile-brand-heading" class="font-medium text-gray-900">Brands</p>
                    <ul role="list" aria-labelledby="mobile-brand-heading" class="mt-6 space-y-6">
                      <li class="flex">
                        <a href="#" class="text-gray-500">Significant Other</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">My Way</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Counterfeit</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Re-Arranged</a>
                      </li>
                      <li class="flex">
                        <a href="#" class="text-gray-500">Full Nelson</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
            </div>
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
            </div>
          </div>

          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            @if(Auth::check())
            <form method="POST" action="{{ route('logout') }}">

              @csrf

              <button type="submit" class="m-2 block p-2 font-medium text-gray-900">Sign out <span aria-hidden="true">&rarr;</span></button>

            </form>
            @else
            <div class="flow-root">
              <a href="/register" class="-m-2 block p-2 font-medium text-gray-900">Create an account</a>
            </div>
            <div class="flow-root">
              <a href="/login" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
            </div>
            @endif
          </div>

          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <!-- Currency selector -->
            <form>
              <div class="inline-block">
                <label for="mobile-currency" class="sr-only">Currency</label>
                <div class="group relative -ml-2 rounded-md border-transparent focus-within:ring-2 focus-within:ring-white">
                  <select id="mobile-currency" name="currency" class="flex items-center rounded-md border-transparent bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-gray-700 focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-800">
                    <option>IDR</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <header class="relative z-10">
      <nav aria-label="Top">
        <!-- Top navigation -->
        <div class="bg-gray-900">
          <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <!-- Currency selector -->
            <form class="hidden lg:block lg:flex-1">
              <div class="flex">
                <label for="desktop-currency" class="sr-only">Currency</label>
                <div class="group relative -ml-2 rounded-md border-transparent bg-gray-900 focus-within:ring-2 focus-within:ring-white">
                  <select id="desktop-currency" name="currency" class="flex items-center rounded-md border-transparent bg-gray-900 bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-white focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-100">
                    <option>IDR</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                    <svg class="h-5 w-5 text-gray-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
              </div>
            </form>

            <p class="flex-1 text-center text-sm font-medium text-white lg:flex-none">Get free delivery on orders over $100</p>

            <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
              @if(Auth::check())
              @if(Auth::user()->usertype === 'admin')
              <a href="/admin" class="text-sm font-medium text-white hover:text-gray-100">Dashboard</a>
              <span class="h-6 w-px bg-gray-600" aria-hidden="true"></span>
              @endif
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm font-medium text-white hover:text-gray-100">Sign out <span aria-hidden="true">&rarr;</span></button>
              </form>
              @else
              <a href="/register" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
              <span class="h-6 w-px bg-gray-600" aria-hidden="true"></span>
              <a href="/login" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
              @endif
            </div>
          </div>
        </div>

        <!-- Secondary navigation -->
        <div class="bg-white">
          <div class="border-b border-gray-200">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
              <div class="flex h-16 items-center justify-between">
                <!-- Logo (lg+) -->
                <div class="hidden lg:flex lg:items-center">
                  <a href="/">
                    <span class="sr-only">Markimah</span>
                    Markimah
                  </a>
                </div>

                <!-- Mobile menu and search (lg-) -->
                <div class="flex flex-1 items-center lg:hidden">
                  <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                  <button type="button" class="-ml-2 rounded-md bg-white p-2 text-gray-400">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                  </button>

                  <!-- Search -->
                  <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Search</span>
                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="backpack">
                      <path fill="#6563FF" d="M13,10H11a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Zm5,0a4,4,0,0,0-3-3.86V5A3,3,0,0,0,9,5V6.14A4,4,0,0,0,6,10a4,4,0,0,0-4,4v3a3,3,0,0,0,3,3H6.18A3,3,0,0,0,9,22h6a3,3,0,0,0,2.82-2H19a3,3,0,0,0,3-3V14A4,4,0,0,0,18,10ZM6,18H5a1,1,0,0,1-1-1V14a2,2,0,0,1,2-2ZM11,5a1,1,0,0,1,2,0V6H11Zm5,14a1,1,0,0,1-1,1H9a1,1,0,0,1-1-1V18a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2Zm0-4.44A3.91,3.91,0,0,0,14,14H10a3.91,3.91,0,0,0-2,.56V10a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2ZM20,17a1,1,0,0,1-1,1H18V12a2,2,0,0,1,2,2Z"></path>
                    </svg>
                  </a>
                </div>

                <!-- Logo (lg-) -->
                <a href="#" class="lg:hidden">
                  <span class="sr-only">Markimah</span>
                  Markimah
                </a>

                <div class="flex flex-1 items-center justify-end">
                  <div class="flex items-center lg:ml-8">
                    <div class="flex space-x-8">
                      <div class="flex">
                        <a href="/" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                          <span class="sr-only">Company</span>
                          <i class="uil uil-store text-2xl"></i>
                        </a>
                      </div>

                      <div class="hidden lg:flex">
                        <a href="/produk" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                          <span class="sr-only">Product</span>
                          <i class="uil uil-backpack text-2xl"></i>
                        </a>
                      </div>

                    </div>

                    <span class="mx-4 h-6 w-px bg-gray-200 lg:mx-6" aria-hidden="true"></span>

                    <div class="flow-root">
                      <a href="/return" class="group -m-2 flex items-center p-2">
                        <i class="uil uil-archive text-2xl text-gray-400"></i>
                        <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                        <span class="sr-only">Rental</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>