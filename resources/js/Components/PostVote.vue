<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import UpVoteLink from "./UpVoteLink.vue";
import DownVoteLink from "./DownVoteLink.vue";

defineProps({
    post: Object,
});
</script>

<template>
    <div class="w-12 flex flex-col items-center m-2 p-2 text-sm">
        <UpVoteLink
            :slug="post.slug"
            :class="{
                'text-blue-600':
                    post.postVotes[0] && post.postVotes[0].vote == 1,
            }"
        />
        <div
            class="font-semibold"
            :class="{
                'text-blue-600':
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
