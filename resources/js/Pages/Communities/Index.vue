<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Pagination from "@/Components/Pagination.vue";

defineProps({
    communities: Object,
});
</script>

<template lang="">
    <Head title="Community" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                All Communities
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-5 text-right">
                    <Link
                        href="communities/create"
                        class="tracking-widest text-green-900 hover:text-gray-400"
                        >Create</Link
                    >
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table class="table-auto w-full text-left">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="community in communities.data"
                                    :key="community.id"
                                >
                                    <td>
                                        <Link
                                            :href="
                                                route(
                                                    'frontend.community.show',
                                                    community.slug
                                                )
                                            "
                                        >
                                            {{ community.name }}
                                        </Link>
                                    </td>
                                    <td>{{ community.description }}</td>
                                    <td class="flex gap-4">
                                        <Link
                                            :href="
                                                route(
                                                    'communities.edit',
                                                    community.slug
                                                )
                                            "
                                            class=""
                                            >edit</Link
                                        >
                                        <Link
                                            :href="
                                                route(
                                                    'communities.destroy',
                                                    community.slug
                                                )
                                            "
                                            method="delete"
                                            as="button"
                                            type="button"
                                            class="text-red-400"
                                            >delete</Link
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="m-2">
                        <Pagination :links="communities.links" />
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
