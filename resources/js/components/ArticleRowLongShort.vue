<template>
  <div>
    <div class="container article-container">
      <div class="tile is-ancestor">
        <div class="columns is-desktop">
          <div class="column">
            <div class="tile is-parent">
              <article-tile-long v-bind:work="work_one"/>
            </div>
          </div>
          <div class="column is-offset-1-widescreen">
            <div class="tile is-parent">
              <article-tile-short v-bind:work="work_two"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    work_one: {
      type: Object
    },
    work_two: {
      type: Object
    }
  }
};
</script>
