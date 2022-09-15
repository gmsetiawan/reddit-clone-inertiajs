<template>
    <Link
        :href="route('frontend.community.posts.show', [community, post.slug])"
        class="flex flex-row w-full bg-white rounded overflow-hidden mb-4 border hover:border-gray-600 cursor-pointer"
    >
        <div class="bg-gray-100 w-10">
            <PostVote :post="post" />
        </div>
        <div class="flex flex-col w-full">
            <div class="p-2 flex items-center gap-2">
                <div class="self-start h-6 w-6 bg-green-400 rounded-full"></div>
                <div class="flex flex-1 flex-wrap items-center gap-2 text-sm">
                    <Link
                        class="font-semibold"
                        :href="route('frontend.community.show', community)"
                    >
                        r/{{ community }}
                    </Link>
                    <div class="flex flex-wrap items-center gap-2">
                        <h1 class="whitespace-nowrap">
                            Posted by
                            <Link href="#" class="hover:underline"
                                >u/{{ post.username }}</Link
                            >
                        </h1>
                        <h1 class="whitespace-nowrap">{{ post.created_at }}</h1>
                        <div></div>
                    </div>
                </div>
                <button
                    class="self-start px-4 bg-blue-400 text-white font-semibold rounded-full"
                >
                    Join
                </button>
            </div>
            <div class="p-2">
                <Link
                    :href="
                        route('frontend.community.posts.show', [
                            community,
                            post.slug,
                        ])
                    "
                >
                    <h1 class="">
                        {{ post.title }}
                    </h1>
                </Link>
                <p>
                    {{ post.description }}
                </p>
                <a
                    :href="post.url"
                    target="_blank"
                    class="text-sm text-blue-400 hover:underline"
                    >{{ post.url }}</a
                >
            </div>
            <div class="p-2">
                <div class="flex items-center gap-2">
                    <Link
                        :href="
                            route('frontend.community.posts.show', [
                                community,
                                post.slug,
                            ])
                        "
                        class="flex items-center text-sm hover:bg-gray-100 p-2 rounded"
                    >
                        <span class="mr-2">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"
                                />
                            </svg>
                        </span>
                        <h1 v-if="!post.comments_count">0 Comments</h1>
                        <h1 v-else>{{ post.comments_count }} Comments</h1>
                    </Link>
                    <Link
                        href="#"
                        class="flex items-center text-sm hover:bg-gray-100 p-2 rounded"
                    >
                        <span class="mr-2">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 15l6-6m0 0l-6-6m6 6H9a6 6 0 000 12h3"
                                />
                            </svg>
                        </span>
                        <h1>Share</h1>
                    </Link>
                    <Link
                        href="#"
                        class="flex items-center text-sm hover:bg-gray-100 p-2 rounded"
                    >
                        <span class="mr-2">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z"
                                />
                            </svg>
                        </span>
                        <h1>Save</h1>
                    </Link>
                    <Link
                        href="#"
                        class="flex items-center text-sm hover:bg-gray-100 p-1 rounded"
                    >
                        <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"
                                />
                            </svg>
                        </span>
                    </Link>
                </div>
            </div>
        </div>
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import PostVote from "./PostVote.vue";

defineProps({
    post: Object,
    community: String,
});
</script>
