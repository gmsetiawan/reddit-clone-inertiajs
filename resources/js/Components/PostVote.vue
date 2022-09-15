<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import UpVoteLink from "./UpVoteLink.vue";
import DownVoteLink from "./DownVoteLink.vue";

defineProps({
    post: Object,
});
</script>

<template>
    <div class="flex flex-col p-2 justify-center text-center">
        <UpVoteLink
            :slug="post.slug"
            :class="{
                'text-gray-900':
                    post.postVotes[0] && post.postVotes[0].vote == 1,
            }"
        />
        <div
            class="text-center font-bold text-xs"
            :class="{
                'text-gray-900':
                    post.postVotes[0] && post.postVotes[0].vote == 1,
                'text-red-600':
                    post.postVotes[0] && post.postVotes[0].vote == -1,
            }"
        >
            {{ post.votes }}
        </div>
        <DownVoteLink
            :slug="post.slug"
            :class="{
                'text-red-600':
                    post.postVotes[0] && post.postVotes[0].vote == -1,
            }"
        />
    </div>
</template>
