<script setup lang="ts">
import Item from "@/components/Item.vue";
import postsApi from "@/api/posts";
import {onMounted, ref} from "vue";
import type {Post} from "@/App.vue";

const posts = ref<Post[]>([]);

onMounted(() => {
  postsApi.getPosts()
    .then((response) => {
      if (response.status === 200 && response.data.length) {
        posts.value = response.data.slice(0, 12)
      }
    })
})
</script>

<template>
  <ul class="items-list" v-if="posts.length">
    <Item v-for="post in posts" :key="post.id" :post="post"/>
  </ul>
</template>

<style scoped>
.items-list {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

@container (min-width: 768px) {
  .items-list {
    display: grid;
    grid-template-columns: 1fr 1fr;
    column-gap: 32px;
    row-gap: 32px;
  }
}

@container (min-width: 900px) {
  .items-list {
    grid-template-columns: 1fr 1fr 1fr;
    column-gap: 24px;
    row-gap: 24px;
  }
}
</style>
