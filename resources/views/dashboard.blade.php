<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-500 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-pink-500">
                    {{ __("You're logged in!") }}
                </div>

<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Bootin Bookstore
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&amp;family=Roboto&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Roboto', sans-serif;
    }
    .logo-font {
      font-family: 'Roboto Slab', serif;
      font-weight: 900;
      letter-spacing: 0.2em;
    }
  </style>
 </head>
 <body class="bg-white text-gray-900">
  <header class="w-full border-b border-gray-200">
   <!-- Navbar removed as requested -->
  </header>
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
   <!-- Hero Section -->
   <section class="relative mt-6 flex flex-col md:flex-row items-center bg-white">
    <div class="md:w-1/2 pr-0 md:pr-12 text-left">
     <p class="text-xs text-rose-500 font-semibold uppercase tracking-widest mb-2">
      COLLECTION BOOK 2019
     </p>
     <h1 class="text-xl md:text-2xl font-serif font-semibold text-gray-900 leading-tight max-w-xs md:max-w-sm">
      40% Discount On Books
      <br/>
      By Susan Merrill
     </h1>
     <button class="mt-6 bg-rose-500 text-white text-sm font-semibold px-6 py-2 rounded shadow hover:bg-rose-600 transition">
      Shop Now
     </button>
     <div class="flex space-x-2 mt-4">
      <span class="w-3 h-3 rounded-full bg-rose-300">
      </span>
      <span class="w-3 h-3 rounded-full bg-rose-500">
      </span>
      <span class="w-3 h-3 rounded-full bg-rose-300">
      </span>
     </div>
    </div>
    <div class="md:w-1/2 mt-6 md:mt-0 flex justify-center">
     <img alt="Hand holding three books with purple, orange, and pink covers against a light background" class="w-full max-w-md object-contain" height="280" src="https://storage.googleapis.com/a1aa/image/fc863f21-0009-44c8-62ca-b0bff88ec639.jpg" width="400"/>
    </div>
   </section>
   <!-- Features Section -->
   <section class="mt-10 flex flex-col md:flex-row justify-between text-gray-700 text-xs md:text-sm font-normal">
    <div class="flex items-center space-x-3 md:w-1/3 mb-6 md:mb-0">
     <i class="fas fa-shipping-fast text-xl md:text-2xl">
     </i>
     <div>
      <p class="font-semibold text-sm md:text-base text-gray-900">
       Free Shipping
      </p>
      <p class="max-w-xs">
       Select between awide range of textbook and media.
      </p>
     </div>
    </div>
    <div class="flex items-center space-x-3 md:w-1/3 mb-6 md:mb-0">
     <i class="fas fa-truck text-xl md:text-2xl">
     </i>
     <div>
      <p class="font-semibold text-sm md:text-base text-gray-900">
       Fast Delivery
      </p>
      <p class="max-w-xs">
       Enjoy free shipping and our fast delivery service.
      </p>
     </div>
    </div>
    <div class="flex items-center space-x-3 md:w-1/3">
     <i class="fas fa-tags text-xl md:text-2xl">
     </i>
     <div>
      <p class="font-semibold text-sm md:text-base text-gray-900">
       Discounted Free
      </p>
      <p class="max-w-xs">
       Get nice discount on our top rated product every sunday.
      </p>
     </div>
    </div>
   </section>
   <!-- Search Filters -->
   <section class="mt-10 bg-gray-50 p-6 rounded-md flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
    <select aria-label="Select Category" class="flex-1 border border-gray-200 rounded px-4 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-rose-400">
     <option>
      All Category
     </option>
    </select>
    <select aria-label="Select Author" class="flex-1 border border-gray-200 rounded px-4 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-rose-400">
     <option>
      All Author
     </option>
    </select>
    <button class="bg-rose-500 text-white font-semibold px-6 py-2 rounded shadow hover:bg-rose-600 transition text-sm" type="button">
     <i class="fas fa-search mr-2">
     </i>
     Find Book
    </button>
   </section>
   <!-- Popular Book Section -->
   <section class="mt-16 mb-16">
    <h2 class="text-center text-lg md:text-xl font-semibold font-serif text-gray-900 mb-3">
     Popular Book
    </h2>
    <div class="w-14 h-[2px] bg-rose-500 mx-auto mb-10 rounded">
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
     <!-- Book 1 -->
     <article class="bg-white shadow-lg rounded-md p-6 text-center">
      <div class="relative inline-block">
       <img alt="Book cover of Hans Christian Andersen with swan illustration and a small 'Sale' label on top right" class="mx-auto mb-4 rounded-md shadow" height="260" src="https://storage.googleapis.com/a1aa/image/29f38150-5cb3-4ea0-c92b-ae80ef0d92e9.jpg" width="200"/>
       <span class="absolute top-2 right-2 bg-gray-900 text-white text-xs px-2 py-0.5 rounded">
        Sale
       </span>
      </div>
      <h3 class="text-sm font-semibold text-gray-900 mb-1">
       Cup Cake Diraes
      </h3>
      <p class="text-xs text-gray-400 mb-1">
       by Anna Hilltons
      </p>
      <div class="flex justify-center mb-2 space-x-1 text-yellow-400 text-xs">
       <i class="far fa-star">
       </i>
       <i class="far fa-star">
       </i>
       <i class="far fa-star">
       </i>
       <i class="far fa-star">
       </i>
       <i class="far fa-star">
       </i>
      </div>
      <p class="text-xs text-gray-400 line-through">
       $20.50
      </p>
      <p class="text-rose-500 font-semibold mb-4">
       $17.00
      </p>
      <button class="bg-rose-500 text-white text-xs font-semibold px-6 py-2 rounded shadow hover:bg-rose-600 transition">
       Add To Cart
      </button>
     </article>
     <!-- Book 2 -->
     <article class="bg-white shadow-lg rounded-md p-6 text-center">
      <img alt="Book cover of Broken Silence showing a woman profile side view with a blurred background" class="mx-auto mb-4 rounded-md shadow" height="260" src="https://storage.googleapis.com/a1aa/image/3e990101-67b0-412c-e26c-bc83a736787c.jpg" width="200"/>
      <h3 class="text-sm font-semibold text-gray-900 mb-1">
       Broken Silence
      </h3>
      <p class="text-xs text-gray-400 mb-1">
       by Anna Hilltons
      </p>
      <div class="flex justify-center mb-2 space-x-1 text-yellow-400 text-xs">
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="far fa-star">
       </i>
      </div>
      <p class="text-rose-500 font-semibold mb-4">
       $287.00
      </p>
      <button class="bg-rose-500 text-white text-xs font-semibold px-6 py-2 rounded shadow hover:bg-rose-600 transition">
       Add To Cart
      </button>
     </article>
     <!-- Book 3 -->
     <article class="bg-white shadow-lg rounded-md p-6 text-center">
      <img alt="Book cover of A Thousand Seeds of Joy with lotus flower and golden frogs inside a glass sphere" class="mx-auto mb-4 rounded-md shadow" height="260" src="https://storage.googleapis.com/a1aa/image/c24b5466-5800-4e23-fb2c-b01b6ba8f952.jpg" width="200"/>
      <h3 class="text-sm font-semibold text-gray-900 mb-1">
       A Thousand Seed
      </h3>
      <p class="text-xs text-gray-400 mb-1">
       by Sabela Hopter
      </p>
      <div class="flex justify-center mb-2 space-x-1 text-yellow-400 text-xs">
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
      </div>
      <p class="text-rose-500 font-semibold mb-4">
       $20.30
      </p>
      <button class="bg-rose-500 text-white text-xs font-semibold px-6 py-2 rounded shadow hover:bg-rose-600 transition">
       Add To Cart
      </button>
     </article>
     <!-- Book 4 -->
     <article class="bg-white shadow-lg rounded-md p-6 text-center">
      <img alt="Book cover of Art Fashion with colorful abstract figure and a cat" class="mx-auto mb-4 rounded-md shadow" height="260" src="https://storage.googleapis.com/a1aa/image/b287268f-d863-4ea7-fe76-10d696552054.jpg" width="200"/>
      <h3 class="text-sm font-semibold text-gray-900 mb-1">
       Cup Cake Diraes
      </h3>
      <p class="text-xs text-gray-400 mb-1">
       by Anna Hilltons
      </p>
      <div class="flex justify-center mb-2 space-x-1 text-yellow-400 text-xs">
       <i class="far fa-star">
       </i>
       <i class="far fa-star">
       </i>
       <i class="far fa-star">
       </i>
       <i class="far fa-star">
       </i>
       <i class="far fa-star">
       </i>
      </div>
      <p class="text-rose-500 font-semibold mb-4">
       $17.00
      </p>
      <button class="bg-rose-500 text-white text-xs font-semibold px-6 py-2 rounded shadow hover:bg-rose-600 transition">
       Add To Cart
      </button>
     </article>
     <!-- Book 5 -->
     <article class="bg-white shadow-lg rounded-md p-6 text-center">
      <img alt="Book cover of Inspiration Speaks with abstract face ink drawing in black and beige" class="mx-auto mb-4 rounded-md shadow" height="260" src="https://storage.googleapis.com/a1aa/image/51d185f7-599a-41c3-84c7-8f1ce981c15e.jpg" width="200"/>
      <h3 class="text-sm font-semibold text-gray-900 mb-1">
       Broken Silence
      </h3>
      <p class="text-xs text-gray-400 mb-1">
       by Anna Hilltons
      </p>
      <div class="flex justify-center mb-2 space-x-1 text-yellow-400 text-xs">
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="far fa-star">
       </i>
      </div>
      <p class="text-rose-500 font-semibold mb-4">
       $287.00
      </p>
      <button class="bg-rose-500 text-white text-xs font-semibold px-6 py-2 rounded shadow hover:bg-rose-600 transition">
       Add To Cart
      </button>
     </article>
     <!-- Book 6 -->
     <article class="bg-white shadow-lg rounded-md p-6 text-center">
      <div class="relative inline-block">
       <img alt="Book cover of Frankenstein with portrait of Frankenstein and a small 'Sale' label on top right" class="mx-auto mb-4 rounded-md shadow" height="260" src="https://storage.googleapis.com/a1aa/image/e9453bbb-63a0-4199-eb46-e9c2479b3cf4.jpg" width="200"/>
       <span class="absolute top-2 right-2 bg-gray-900 text-white text-xs px-2 py-0.5 rounded">
        Sale
       </span>
      </div>
      <h3 class="text-sm font-semibold text-gray-900 mb-1">
       A Thousand Seed
      </h3>
      <p class="text-xs text-gray-400 mb-1">
       by Sabela Hopter
      </p>
      <div class="flex justify-center mb-2 space-x-1 text-yellow-400 text-xs">
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
       <i class="fas fa-star">
       </i>
      </div>
      <p class="text-rose-500 font-semibold mb-4">
       $20.30
      </p>
      <button class="bg-rose-500 text-white text-xs font-semibold px-6 py-2 rounded shadow hover:bg-rose-600 transition">
       Add To Cart
      </button>
     </article>
    </div>
   </section>
  </main>
 </body>
</html>

            </div>
        </div>
    </div>
</x-app-layout>
