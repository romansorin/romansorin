<template>
  <aside class="insights-sidebar">
    <h3 class="is-size-3 has-text-black-bis has-text-weight-semibold">Categories</h3>
    <ul class="list is-shadowless is-size-5 has-text-weight-semibold">
      <li class="list-item">
        <i data-feather="layers"></i>
        <a
          href="#development"
          v-on:click="$emit('categoryChanged', 'development')"
          class="has-text-black-ter"
        >Development</a>
      </li>
      <li class="list-item">
        <i data-feather="layout"></i>
        <a
          href="#design"
          v-on:click="$emit('categoryChanged', 'design')"
          class="has-text-black-ter"
        >Design</a>
      </li>
      <li class="list-item">
        <i data-feather="briefcase"></i>
        <a
          href="#business"
          v-on:click="$emit('categoryChanged', 'business')"
          class="has-text-black-ter"
        >Business</a>
      </li>
      <li class="list-item">
        <i data-feather="coffee"></i>
        <a
          href="#personal"
          v-on:click="$emit('categoryChanged', 'personal')"
          class="has-text-black-ter"
        >Personal</a>
      </li>
    </ul>
    <h3 class="is-size-3 has-text-black-bis has-text-weight-semibold">Follow</h3>
    <ul class="list is-shadowless is-size-5 has-text-weight-semibold">
      <li class="list-item">
        <a href="https://instagram.com/romansorinn" class="has-text-black-ter">Instagram</a>
      </li>
      <li class="list-item">
        <a href="https://linkedin.com/in/romansorin" class="has-text-black-ter">LinkedIn</a>
      </li>
      <li class="list-item">
        <a href="https://twitter.com/romansorinn" class="has-text-black-ter">Twitter</a>
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
