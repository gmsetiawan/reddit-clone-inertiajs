<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import { Link } from "@inertiajs/inertia-vue3";
import NavbarGuest from "@/Components/NavbarGuest.vue";
import NavbarAuth from "../Components/NavbarAuth.vue";
import CommunityJoinList from "@/Components/CommunityJoinList.vue";

defineProps({
  communities: Object,
});
</script>

<template>
  <div>
    <div class="min-h-screen bg-gray-200">
      <div v-if="$page.props.auth.auth_check">
        <NavbarAuth :communities="communities" />
      </div>
      <div v-else>
        <NavbarGuest />
      </div>
      <main class="max-w-5xl mx-auto py-16 px-4 lg:px-0">
        <slot />
      </main>
    </div>
  </div>
</template>
