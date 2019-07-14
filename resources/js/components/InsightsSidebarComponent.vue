<template>
  <aside class="section-sidebar">
    <h3 class="is-size-4 has-text-black-bis has-text-weight-bold">Categories</h3>
    <ul class="list is-shadowless">
      <li class="list-item">
        icon
        <a href="#category-1" v-on:click="$emit('categoryChanged', '1')">Category 1</a>
      </li>
      <li class="list-item">
        icon
        <a href="#category-2" v-on:click="$emit('categoryChanged', '2')">Category 2</a>
      </li>
      <li class="list-item">
        icon
        <a href="#category-3" v-on:click="$emit('categoryChanged', '3')">Category 3</a>
      </li>
      <li class="list-item">
        icon
        <a href="#category-4" v-on:click="$emit('categoryChanged', '4')">Category 4</a>
      </li>
    </ul>
    <h3 class="is-size-4 has-text-black-bis has-text-weight-bold">Follow</h3>
    <ul class="list is-shadowless">
      <li class="list-item">
        <a href="https://">Instagram</a>
      </li>
      <li class="list-item">
        <a href="https://">LinkedIn</a>
      </li>
      <li class="list-item">
        <a href="https://">Twitter</a>
      </li>
    </ul>
  </aside>
</template>

<script>
import InsightsMainComponent from "./InsightsMainComponent";
export default {
  extends: {
    InsightsMainComponent
  }
};
</script>

<style>
</style>
