<header class="bg-white">
@vite('resources/css/app.css')
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <div class="relative">
        <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
         <a href="/products">Product</a>
          
        </button>

        <!--
          'Product' flyout menu, show/hide based on flyout menu state.

          Entering: "transition ease-out duration-200"
            From: "opacity-0 translate-y-1"
            To: "opacity-100 translate-y-0"
          Leaving: "transition ease-in duration-150"
            From: "opacity-100 translate-y-0"
            To: "opacity-0 translate-y-1"
        -->
        

      <a href="/about" class="text-sm font-semibold leading-6 text-gray-900">About</a>
      <a href="/contact" class="text-sm font-semibold leading-6 text-gray-900">Contact</a>
      <a href="/pricing" class="text-sm font-semibold leading-6 text-gray-900">Pricing</a>
    </div>
    @guest
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="/login" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <button class="bg-black p-2 rounded"><a href="/signup" class="text-sm font-semibold leading-6 text-white">Sign Up</a></button>
    </div>
    @endguest
    @auth
      <form action="/logout" method="post">
      @csrf
      <button class="bg-red-700 rounded p-3 text-white">Logout</button>
</form>
    @endauth
    
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="lg:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-10"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
        </a>
            <a href="/about" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">About</a>
            <a href="/contact" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact</a>
            <a href="/pricing" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Pricing</a>
          </div>
          @guest
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="/login" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <button class="bg-black p-2 rounded"><a href="/signup" class="text-sm font-semibold leading-6 text-white">Sign Up</a></button>
    </div>
    @endguest
    @auth
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <button class="bg-red p-2 rounded"><a href="/logout" class="text-sm font-semibold leading-6 text-white">Logout</a></button>
    </div>
    @endauth
        </div>
      </div>
    </div>
  </div>
</header>
