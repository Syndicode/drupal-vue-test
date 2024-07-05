<script setup lang="ts">
import type {Post} from "@/App.vue";

defineProps<{
  post: Post
}>()
</script>

<template>
  <li class="item">
    <div class="item__cover-holder">
      <img :src="`https://picsum.photos/id/${post.id}/400/280`"
           :alt="post.title" class="item__cover">
    </div>
    <div class="item__content">
      <h2 class="item__title">{{ post.title }}</h2>
      <p class="item__excerpt">
        {{ post.body.slice(0, 80) + '...' }}
      </p>
    </div>
  </li>
</template>

<style scoped>


.item__cover-holder {
  position: relative;
  display: block;
  height: 0;
  padding-bottom: 68%;
  margin-bottom: 20px;
  overflow: hidden;
}

.item__cover {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}

.item__title {
  margin: 0 0 16px;
  font-size: 24px;
  line-height: 1;
}

.item__excerpt {
  margin: 0;
}
</style>
