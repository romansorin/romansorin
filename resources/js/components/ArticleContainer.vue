<template>
  <div>
    <div v-if="works.length > 1">
      <div v-for="(work, index) in (works.length / 2)" v-bind:key="work.id">
        <article-row-long-short
          v-if="index % 2 === 0"
          v-bind:work_one="works[index * 2]"
          v-bind:work_two="works[(index * 2) + 1]"
        ></article-row-long-short>
        <article-row-short-long
          v-else
          v-bind:work_one="works[index * 2]"
          v-bind:work_two="works[(index * 2) + 1]"
        ></article-row-short-long>
      </div>
    </div>
    <div v-else>
      <article-row-long-short v-bind:work_one="works[0]"></article-row-long-short>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    works: {
      type: Array
    }
  }
};
</script>
