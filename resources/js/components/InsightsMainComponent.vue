<template>
  <div class="columns is-multiline">
    <div class="column is-3 is-hidden-touch">
      <InsightsSidebarComponent v-on:categoryChanged="setCategory($event)" />
    </div>
    <div class="column is-hidden-desktop is-12">
      <InsightsMobileComponent v-on:categoryChanged="setCategory($event)" />
    </div>
    <div class="column">
      <main class="insight-articles-wrapper">
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
import InsightsMobileComponent from "./InsightsMobileComponent";

export default {
  data() {
    return {
      selectedCategory: "",
      items: [
        {
          title: "Lorem ipsum development mething",
          category: "Development",
          date_published: Date(),
          link: ""
        },
        {
          title: "Dolor design blah blah",
          category: "Design",
          date_published: Date(),
          link: ""
        },
        {
          title: "For whatever reason, personal life on a portfolio",
          category: "Personal",
          date_published: Date(),
          link: ""
        },
        {
          title: "Something something wantepreneur?",
          category: "Business",
          date_published: Date(),
          link: ""
        }
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
          return (
            item.category.toLowerCase() == this.selectedCategory.toLowerCase()
          );
        });
    }
  },
  components: { InsightsSidebarComponent, InsightsMainComponent, InsightsMobileComponent }
};
</script>

<style>
</style>
