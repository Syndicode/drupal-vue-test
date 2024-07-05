<script setup lang="ts">
import ItemsList from "@/components/ItemsList.vue";
export interface Post {
  userId: number,
  id: number,
  title: string,
  body: string
}
</script>

<template>
  <div class="app-holder">
    <ItemsList/>
  </div>
</template>

<style scoped>
.app-holder {
  container-type: inline-size;
}
</style>
