 <!-- Card -->
 <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
     @switch($icon)
         @case('users')
             <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                 <x-admin.svg.user-svg />
             </div>
         @break

         @case('comment')
             <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                 <x-admin.svg.comment />
             </div>
         @break

         @case('post')
             <div class="p-3 mr-4 text-indigo-500 bg-indigo-100 rounded-full dark:text-indigo-100 dark:bg-indigo-500">
                 <x-admin.svg.post />
             </div>

             @default
         @endswitch
         <div>
             <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                 {{ $title }}
             </p>
             <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                 {{ $stat }}
             </p>
         </div>
     </div>
