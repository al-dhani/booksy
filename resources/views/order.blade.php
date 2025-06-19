<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-500 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-pink-500">
                    {{ __("Your Orders") }}
                </div>

<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Orders
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   /* Custom green dot for Delivered status */
    .dot-green {
      height: 6px;
      width: 6px;
      background-color: #34d399;
      border-radius: 50%;
      display: inline-block;
      margin-right: 6px;
      position: relative;
      top: 1px;
    }
  </style>
 </head>
 <body class="bg-white font-sans p-4 sm:p-6 md:p-10">
  <main class="max-w-5xl mx-auto">
   <!-- Order 1 -->
   <section class="border border-gray-200 rounded-xl p-6 mb-8 flex flex-col md:flex-row md:justify-between md:items-start gap-6">
    <div class="flex flex-col justify-between w-full md:w-1/2">
     <div>
      <p class="text-xs font-semibold text-green-400 flex items-center mb-4">
       <span class="dot-green">
       </span>
       Delivered
      </p>
      <div class="grid grid-cols-2 gap-x-6 gap-y-3 text-xs text-gray-500">
       <div>
        <p class="font-semibold text-gray-700">
         Order Number
        </p>
        <p class="font-bold text-gray-900">
         #2562015893
        </p>
       </div>
       <div>
        <p class="font-semibold text-gray-400">
         Delivery Date
        </p>
        <p class="font-bold text-gray-900">
         Jan 26, 2022
        </p>
       </div>
       <div>
        <p class="font-semibold text-gray-400">
         Order Date
        </p>
        <p class="font-bold text-gray-900">
         Jan 18, 2022
        </p>
       </div>
       <div>
        <p class="font-semibold text-gray-400">
         Payment Method
        </p>
        <p class="font-bold text-gray-900">
         COD
        </p>
       </div>
       <div>
        <p class="font-semibold text-gray-400">
         Ship To
        </p>
        <p class="font-bold text-gray-900">
         Rajkot, Gujrat, India
        </p>
       </div>
      </div>
     </div>
     <hr class="my-4 border-gray-200"/>
     <div class="flex justify-between items-center text-xs text-gray-400">
      <p>
       Total Amount
       <span class="font-bold text-gray-900">
        : $48.00
       </span>
      </p>
      <a class="flex items-center text-indigo-700 font-semibold hover:underline" href="#">
       <i class="fas fa-download mr-1">
       </i>
       Download Invoice
      </a>
     </div>
    </div>
    <div class="w-full md:w-1/2 flex flex-col gap-6">
     <!-- Item 1 -->
     <div class="flex gap-4 items-center">
      <img alt="Wooden chopping board with two knives on a dark surface" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/53adeb51-5932-4331-a6c9-22a2c6390c2b.jpg" width="80"/>
      <div class="flex-1 flex flex-col">
       <div class="flex justify-between items-start">
        <h2 class="font-semibold text-gray-900 text-sm">
         Wooden Chopping Board
        </h2>
        <p class="font-bold text-gray-900 text-sm">
         $12.00
        </p>
       </div>
       <p class="text-xs text-gray-600 mt-1">
        Qty
        <span class="font-semibold">
         :
        </span>
        1
       </p>
       <p class="text-xs text-gray-600">
        Size
        <span class="font-semibold">
         :
        </span>
        20 × 10 inch
       </p>
       <a class="text-indigo-700 text-xs font-semibold mt-1 hover:underline" href="#">
        Buy it again
       </a>
      </div>
     </div>
     <!-- Item 2 -->
     <div class="flex gap-4 items-center">
      <img alt="White coffee mug with a logo on a wooden table" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/b742a6d2-2dc7-4275-fbfa-63c67a14cd37.jpg" width="80"/>
      <div class="flex-1 flex flex-col">
       <div class="flex justify-between items-start">
        <h2 class="font-semibold text-gray-900 text-sm">
         Whiter Coffee Mug
        </h2>
        <p class="font-bold text-gray-900 text-sm">
         $36.00
        </p>
       </div>
       <p class="text-xs text-gray-600 mt-1">
        Qty
        <span class="font-semibold">
         :
        </span>
        1
       </p>
       <p class="text-xs text-gray-600">
        Size
        <span class="font-semibold">
         :
        </span>
        Regular
       </p>
       <a class="text-indigo-700 text-xs font-semibold mt-1 hover:underline" href="#">
        Buy it again
       </a>
      </div>
     </div>
    </div>
   </section>
   <!-- Order 2 -->
   <section class="border border-gray-200 rounded-xl p-6 flex flex-col md:flex-row md:justify-between md:items-start gap-6">
    <div class="flex flex-col justify-between w-full md:w-1/2">
     <div>
      <p class="text-xs font-semibold text-green-400 flex items-center mb-4">
       <span class="dot-green">
       </span>
       Delivered
      </p>
      <div class="grid grid-cols-2 gap-x-6 gap-y-3 text-xs text-gray-500">
       <div>
        <p class="font-semibold text-gray-700">
         Order Number
        </p>
        <p class="font-bold text-gray-900">
         #2562015893
        </p>
       </div>
       <div>
        <p class="font-semibold text-gray-400">
         Delivery Date
        </p>
        <p class="font-bold text-gray-900">
         Jan 26, 2022
        </p>
       </div>
       <div>
        <p class="font-semibold text-gray-400">
         Order Date
        </p>
        <p class="font-bold text-gray-900">
         Jan 18, 2022
        </p>
       </div>
       <div>
        <p class="font-semibold text-gray-400">
         Payment Method
        </p>
        <p class="font-bold text-gray-900">
         COD
        </p>
       </div>
       <div>
        <p class="font-semibold text-gray-400">
         Ship To
        </p>
        <p class="font-bold text-gray-900">
         Rajkot, Gujrat, India
        </p>
       </div>
      </div>
     </div>
     <hr class="my-4 border-gray-200"/>
     <div class="flex justify-between items-center text-xs text-gray-400">
      <p>
       Total Amount
       <span class="font-bold text-gray-900">
        : $170.00
       </span>
      </p>
      <a class="flex items-center text-indigo-700 font-semibold hover:underline" href="#">
       <i class="fas fa-download mr-1">
       </i>
       Download Invoice
      </a>
     </div>
    </div>
    <div class="w-full md:w-1/2 flex flex-col gap-6">
     <!-- Item 1 -->
     <div class="flex gap-4 items-center">
      <img alt="Sun screen and face serum bottles with green leaves on white background" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/8b785c70-4d29-46c8-38c0-90dd4c22d845.jpg" width="80"/>
      <div class="flex-1 flex flex-col">
       <div class="flex justify-between items-start">
        <h2 class="font-semibold text-gray-900 text-sm">
         Sun Screen &amp; Face Serum
        </h2>
        <p class="font-bold text-gray-900 text-sm">
         $94.00
        </p>
       </div>
       <p class="text-xs text-gray-600 mt-1">
        Qty
        <span class="font-semibold">
         :
        </span>
        1
       </p>
       <p class="text-xs text-gray-600">
        Size
        <span class="font-semibold">
         :
        </span>
        150 ml
       </p>
       <a class="text-indigo-700 text-xs font-semibold mt-1 hover:underline" href="#">
        Buy it again
       </a>
      </div>
     </div>
     <!-- Item 2 -->
     <div class="flex gap-4 items-center">
      <img alt="Hair care products with brushes and jars on a wooden surface" class="w-20 h-20 object-cover rounded" height="80" src="https://storage.googleapis.com/a1aa/image/5dd16d0d-484f-4ac4-e3b2-046d74f0e439.jpg" width="80"/>
      <div class="flex-1 flex flex-col">
       <div class="flex justify-between items-start">
        <h2 class="font-semibold text-gray-900 text-sm">
         Hair Care Product
        </h2>
        <p class="font-bold text-gray-900 text-sm">
         $76.00
        </p>
       </div>
       <p class="text-xs text-gray-600 mt-1">
        Qty
        <span class="font-semibold">
         :
        </span>
        1
       </p>
       <p class="text-xs text-gray-600">
        Size
        <span class="font-semibold">
         :
        </span>
        500 ml
       </p>
       <a class="text-indigo-700 text-xs font-semibold mt-1 hover:underline" href="#">
        Buy it again
       </a>
      </div>
     </div>
    </div>
   </section>
  </main>
 </body>
</html>

            </div>
        </div>
    </div>
</x-app-layout>
