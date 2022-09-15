<template>
    <div class="w-full bg-white overflow-hidden rounded shadow">
        <h2 class="font-semibold text-md p-2 bg-green-700 text-white">
            <slot name="title" />
        </h2>
        <ul
            role="list"
            class="divide-y divide-slate-300 dark:divide-slate-700 p-2"
        >
            <li v-for="post in posts" :key="post.id" class="py-2">
                <div class="flex items-center justify-between">
                    <Link
                        :href="
                            route('frontend.community.posts.show', [
                                community.slug,
                                post.slug,
                            ])
                        "
                        class="text-slate-800 dark:text-slate-400 font-semibold truncate text-sm hover:text-indigo-700"
                    >
                        {{ post.title }}
                    </Link>
                    <h1 class="text-xs">Votes({{ post.votes }})</h1>
                </div>
            </li>
        </ul>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
defineProps({
    community: Object,
    posts: Object,
});
</script>
