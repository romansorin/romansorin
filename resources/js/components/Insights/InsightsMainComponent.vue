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
        <h3 id="insights-article-return" class="is-size-3 has-text-black-bis has-text-weight-semibold" v-if="selectedCategory !== ''">
          Showing results for "{{selectedCategory | capitalize}}".
          <a
            href="javascript:;"
            v-on:click="resetFilter();"
          ><i data-feather="x"></i>Go Back</a>
        </h3>
        <InsightsListComponent
          v-for="(item, index) in filteredItems"
          v-bind:item="item"
          v-bind:index="index"
          v-bind:key="item.id"
        />
        <article class="insight-article" v-if="items.length === 0">
          <h2
            class="insight-article-title is-size-3 has-text-weight-semibold"
          >Nothing to see here! Try checking back later :)</h2>
        </article>
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
        // {
        //   title: "Lorem ipsum development mething",
        //   category: "Development",
        //   date_published: Date(),
        //   link: ""
        // },
        // {
        //   title: "Dolor design blah blah",
        //   category: "Design",
        //   date_published: Date(),
        //   link: ""
        // },
        // {
        //   title: "For whatever reason, personal life on a portfolio",
        //   category: "Personal",
        //   date_published: Date(),
        //   link: ""
        // },
        // {
        //   title: "Something something wantepreneur?",
        //   category: "Business",
        //   date_published: Date(),
        //   link: ""
        // }
      ]
    };
  },
  methods: {
    setCategory(category) {
      this.selectedCategory = category;
    },
    resetFilter() {
      if (this.selectedCategory !== "") {
        this.setCategory("");
      }
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
  components: {
    InsightsSidebarComponent,
    InsightsMainComponent,
    InsightsMobileComponent
  }
};
</script>

<style>
</style>
