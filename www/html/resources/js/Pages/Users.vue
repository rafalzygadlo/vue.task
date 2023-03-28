<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
    users: Array,
});
</script>

<template>
<AppLayout title="Dashboard">
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </template>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen selection:bg-red-500 selection:text-white">
        <table class="min-w-full border divide-y divide-gray-200">
          <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
              <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">First</th>
              <th class="px-6 py-3 bg-gray-50">
              <span class="text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase">Address</span>
                </th>
              <th scope="col" class="px-6 py-4">Handle</th>
            </tr>
          </thead>
          <tbody>
         <template v-for="user in users">
            <tr class="border-b dark:border-neutral-500">
              <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
              <td class="whitespace-nowrap px-6 py-4">{{user.name}}</td>
              <td class="whitespace-nowrap px-6 py-4">Otto</td>
              <td class="whitespace-nowrap px-6 py-4">@mdo</td>
            </tr>
        </template>
    </tbody>

</table>
</div>


</AppLayout>
</template>

