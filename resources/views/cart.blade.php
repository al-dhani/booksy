<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-500 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-pink-500">
                    {{ __(" Your Cart ") }}
                </div>

<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Shopping Cart
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Inter', sans-serif;
    }
  </style>
 </head>
 <body class="bg-[#f5f5f5] min-h-screen flex items-center justify-center p-4">
  <main class="max-w-5xl w-full bg-white rounded-2xl shadow-lg flex flex-col md:flex-row overflow-hidden">
   <!-- Left side -->
   <section class="flex-1 p-8 md:p-12">
    <header class="flex justify-between items-center mb-8">
     <h1 class="font-extrabold text-2xl text-pink-600">
      Shopping Cart
     </h1>
     <span class="text-sm text-gray-500">
      3 Items
     </span>
    </header>
    <ul class="divide-y divide-gray-200">
     <!-- Item 1 -->
     <li class="flex items-center py-6">
      <img alt="Maroon cotton t-shirt folded on white background" class="w-15 h-15 object-contain rounded" height="60" src="https://storage.googleapis.com/a1aa/image/c16a14ca-8189-4b25-b936-99c38f166df9.jpg" width="60"/>
      <div class="ml-4 flex-1 min-w-0">
       <p class="text-xs text-gray-500 mb-0.5">
        Shirt
       </p>
       <p class="font-extrabold text-xs text-pink-600 truncate">
        Cotton T-shirt
       </p>
      </div>
      <div class="flex items-center border border-gray-200 rounded text-xs text-gray-400 select-none w-20 h-7 justify-between px-2">
       <button aria-label="Decrease quantity" class="cursor-not-allowed text-gray-300" disabled="">
        −
       </button>
       <input class="w-6 text-center text-xs text-gray-400 bg-transparent border-none focus:outline-none" readonly="" type="text" value="1"/>
       <button aria-label="Increase quantity" class="cursor-not-allowed text-gray-300" disabled="">
        +
       </button>
      </div>
      <span class="ml-6 font-extrabold text-xs text-pink-600">
       €44.00
      </span>
      <button aria-label="Remove item" class="ml-6 text-gray-400 hover:text-pink-600 text-xs font-extrabold">
       ×
      </button>
     </li>
     <!-- Item 2 -->
     <li class="flex items-center py-6">
      <img alt="Light gray cotton t-shirt folded on white background" class="w-15 h-15 object-contain rounded" height="60" src="https://storage.googleapis.com/a1aa/image/0974cc5f-0270-4f0a-1992-3532775d776e.jpg" width="60"/>
      <div class="ml-4 flex-1 min-w-0">
       <p class="text-xs text-gray-500 mb-0.5">
        Shirt
       </p>
       <p class="font-extrabold text-xs text-pink-600 truncate">
        Cotton T-shirt
       </p>
      </div>
      <div class="flex items-center border border-gray-200 rounded text-xs text-gray-400 select-none w-20 h-7 justify-between px-2">
       <button aria-label="Decrease quantity" class="cursor-not-allowed text-gray-300" disabled="">
        −
       </button>
       <input class="w-6 text-center text-xs text-gray-400 bg-transparent border-none focus:outline-none" readonly="" type="text" value="1"/>
       <button aria-label="Increase quantity" class="cursor-not-allowed text-gray-300" disabled="">
        +
       </button>
      </div>
      <span class="ml-6 font-extrabold text-xs text-pink-600">
       €44.00
      </span>
      <button aria-label="Remove item" class="ml-6 text-gray-400 hover:text-pink-600 text-xs font-extrabold">
       ×
      </button>
     </li>
     <!-- Item 3 -->
     <li class="flex items-center py-6">
      <img alt="Black cotton t-shirt folded on white background" class="w-15 h-15 object-contain rounded" height="60" src="https://storage.googleapis.com/a1aa/image/af2243ca-d86b-4da4-06fe-b6e4027736f0.jpg" width="60"/>
      <div class="ml-4 flex-1 min-w-0">
       <p class="text-xs text-gray-500 mb-0.5">
        Shirt
       </p>
       <p class="font-extrabold text-xs text-pink-600 truncate">
        Cotton T-shirt
       </p>
      </div>
      <div class="flex items-center border border-gray-200 rounded text-xs text-gray-400 select-none w-20 h-7 justify-between px-2">
       <button aria-label="Decrease quantity" class="cursor-not-allowed text-gray-300" disabled="">
        −
       </button>
       <input class="w-6 text-center text-xs text-gray-400 bg-transparent border-none focus:outline-none" readonly="" type="text" value="1"/>
       <button aria-label="Increase quantity" class="cursor-not-allowed text-gray-300" disabled="">
        +
       </button>
      </div>
      <span class="ml-6 font-extrabold text-xs text-pink-600">
       €44.00
      </span>
      <button aria-label="Remove item" class="ml-6 text-gray-400 hover:text-pink-600 text-xs font-extrabold">
       ×
      </button>
     </li>
    </ul>
    <button onclick="window.location='{{ route('dashboard') }}'" class="mt-8 flex items-center text-xs text-gray-600 hover:text-pink-600 font-normal" type="button">
    <i class="fas fa-arrow-left mr-2"></i>
    Back to shop
</button>

   </section>
   <!-- Right side -->
   <section class="w-full md:w-96 bg-[#f7f7f7] p-8 md:p-12 flex flex-col justify-between">
    <div>
     <h2 class="font-extrabold text-pink-600 text-lg mb-6">
      Summary
     </h2>
     <div class="flex justify-between text-xs font-extrabold text-pink-600 mb-4">
      <span>
       ITEMS 3
      </span>
      <span>
       €132.00
      </span>
     </div>
     <div class="mb-6">
      <label class="block text-xs font-extrabold text-pink-600 mb-1" for="shipping">
       SHIPPING
      </label>
      <select class="w-full text-xs text-gray-400 bg-white border border-gray-200 rounded px-3 py-2 cursor-not-allowed" disabled="" id="shipping">
       <option>
        Standard Delivery - €5.00
       </option>
      </select>
     </div>
     <div class="mb-6">
      <label class="block text-xs font-extrabold text-pink-600 mb-1" for="code">
       GIVE CODE
      </label>
      <div class="flex">
       <input class="flex-1 text-xs text-gray-400 bg-white border border-gray-200 rounded-l px-3 py-2 focus:outline-none" id="code" placeholder="Enter your code" type="text"/>
       <button aria-label="Apply code" class="bg-white border border-gray-200 border-l-0 rounded-r px-3 py-2 text-gray-400 hover:text-pink-600" type="button">
        <i class="fas fa-arrow-right">
        </i>
       </button>
      </div>
     </div>
     <div class="flex justify-between text-xs font-extrabold text-pink-600 mb-8">
      <span>
       TOTAL PRICE
      </span>
      <span>
       €137.00
      </span>
     </div>
    </div>
    <button class="w-full text-pink-600 text-xs font-extrabold py-3 rounded" style="background-color:#d9cbbf" type="button">
     CHECKOUT
    </button>
   </section>
  </main>
 </body>
</html>

                </div>
        </div>
    </div>
</x-app-layout>
