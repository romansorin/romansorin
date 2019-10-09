<template>
  <svg fill="none">
    <path
      d="M18 2h-1V0h-2v2H5V0H3v2H2C.9 2 0 2.9 0 4v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 18H2V7h16v13z"
      :fill="fill"
    />
  </svg>
</template>

<script>
export default {
  props: { fill: String }
};
</script>

<style>
</style>