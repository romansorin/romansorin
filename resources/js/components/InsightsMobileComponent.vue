<template>
  <div class="dropdown is-active insights-sidebar">
    <div class="dropdown-trigger">
      <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
        <span>Dropdown button</span>
        <span class="icon is-small">
          <i class="fas fa-angle-down" aria-hidden="true"></i>
        </span>
      </button>
    </div>
    <div class="dropdown-menu" id="dropdown-menu" role="menu">
      <div class="dropdown-content is-size-5 has-text-weight-semibold">
        <a
          href="#development"
          v-on:click="$emit('categoryChanged', 'development')"
          class="has-text-black-ter dropdown-item"
        >
          <i data-feather="layers"></i>
          Development
        </a>

        <a
          href="#design"
          v-on:click="$emit('categoryChanged', 'design')"
          class="has-text-black-ter dropdown-item"
        >
          <i data-feather="layout"></i>
          Design
        </a>

        <a
          href="#business"
          v-on:click="$emit('categoryChanged', 'business')"
          class="has-text-black-ter dropdown-item"
        >
          <i data-feather="briefcase"></i>
          Business
        </a>

        <a
          href="#personal"
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
export default {};
</script>

<style>
</style>
