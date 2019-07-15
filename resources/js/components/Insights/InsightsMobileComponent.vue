<template>
  <div
    class="dropdown insights-sidebar"
    v-bind:class="{ 'is-active':expanded }"
    v-on:click="expanded = !expanded"
  >
    <div class="dropdown-trigger">
      <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
        <span>Choose a category...</span>
        <span class="icon">
          <i data-feather="chevron-down" style="margin-right: 0; top: 1px;"></i>
        </span>
      </button>
    </div>
    <div class="dropdown-menu" id="dropdown-menu" role="menu">
      <div class="dropdown-content is-size-5 has-text-weight-semibold">
        <a
          href="javascript:;"
          v-on:click="$emit('categoryChanged', 'development')"
          class="has-text-black-ter dropdown-item"
        >
          <i data-feather="layers"></i>
          Development
        </a>

        <a
          href="javascript:;"
          v-on:click="$emit('categoryChanged', 'design')"
          class="has-text-black-ter dropdown-item"
        >
          <i data-feather="layout"></i>
          Design
        </a>

        <a
          href="javascript:;"
          v-on:click="$emit('categoryChanged', 'business')"
          class="has-text-black-ter dropdown-item"
        >
          <i data-feather="briefcase"></i>
          Business
        </a>

        <a
          href="javascript:;"
          v-on:click="$emit('categoryChanged', 'personal')"
          class="has-text-black-ter dropdown-item"
        >
          <i data-feather="coffee"></i>
          Personal
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      expanded: false
    };
  }
};
</script>

<style>
</style>
