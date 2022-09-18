<template>
  <Head title="Communities" />
  <guest-layout :communities="communities.data">
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
      <div class="w-4/12">
        <div class="flex flex-col overflow-hidden bg-white rounded shadow mb-4">
          <div class="bg-green-700">
            <h1 class="text-white font-semibold p-2">About Community</h1>
          </div>
          <div class="p-2 flex flex-col">
            <div class="flex items-center gap-2">
              <div class="h-10 w-10 rounded-full bg-green-700"></div>
              <h1 class="text-md">{{ community.name }}</h1>
            </div>
            <p>
              {{ community.description }}
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
            <Link
              v-if="isFollowed === 0"
              method="post"
              as="button"
              type="button"
              :href="route('user.community.follow', community.id)"
              class="bg-green-700 text-white font-semibold py-1 rounded-full"
            >
              Join
            </Link>
            <Link
              v-if="isFollowed === 1"
              method="delete"
              as="button"
              type="button"
              :href="route('user.community.unfollow', community.id)"
              class="bg-red-700 text-white font-semibold py-1 rounded-full"
            >
              Leave
            </Link>
          </div>
        </div>
        <CommunityList :communities="communities.data">
          <template #title>Latest Communities</template>
        </CommunityList>
      </div>
    </section>
  </guest-layout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import PostCard from "@/Components/PostCard.vue";
import Pagination from "@/Components/Pagination.vue";
import CommunityList from "@/Components/CommunityList.vue";

defineProps({
  community: Object,
  posts: Object,
  communities: Object,
  isFollowed: Object,
});
</script>
