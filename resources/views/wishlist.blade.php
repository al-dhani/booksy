<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Wishlist') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("List of my Favorite product!") }}
                </div>

<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   /* Custom font family to match the screenshot's style */
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Inter&amp;display=swap" rel="stylesheet"/>
 </head>
 <body class="p-6 text-gray-900 bg-white sm:p-10">
  <main class="mx-auto max-w-7xl">
   <section class="grid grid-cols-2 sm:grid-cols-4 gap-x-6 gap-y-8">

    <!-- Card 1 -->
    <article class="flex flex-col p-4 bg-white shadow-xl rounded-xl">
        <img alt="Round white table with wooden legs" class="object-contain mx-auto mb-3 w-28 h-28" height="120" loading="lazy" src="https://storage.googleapis.com/a1aa/image/a7a68686-eebe-417d-3940-61803a86f331.jpg" width="120"/>
        <h2 class="text-xs text-gray-900 font-semibold leading-tight mb-0.5">
          Meja Tomu / Samping
        </h2>
        <p class="mb-1 text-xs text-gray-600 truncate">
          Minimalist Meja...
        </p>
        <p class="mb-1 text-xs font-semibold text-orange-600">
          Rp.3.829.000
        </p>
        <div class="flex items-center mb-1 space-x-1">
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
        </div>
        <p class="text-[9px] text-gray-400 mb-3">
          Kota Sidoarjo
        </p>
        <div class="flex items-center justify-between mt-auto">
          <button aria-label="Favorite" class="text-sm text-red-500">
            <i class="fas fa-heart"></i>
          </button>
          <button class="px-4 py-1 text-xs font-semibold text-white transition bg-orange-500 rounded-full hover:bg-orange-600">
            Buy
          </button>
        </div>
      </article>

    <!-- Card 2 -->
    <article class="flex flex-col p-4 bg-white shadow-xl rounded-xl">
        <img alt="Minimalist white napkins stacked" class="object-contain mx-auto mb-3 w-28 h-28" height="120" loading="lazy" src="https://storage.googleapis.com/a1aa/image/c4028770-0ed0-4011-5500-e050fc635872.jpg" width="120"/>
        <h2 class="text-xs text-gray-900 font-semibold leading-tight mb-0.5">
          Meja Tamu / Samping
        </h2>
        <p class="mb-1 text-xs text-gray-600 truncate">
          Minimalist Meja...
        </p>
        <p class="mb-1 text-xs font-semibold text-orange-600">
          Rp. 48.500
        </p>
        <div class="flex items-center mb-1 space-x-1">
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
        </div>
        <p class="text-[9px] text-gray-400 mb-3">
          Kota Jakarta Selatan
        </p>
        <div class="flex items-center justify-between mt-auto">
          <button aria-label="Favorite" class="text-sm text-red-500">
            <i class="fas fa-heart"></i>
          </button>
          <button class="px-4 py-1 text-xs font-semibold text-white transition bg-orange-500 rounded-full hover:bg-orange-600">
            Buy
          </button>
        </div>
      </article>

    <!-- Card 3 -->
    <article class="flex flex-col p-4 bg-white shadow-xl rounded-xl">
        <img alt="Transparent basket with wooden handle" class="object-contain mx-auto mb-3 w-28 h-28" src="https://storage.googleapis.com/a1aa/image/f3ce2927-5d12-4bf5-cd85-7ab198ccfe07.jpg" width="120" height="120" loading="lazy" />
        <h2 class="text-xs text-gray-900 font-semibold leading-tight mb-0.5">RISATOR Kenanjang</h2>
        <p class="mb-1 text-xs text-gray-600 truncate">serbaguna basket...</p>
        <p class="mb-1 text-xs font-semibold text-orange-600">Rp. 164.000</p>
        <div class="flex items-center mb-1 space-x-1">
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
        </div>
        <p class="text-[9px] text-gray-400 mb-3">Kota Sidoarjo</p>
        <div class="flex items-center justify-between mt-auto">
          <button aria-label="Favorite" class="text-sm text-red-500"><i class="fas fa-heart"></i></button>
          <button class="px-4 py-1 text-xs font-semibold text-white transition bg-orange-500 rounded-full hover:bg-orange-600">Buy</button>
        </div>
      </article>
    <!-- Card 4 -->
    <article class="flex flex-col p-4 bg-white shadow-xl rounded-xl">
        <img alt="Three small succulent plants in white pots" class="object-contain mx-auto mb-3 w-28 h-28" src="https://storage.googleapis.com/a1aa/image/f8bbdf7e-f051-4fb1-adc2-e65488278f37.jpg" width="120" height="120" loading="lazy" />
        <h2 class="text-xs text-gray-900 font-semibold leading-tight mb-0.5">Tanaman tiruan sukulen</h2>
        <p class="mb-1 text-xs text-gray-600 truncate">dlm pot putih bunga...</p>
        <p class="mb-1 text-xs font-semibold text-orange-600">Rp. 3.829.000</p>
        <div class="flex items-center mb-1 space-x-1">
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
          <i class="fas fa-star text-yellow-400 text-[10px]"></i>
        </div>
        <p class="text-[9px] text-gray-400 mb-3">Kota Sidoarjo</p>
        <div class="flex items-center justify-between mt-auto">
          <button aria-label="Favorite" class="text-sm text-red-500"><i class="fas fa-heart"></i></button>
          <button class="px-4 py-1 text-xs font-semibold text-white transition bg-orange-500 rounded-full hover:bg-orange-600">Buy</button>
        </div>
      </article>

    <!-- Card 5 -->
    <article class="flex flex-col p-4 bg-white shadow-xl rounded-xl">
    <img alt="Black and white monochrome tote bag" class="object-contain mx-auto mb-3 w-28 h-28" src="https://storage.googleapis.com/a1aa/image/4ad4258e-ea33-46e7-6697-827adad0609d.jpg" width="120" height="120" loading="lazy" />
    <h2 class="text-xs text-gray-900 font-semibold leading-tight mb-0.5">Tote Bag Monochrome</h2>
    <p class="mb-1 text-xs text-gray-600 truncate">Cantik</p>
    <p class="mb-1 text-xs font-semibold text-orange-600">Rp. 200.000</p>
    <div class="flex items-center mb-1 space-x-1">
      <i class="fas fa-star text-yellow-400 text-[10px]"></i>
      <i class="fas fa-star text-yellow-400 text-[10px]"></i>
      <i class="fas fa-star text-yellow-400 text-[10px]"></i>
      <i class="fas fa-star text-yellow-400 text-[10px]"></i>
      <i class="fas fa-star text-yellow-400 text-[10px]"></i>
    </div>
    <p class="text-[9px] text-gray-400 mb-3">Kota Sidoarjo</p>
    <div class="flex items-center justify-between mt-auto">
      <button aria-label="Favorite" class="text-sm text-red-500"><i class="fas fa-heart"></i></button>
      <button class="px-4 py-1 text-xs font-semibold text-white transition bg-orange-500 rounded-full hover:bg-orange-600">Buy</button>
    </div>
  </article>
    <!-- Card 6 -->
    <article class="flex flex-col p-4 bg-white shadow-sm rounded-xl">
     <img alt="Artificial green grass in black pot" class="object-contain mx-auto mb-3 w-28 h-28" height="120" loading="lazy" src="https://storage.googleapis.com/a1aa/image/3ce0bc69-6481-44f7-5f67-05b336fd68dc.jpg" width="120"/>
     <h2 class="text-xs text-gray-900 font-semibold leading-tight mb-0.5">
      Rumput Tiruan Artificial
     </h2>
     <p class="mb-1 text-xs text-gray-600 truncate">
      Hijau
     </p>
     <p class="mb-1 text-xs font-semibold text-orange-600">
      Rp. 25.000
     </p>
     <div class="flex items-center mb-1 space-x-1">
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
     </div>
     <p class="text-[9px] text-gray-400 mb-3">
      Kota Sidoarjo
     </p>
     <div class="flex items-center justify-between mt-auto">
      <button aria-label="Favorite" class="text-sm text-red-500">
       <i class="fas fa-heart">
       </i>
      </button>
      <button class="px-4 py-1 text-xs font-semibold text-white transition bg-orange-500 rounded-full hover:bg-orange-600">
       Buy
      </button>
     </div>
    </article>
    <!-- Card 7 -->
    <article class="flex flex-col p-4 bg-white shadow-xl rounded-xl">
     <img alt="Beige IKEA shopping bag" class="object-contain mx-auto mb-3 w-28 h-28" height="120" loading="lazy" src="https://storage.googleapis.com/a1aa/image/7d2f871a-4efc-40cc-9a51-ca42301d2fae.jpg" width="120"/>
     <h2 class="text-xs text-gray-900 font-semibold leading-tight mb-0.5">
      Tas Belanja IKEA Kuning
     </h2>
     <p class="mb-1 text-xs text-gray-600 truncate">
      Coklat Mott
     </p>
     <p class="mb-1 text-xs font-semibold text-orange-600">
      Rp. 100.000
     </p>
     <div class="flex items-center mb-1 space-x-1">
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
     </div>
     <p class="text-[9px] text-gray-400 mb-3">
      Kota Sidoarjo
     </p>
     <div class="flex items-center justify-between mt-auto">
      <button aria-label="Favorite" class="text-sm text-red-500">
       <i class="fas fa-heart">
       </i>
      </button>
      <button class="px-4 py-1 text-xs font-semibold text-white transition bg-orange-500 rounded-full hover:bg-orange-600">
       Buy
      </button>
     </div>
    </article>
    <!-- Card 8 -->
    <article class="flex flex-col p-4 bg-white shadow-xl rounded-xl">
     <img alt="Green and white IKEA bowl with lid" class="object-contain mx-auto mb-3 w-28 h-28" height="120" loading="lazy" src="https://storage.googleapis.com/a1aa/image/dc49aee8-0ce6-4dc2-3736-3a729182382b.jpg" width="120"/>
     <h2 class="text-xs text-gray-900 font-semibold leading-tight mb-0.5">
      Green Bowl IKEA Original
     </h2>
     <p class="mb-1 text-xs text-gray-600 truncate">
      Japan
     </p>
     <p class="mb-1 text-xs font-semibold text-orange-600">
      Rp. 150.000
     </p>
     <div class="flex items-center mb-1 space-x-1">
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
      <i class="fas fa-star text-yellow-400 text-[10px]">
      </i>
     </div>
     <p class="text-[9px] text-gray-400 mb-3">
      Kota Sidoarjo
     </p>
     <div class="flex items-center justify-between mt-auto">
      <button aria-label="Favorite" class="text-sm text-red-500">
       <i class="fas fa-heart">
       </i>
      </button>
      <button class="px-4 py-1 text-xs font-semibold text-white transition bg-orange-500 rounded-full hover:bg-orange-600">
       Buy
      </button>
     </div>
    </article>
   </section>
  </main>
 </body>
</html>


            </div>
        </div>
    </div>
</x-app-layout>
