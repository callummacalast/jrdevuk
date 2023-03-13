<x-admin-layout>
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Dashboard
        </h2>
        <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <x-admin.card-stat :stat="$user_count" title="Total Users" icon="users" />
            <x-admin.card-stat :stat="$user_count" title="Total Posts" icon="post" />
            <x-admin.card-stat :stat="$user_count" title="Total Comments" icon="comment" />
            <x-admin.card-stat :stat="$user_count" title="Something" icon="comment" />
       
        </div>
      <x-admin.table :headers="$headers" :users="$users" />


    </div>
</x-admin-layout>
