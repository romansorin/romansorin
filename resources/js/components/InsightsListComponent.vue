<template>
  <main>
    <ul>
      <div v-for="item in filteredItems">
        <p>{{item.name}}</p>
      </div>
    </ul>
  </main>
</template>

<script>
export default {
  props: ['filteredItems']
};
</script>

<style>
</style>
