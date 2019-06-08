<template>
  <div>
    <article-row-long-short v-bind:work_one="works[0]" v-bind:work_two="works[1]"></article-row-long-short>
    <article-row-short-long v-bind:work_one="works[2]" v-bind:work_two="works[3]"></article-row-short-long>
  </div>
</template>
<script>
export default {
  props: {
    works: []
  }
};
</script>
