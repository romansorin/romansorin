<template>
  <div>
    <div class="tile article-tile is-child">
      <a :href="work.insight">
        <div class="article-tile-image article-tile-image--large">
          <figure class="image">
            <img :src="work.preview_image_link" :alt="work.preview_image_alt">
            <div class="image-overlay">
              <div class="columns is-mobile is-centered">
                <div class="column is-half">
                  <nav class="level">
                    <div class="level-item has-text-centered">
                      <a class="icon-link modal-link" v-on:click="openModal">
                        <i data-feather="eye"></i>
                      </a>
                    </div>
                    <div class="level-item has-text-centered" v-if="work.repo_link">
                      <a class="icon-link" :href="work.repo_link">
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
          <p class="title">{{ work.title }}</p>
          <p class="subtitle">{{ work.subtitle }}</p>
        </div>
      </a>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    work: {
      type: Object,
      title: String,
      subtitle: String,
      insight: String,
      repo_link: String,
      preview_image_link: String,
      preview_image_alt: String
    }
  },
  methods: {
    openModal: function(event) {
      document.querySelector(".modal").classList.add("is-active");
      document
        .getElementById("modal-image")
        .setAttribute("src", this.work.preview_image_link);
      document
        .getElementById("modal-image")
        .setAttribute("alt", this.work.preview_image_alt);
    }
  }
};
</script>
