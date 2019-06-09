<template>
  <div>
    <div v-for="n in works.length" v-bind:key="n">
      <article-row-long-short
        v-if="rowLS === true"
        v-bind:work_one="works[n-1]"
        v-bind:work_two="works[n]"
      ></article-row-long-short>
      {{ rowLS = false }}
      <article-row-short-long v-else v-bind:work_one="works[n-1]" v-bind:work_two="works[n]"></article-row-short-long>
      {{ rowLS = true }}
    </div>
  </div>
</template>
<script>
export default {
  props: {
    works: {
      type: Array
    }
  },
  computed: {
    indicesToSplit: function() {
      let indices = [];
      for (let i = 0; i < this.works.length; i++) {
        if (i % 2 == 0) indices.push(i);
      }
      return indices;
    }
  },
  methods: {
    isIndexEven: function(index) {
      if (index % 2 == 0) return true;
    },
    alternateRow: function(index) {
      if (this.isIndexEven(index)) this.rowLS = true;
      else this.rowLS = false;
      return this.rowLS;
  },
  data() {
    return {
      rowLS: true
    };
  }
};
</script>
