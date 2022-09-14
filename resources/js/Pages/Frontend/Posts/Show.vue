<template>
    <guest-layout>
        <section class="flex flex-col md:flex-row gap-4">
            <div class="w-full md:w-8/12">
                <div class="bg-gray-200 mb-2 rounded">
                    <h1 class="font-semibold p-2">
                        <Link
                            :href="
                                route('frontend.community.show', community.slug)
                            "
                        >
                            r/{{ community.name }}
                        </Link>
                    </h1>
                </div>
                <div class="p-2 bg-white">
                    <div class="flex flex-col md:flex-row justify-between">
                        <h1 class="text-sm text-gray-400">
                            Posted by {{ post.data.username }}
                        </h1>
                        <div
                            v-if="
                                $page.props.auth.auth_check && post.data.owner
                            "
                        >
                            <Link
                                class="text-gray-400 hover:text-gray-600"
                                :href="
                                    route('communities.posts.edit', [
                                        community.slug,
                                        post.data.slug,
                                    ])
                                "
                            >
                                edit
                            </Link>
                            <Link
                                method="delete"
                                as="button"
                                type="button"
                                class="text-red-400 hover:text-red-600"
                                :href="
                                    route('communities.posts.destroy', [
                                        community.slug,
                                        post.data.slug,
                                    ])
                                "
                            >
                                delete
                            </Link>
                        </div>
                    </div>
                    <div>
                        <h1 class="font-semibold">{{ post.data.title }}</h1>
                        <p>{{ post.data.description }}</p>
                        <Link
                            :href="post.url"
                            class="text-sm hover:text-gray-400"
                        >
                            {{ post.data.url }}
                        </Link>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-4/12">
                <div class="p-2 bg-slate-500 rounded">
                    <h1 class="text-white">Latest Communities</h1>
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
    post: Object,
});
</script>
