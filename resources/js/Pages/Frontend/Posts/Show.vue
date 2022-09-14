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
                    <div v-if="$page.props.auth.auth_check">
                        <form @submit.prevent="submit">
                            <div class="mt-2">
                                <textarea
                                    v-model="form.content"
                                    id="comment"
                                    rows="3"
                                    class="block w-full resize-none"
                                    placeholder="Add comment..."
                                />
                            </div>
                            <div class="mt-2">
                                <button
                                    class="px-4 py-2 bg-blue-400 hover:bg-blue-600 text-white rounded text-sm"
                                >
                                    Add Comment
                                </button>
                            </div>
                        </form>
                    </div>

                    <div>
                        <ul
                            role="list"
                            class="divide-y divide-gray-200 m-2 p-2"
                        >
                            <li
                                v-for="(comment, index) in post.data.comments"
                                :key="index"
                                class="py-4 flex flex-col"
                            >
                                <div class="text-sm text-gray-400">
                                    Commented by
                                    <span class="font-semibold">{{
                                        comment.username
                                    }}</span>
                                </div>
                                <div>{{ comment.content }}</div>
                            </li>
                        </ul>
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
import { Link, useForm } from "@inertiajs/inertia-vue3";
import PostCard from "@/Components/PostCard.vue";
import Pagination from "@/Components/Pagination.vue";

const props = defineProps({
    community: Object,
    post: Object,
    // posts: Object,
    // can_delete: Boolean,
    // can_update: Boolean,
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
