<template>
    <Head title="Communities" />
    <guest-layout>
        <section class="flex md:flex-row gap-4 m-2 p-2">
            <div class="w-8/12">
                <PostCard
                    v-for="post in posts.data"
                    :post="post"
                    :community="post.community_slug"
                    :key="post.id"
                />
            </div>
            <div class="w-4/12 p-2">
                <div class="m-2 p-2 bg-slate-500 rounded">
                    <CommunityList :communities="communities.data">
                        <template #title>Top Communities</template>
                    </CommunityList>
                </div>
            </div>
        </section>
    </guest-layout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/inertia-vue3";
import PostCard from "@/Components/PostCard.vue";
import CommunityList from "@/Components/CommunityList.vue";

defineProps({
    communities: Object,
    posts: Object,
});
</script>
