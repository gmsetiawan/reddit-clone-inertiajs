<template>
    <div
        class="mt-4 max-w-4xl flex bg-white rounded-lg border border-gray-200 shadow-md"
    >
        <div class="mr-3">
            <PostVote />
        </div>
        <div class="my-2 w-full">
            <div class="flex text-sm">
                <Link>r/{{ community }} </Link>
                <div class="flex ml-2">
                    Posted by
                    <span class="font-semibold mx-1">{{ post.username }}</span>
                    {{ post.created_at }}
                </div>
            </div>
            <Link>
                <h5 class="text-2xl font-bold tracking-tight">
                    {{ post.title }}
                </h5>
            </Link>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{ post.description }}
            </p>
            <div class="flex items-center justify-between mr-4">
                <div>
                    <p v-if="!post.comments_count">Comments 0</p>
                    <p v-else class="mr-4 p-2">
                        Comments({{ post.comments_count }})
                    </p>
                </div>
                <Link
                    :href="
                        route('frontend.community.posts.show', [
                            community,
                            post.slug,
                        ])
                    "
                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Read more
                    <svg
                        aria-hidden="true"
                        class="ml-2 -mr-1 w-4 h-4"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import PostVote from "./PostVote.vue";

defineProps({
    post: Object,
    community: String,
});
</script>
