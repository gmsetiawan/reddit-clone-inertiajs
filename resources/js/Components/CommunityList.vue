<template>
    <div class="w-full bg-white overflow-hidden rounded shadow">
        <h2 class="font-semibold text-md p-2 bg-green-700 text-white">
            <slot name="title" />
        </h2>
        <ul
            role="list"
            class="divide-y divide-slate-300 dark:divide-slate-700 p-2"
        >
            <li
                v-for="community in communities"
                :key="community.id"
                class="py-2"
            >
                <div class="flex items-center justify-between">
                    <Link
                        :href="route('frontend.community.show', community.slug)"
                        class="text-slate-800 dark:text-slate-400 font-semibold truncate text-sm hover:text-indigo-700"
                    >
                        {{ community.name }}
                    </Link>
                    <h1 class="text-xs">Posts({{ community.posts_count }})</h1>
                </div>
            </li>
        </ul>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
defineProps({
    communities: Object,
});
</script>
