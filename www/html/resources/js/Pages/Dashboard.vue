<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SectionTitle from '@/Components/SectionTitle.vue';


const usersClick = () => {
    
};

</script>
<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <SectionTitle >title</SectionTitle>
                    <SectionTitle>
                        <template #title>Update Password</template>
                        <template #description>Ensure your account is using a long, random password to stay secure.</template>
                    </SectionTitle>
                    <InertiaLink  href="/vacation/requests/create">dfgdg</InertiaLink>
                    <PrimaryButton type="href" href="aaaa" class="ml-3" @href="usersClick">Users</PrimaryButton>
                    <PrimaryButton class="ml-3">Employess</PrimaryButton>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
