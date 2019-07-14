<template>
  <div class="columns">
    <div class="column is-3">
      <InsightsSidebarComponent v-on:categoryChanged="setCategory($event)" />
    </div>
    <div class="column">
      <InsightsListComponent v-bind:filteredItems="filteredItems" />
    </div>
  </div>
</template>

<script>
import InsightsSidebarComponent from "./InsightsSidebarComponent";
import InsightsMainComponent from "./InsightsMainComponent";

export default {
  data() {
    return {
      selectedCategory: "",
      items: [
        { name: "cat 1", type: "1" },
        { name: "cat 2", type: "2" },
        { name: "cat 4", type: "4" },
        { name: "cat 3", type: "3" }
      ]
    };
  },
  methods: {
    setCategory(category) {
      this.selectedCategory = category;
    }
  },
  computed: {
    filteredItems() {
      if (this.selectedCategory == "") return this.items;
      else
        return this.items.filter(item => {
          return item.type == this.selectedCategory;
        });
    }
  },
  components: { InsightsSidebarComponent, InsightsMainComponent }
};
</script>

<style>
</style>
