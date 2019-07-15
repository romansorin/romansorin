<template>
  <div>
    <div class="tile article-tile is-child">
      <a :href="insight">
        <div class="article-tile-image article-tile-image--small">
          <figure class="image">
            <img :src="image" :alt="alt">
            <div class="image-overlay">
              <div class="columns is-mobile is-centered">
                <div class="column is-half">
                  <nav class="level">
                    <div class="level-item has-text-centered">
                      <a class="icon-link modal-link" v-on:click="openModal">
                        <i data-feather="eye"></i>
                      </a>
                    </div>
                    <div class="level-item has-text-centered">
                      <a class="icon-link" :href="repo">
                        <i data-feather="code"></i>
                      </a>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </figure>
        </div>
        <div class="article-title-info">
          <p class="title">{{ title }}</p>
          <p class="subtitle">{{ subtitle }}</p>
        </div>
      </a>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    title: String,
    subtitle: String,
    insight: String,
    repo: String,
    image: String,
    alt: String
  },
  methods: {
    openModal: function (event) {
      document.querySelector('.modal').classList.add('is-active');
      document.getElementById('modal-image').setAttribute('src', this.image);
      document.getElementById('modal-image').setAttribute('alt', this.alt);
    },
  }
};
</script>
