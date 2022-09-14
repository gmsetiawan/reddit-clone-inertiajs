<template>
    <guest-layout>
        <template #header>
            <div class="flex justify-between m-2 p-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    r/{{ community.name }}
                </h2>
                <Link
                    v-if="$page.props.auth.auth_check"
                    :href="route('communities.posts.create', community.slug)"
                    class="p-2 rounded bg-gray-300 hover:bg-gray-200"
                >
                    Create Post
                </Link>
            </div>
        </template>
        <section class="flex md:flex-row gap-4 m-2 p-2">
            <div class="w-8/12">
                <PostCard
                    v-for="post in posts.data"
                    :post="post"
                    :community="community.slug"
                    :key="post.id"
                />
                <div class="mt-4 p-2">
                    <Pagination :links="posts.meta.links" />
                </div>
            </div>
            <div class="w-4/12 p-2">
                <div class="m-2 p-2 bg-slate-500 rounded">
                    <h2 class="text-white">Latest Communities</h2>
                </div>
            </div>
        </section>
    </guest-layout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import PostCard from "@/Components/PostCard.vue";
import Pagination from "@/Components/Pagination.vue";

defineProps({
    community: Object,
    posts: Object,
});
</script>