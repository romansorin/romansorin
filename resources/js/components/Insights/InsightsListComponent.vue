<template>
  <article class="insight-article" v-if="item">
    <h4 class="has-text-grey-dark insight-article-category is-size-5">{{item.category | capitalize}}</h4>
    <h2 class="insight-article-title is-size-3 has-text-weight-semibold">
      <a v-bind:href="item.link">{{item.title}}</a>
    </h2>
    <p
      class="has-text-weight-light insight-article-date is-size-6"
    >{{item.date_published}}</p>
  </article>
</template>

<script>
export default {
  props: {
    item: {
      type: Object,
      title: String,
      category: String,
      date_published: String,
      link: String
    }
  }
};
</script>

<style>
</style>
