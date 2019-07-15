<template>
  <div class="columns">
    <div class="column is-3">
      <InsightsSidebarComponent v-on:categoryChanged="setCategory($event)" />
    </div>
    <div class="column">
      <main>
        <InsightsListComponent
          v-for="(item, index) in filteredItems"
          v-bind:item="item"
          v-bind:index="index"
          v-bind:key="item.id"
        />
      </main>
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
        { title: "cat 1", category: "1", date_published: Date() },
        { title: "cat 2", category: "2", date_published: Date() },
        { title: "cat 4", category: "4", date_published: Date() },
        { title: "cat 3", category: "3", date_published: Date() }
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
          return item.category == this.selectedCategory;
        });
    }
  },
  components: { InsightsSidebarComponent, InsightsMainComponent }
};
</script>

<style>
</style>
