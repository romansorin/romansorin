<template>
  <article>
    <p>{{item.category}}</p>
    <p>{{item.title}}</p>
    <p>{{item.date_published}}</p>
  </article>
</template>

<script>
export default {
  props: {
    item: {
      type: Object,
      title: String,
      category: String,
      date_published: String
    }
  }
};
</script>

<style>
</style>
