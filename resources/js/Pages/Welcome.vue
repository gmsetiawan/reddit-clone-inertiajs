<template>
    <Head title="Communities" />
    <guest-layout>
        <section class="mb-6">
            <h1 class="font-semibold mb-2">Trending today</h1>
            <div class="flex flex-row justify-evenly gap-4">
                <div class="h-40 w-56 bg-gray-900 rounded"></div>
                <div class="h-40 w-56 bg-gray-900 rounded"></div>
                <div class="h-40 w-56 bg-gray-900 rounded"></div>
                <div class="h-40 w-56 bg-gray-900 rounded"></div>
                <div class="h-40 w-56 bg-gray-900 rounded"></div>
            </div>
        </section>
        <section class="mb-6">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="w-8/12">
                    <h1 class="font-semibold mb-2">Popular posts</h1>
                    <div
                        class="h-14 w-full flex flex-nowrap justify-between items-center bg-white rounded px-4 border mb-4"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex items-center bg-gray-100 hover:bg-gray-200 px-4 py-1 rounded-full cursor-pointer"
                            >
                                <span class="mr-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z"
                                        />
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z"
                                        />
                                    </svg>
                                </span>
                                <h1>Hot</h1>
                            </div>
                            <div
                                class="flex items-center bg-gray-100 px-4 py-1 rounded-full cursor-pointer"
                            >
                                <h1 class="mr-1">Everywhere</h1>
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                                        />
                                    </svg>
                                </span>
                            </div>
                            <div
                                class="flex items-center hover:bg-gray-200 px-4 py-1 rounded-full cursor-pointer"
                            >
                                <span class="mr-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"
                                        />
                                    </svg>
                                </span>
                                <h1>News</h1>
                            </div>
                            <div
                                class="flex items-center hover:bg-gray-200 px-4 py-1 rounded-full cursor-pointer"
                            >
                                <span class="mr-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"
                                        />
                                    </svg>
                                </span>
                                <h1>Top</h1>
                            </div>
                        </div>
                        <div
                            class="flex items-center hover:bg-gray-200 p-2 rounded-full cursor-pointer"
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
                                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"
                                />
                            </svg>
                        </div>
                        <div class="flex flex-1 justify-end">
                            <div
                                class="flex items-center hover:bg-gray-200 p-2 rounded-full cursor-pointer"
                            >
                                <span
                                    ><svg
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
                                            d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"
                                        />
                                    </svg>
                                </span>
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-4 h-4"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                                        />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>

                    <PostCard
                        v-for="post in posts.data"
                        :post="post"
                        :community="post.community_slug"
                        :key="post.id"
                    />
                </div>
                <div class="w-4/12 p-2 mt-6">
                    <div class="mb-4">
                        <CommunityList :communities="communities.data">
                            <template #title>Top Communities</template>
                        </CommunityList>
                    </div>
                    <div class="flex flex-col bg-white rounded shadow mb-4 p-2">
                        <div class="flex items-center">
                            <span class="mr-4">
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
                                        d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.87c1.355 0 2.697.055 4.024.165C17.155 8.51 18 9.473 18 10.608v2.513m-3-4.87v-1.5m-6 1.5v-1.5m12 9.75l-1.5.75a3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0L3 16.5m15-3.38a48.474 48.474 0 00-6-.37c-2.032 0-4.034.125-6 .37m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.17c0 .62-.504 1.124-1.125 1.124H4.125A1.125 1.125 0 013 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 016 13.12M12.265 3.11a.375.375 0 11-.53 0L12 2.845l.265.265zm-3 0a.375.375 0 11-.53 0L9 2.845l.265.265zm6 0a.375.375 0 11-.53 0L15 2.845l.265.265z"
                                    />
                                </svg>
                            </span>
                            <div>
                                <h1>Reddit Premium</h1>
                                <p>
                                    The best Reddit experience, with monthly
                                    Coins
                                </p>
                            </div>
                        </div>
                        <button
                            class="m-2 bg-red-400 text-white font-semibold py-1 rounded-full"
                        >
                            Join
                        </button>
                    </div>
                    <div class="flex flex-col bg-white rounded shadow mb-4 p-2">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Dolore, nemo. Collapse - Accordion Taggable
                    </div>
                    <div class="flex flex-col bg-white rounded shadow mb-4 p-2">
                        <div
                            class="flex flex-row border-b border-gray-200 py-2"
                        >
                            <div class="flex flex-col w-1/2">
                                <a href="#" class="text-sm">User Agreement</a>
                                <a href="#" class="text-sm">Privacy Policy</a>
                            </div>
                            <div class="flex flex-col w-1/2">
                                <a href="#" class="text-sm">Content Policy</a>
                                <a href="#" class="text-sm"
                                    >Moderator Code Of Conduct</a
                                >
                            </div>
                        </div>
                        <div
                            class="flex flex-row border-b border-gray-200 py-2"
                        >
                            <div class="flex flex-col w-1/2">
                                <a href="#" class="text-sm">English</a>
                                <a href="#" class="text-sm">Français</a>
                                <a href="#" class="text-sm">Italiano</a>
                            </div>
                            <div class="flex flex-col w-1/2">
                                <a href="#" class="text-sm">Deutsch</a>
                                <a href="#" class="text-sm">Español</a>
                                <a href="#" class="text-sm">Português</a>
                            </div>
                        </div>
                        <h1 class="py-2 text-sm">
                            Reddit Inc © 2022. All rights reserved
                        </h1>
                    </div>
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
