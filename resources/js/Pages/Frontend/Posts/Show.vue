<template>
    <guest-layout>
        <section class="flex flex-col md:flex-row gap-4">
            <div class="w-full md:w-8/12">
                <div
                    class="flex flex-row w-full bg-white rounded overflow-hidden mb-4 border hover:border-gray-600"
                >
                    <div class="bg-gray-100 w-10">
                        <PostVote :post="post.data" />
                    </div>
                    <div class="flex flex-col w-full">
                        <div class="p-2 flex items-center gap-2">
                            <div
                                class="self-start h-6 w-6 bg-green-400 rounded-full"
                            ></div>
                            <div
                                class="flex flex-1 flex-wrap items-center gap-2 text-sm"
                            >
                                <Link
                                    class="font-semibold"
                                    :href="
                                        route(
                                            'frontend.community.show',
                                            community.slug
                                        )
                                    "
                                >
                                    r/{{ community.name }}
                                </Link>
                                <div class="flex flex-wrap items-center gap-2">
                                    <h1 class="whitespace-nowrap">
                                        Posted by
                                        <Link href="#" class="hover:underline"
                                            >u/{{ post.data.username }}</Link
                                        >
                                    </h1>
                                    <h1 class="whitespace-nowrap">
                                        {{ post.data.created_at }}
                                    </h1>
                                    <div></div>
                                </div>
                            </div>
                            <div
                                v-if="$page.props.auth.auth_check"
                                class="flex gap-2"
                            >
                                <Link
                                    v-if="can_update"
                                    class="w-16 text-sm text-center text-gray-400 hover:text-gray-600 px-2 border border-gray-400 hover:border-gray-600 rounded-sm"
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
                                    v-if="can_delete"
                                    method="delete"
                                    as="button"
                                    type="button"
                                    class="w-16 text-sm text-center text-gray-400 hover:text-gray-600 px-2 border border-gray-400 hover:border-gray-600 rounded-sm"
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
                        <div class="p-2">
                            <Link
                                :href="
                                    route('frontend.community.posts.show', [
                                        community.slug,
                                        post.data.slug,
                                    ])
                                "
                            >
                                <h1 class="">
                                    {{ post.data.title }}
                                </h1>
                            </Link>
                            <p>
                                {{ post.data.description }}
                            </p>
                            <a
                                :href="post.data.url"
                                target="_blank"
                                class="text-sm text-blue-400 hover:underline"
                                >{{ post.data.url }}</a
                            >
                        </div>
                        <div class="p-2">
                            <div
                                class="flex justify-between items-center gap-2"
                            >
                                <div class="flex items-center gap-2">
                                    <Link
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
                                        <h1 v-if="!post.data.comments_count">
                                            0 Comments
                                        </h1>
                                        <h1 v-else>
                                            {{ post.data.comments_count }}
                                            Comments
                                        </h1>
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
                                        <h1>Hide</h1>
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
                                        <h1>Report</h1>
                                    </Link>
                                </div>
                                <div>
                                    <h1 class="text-sm text-gray-400">
                                        98% Upvoted
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div v-if="$page.props.auth.auth_check">
                                <form @submit.prevent="submit">
                                    <div class="mt-2">
                                        <textarea
                                            v-model="form.content"
                                            id="comment"
                                            rows="6"
                                            class="block w-full resize-none rounded"
                                            placeholder="What are you throughts?"
                                        />
                                    </div>
                                    <div class="mt-2">
                                        <button
                                            class="px-4 py-1 bg-gray-400 hover:bg-gray-600 text-white rounded text-sm"
                                        >
                                            Comment
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="px-2">
                            <Link
                                href="#"
                                class="flex justify-start items-center w-32 text-sm text-blue-600 font-semibold"
                            >
                                <h1 class="mr-2">Sort By: Best</h1>
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </span>
                            </Link>
                            <hr class="my-2" />
                            <Link
                                href="#"
                                class="flex justify-end text-sm text-blue-600 font-semibold w-auto hover:underline"
                            >
                                <h1>View discussions in 9 other communities</h1>
                            </Link>
                        </div>
                        <div class="p-2">
                            <ul role="list" class="divide-y divide-gray-200">
                                <li
                                    v-for="(comment, index) in post.data
                                        .comments"
                                    :key="index"
                                    class="py-4 flex flex-col"
                                >
                                    <div class="flex flex-row items-center">
                                        <div
                                            class="self-start h-6 w-6 bg-green-400 rounded-full"
                                        ></div>
                                        <div class="w-full mx-2">
                                            <h1 class="text-sm text-gray-400">
                                                {{ comment.username }} -
                                                <span>
                                                    {{ comment.created_at }}
                                                </span>
                                            </h1>
                                            <p>{{ comment.content }}</p>
                                            <div
                                                class="flex items-center gap-2 py-2 text-sm"
                                            >
                                                <div
                                                    class="flex items-center gap-2"
                                                >
                                                    <Link
                                                        href="#"
                                                        class="px-2 py-1 hover:bg-gray-200 rounded"
                                                    >
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20"
                                                            fill="currentColor"
                                                            class="w-5 h-5"
                                                        >
                                                            <path
                                                                fill-rule="evenodd"
                                                                d="M10 15a.75.75 0 01-.75-.75V7.612L7.29 9.77a.75.75 0 01-1.08-1.04l3.25-3.5a.75.75 0 011.08 0l3.25 3.5a.75.75 0 11-1.08 1.04l-1.96-2.158v6.638A.75.75 0 0110 15z"
                                                                clip-rule="evenodd"
                                                            />
                                                        </svg>
                                                    </Link>
                                                    <h1 class="font-bold">
                                                        1k
                                                    </h1>
                                                    <Link
                                                        href="#"
                                                        class="px-2 py-1 hover:bg-gray-200 rounded"
                                                    >
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20"
                                                            fill="currentColor"
                                                            class="w-5 h-5"
                                                        >
                                                            <path
                                                                fill-rule="evenodd"
                                                                d="M10 5a.75.75 0 01.75.75v6.638l1.96-2.158a.75.75 0 111.08 1.04l-3.25 3.5a.75.75 0 01-1.08 0l-3.25-3.5a.75.75 0 111.08-1.04l1.96 2.158V5.75A.75.75 0 0110 5z"
                                                                clip-rule="evenodd"
                                                            />
                                                        </svg>
                                                    </Link>
                                                </div>
                                                <a
                                                    href="#"
                                                    class="inline-flex gap-1 px-2 py-1 hover:bg-gray-200 rounded"
                                                >
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

                                                    <h1>Reply</h1>
                                                </a>
                                                <a
                                                    href="#"
                                                    class="px-2 py-1 hover:bg-gray-200 rounded"
                                                >
                                                    Share
                                                </a>
                                                <a
                                                    href="#"
                                                    class="px-2 py-1 hover:bg-gray-200 rounded"
                                                >
                                                    Report
                                                </a>
                                                <a
                                                    href="#"
                                                    class="px-2 py-1 hover:bg-gray-200 rounded"
                                                >
                                                    Save
                                                </a>
                                                <a
                                                    href="#"
                                                    class="px-2 py-1 hover:bg-gray-200 rounded"
                                                >
                                                    Follow
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-4/12">
                <div
                    class="flex flex-col overflow-hidden bg-white rounded shadow mb-4"
                >
                    <div class="bg-green-700">
                        <h1 class="text-white font-semibold p-2">
                            About Community
                        </h1>
                    </div>
                    <div class="p-2 flex flex-col">
                        <div class="flex items-center gap-2">
                            <div
                                class="h-10 w-10 rounded-full bg-green-700"
                            ></div>
                            <h1 class="text-md">Community Name</h1>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Similique, consequuntur?
                        </p>
                        <div class="flex flex-row">
                            <div class="w-1/2">
                                <h1 class="font-semibold">32.1m</h1>
                                <h1 class="text-xs">Members</h1>
                            </div>
                            <div class="w-1/2">
                                <h1 class="font-semibold">11.1k</h1>
                                <h1 class="text-xs">Online</h1>
                            </div>
                        </div>
                        <hr class="h-0.5 my-2 bg-gray-400" />
                        <div class="inline-flex items-center mb-2">
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
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"
                                    />
                                </svg>
                            </span>
                            <h1 class="text-sm ml-2">Created Jan 25, 2008</h1>
                        </div>
                        <button
                            class="bg-green-700 text-white font-semibold py-1 rounded-full"
                        >
                            Join
                        </button>
                    </div>
                </div>
                <PostList :posts="posts.data" :community="community">
                    <template #title>Popular Posts</template>
                </PostList>
            </div>
        </section>
    </guest-layout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Link, useForm } from "@inertiajs/inertia-vue3";
import PostVote from "@/Components/PostVote.vue";
import PostList from "@/Components/PostList.vue";

const props = defineProps({
    community: Object,
    post: Object,
    posts: Object,
    can_delete: Boolean,
    can_update: Boolean,
});

const form = useForm({
    content: "",
});

const submit = () => {
    form.post(
        route("frontend.posts.comment", [
            props.community.slug,
            props.post.data.slug,
        ]),
        {
            onSuccess: () => form.reset("content"),
        }
    );
};
</script>
