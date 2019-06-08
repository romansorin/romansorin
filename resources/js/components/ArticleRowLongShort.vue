<template>
  <div>
    <div class="container article-container">
      <div class="tile is-ancestor">
        <div class="columns is-desktop">
          <div class="column">
            <div class="tile is-parent">
              <article-tile-long v-bind:work="works[0]"/>
            </div>
          </div>
          <div class="column is-offset-1-widescreen">
            <div class="tile is-parent">
              <article-tile-short v-bind:work="works[1]"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      works: [
        {
          title: "test title one",
          subtitle: "test subtitle one",
          image:
            "https://images.pexels.com/photos/1670187/pexels-photo-1670187.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
        },
        {
          title: "test title two",
          subtitle: "test subtitle two",
          image:
            "https://images.pexels.com/photos/1670187/pexels-photo-1670187.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
        }
      ]
    };
  }
};
</script>
