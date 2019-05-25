<template>
  <div>
    <div class="tile article-tile is-child">
      <a href="https://google.com">
        <div class="article-tile-image article-tile-image--large">
          <figure class="image">
            <img
              src="https://images.pexels.com/photos/227675/pexels-photo-227675.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
              alt="#"
            >
            <div class="image-overlay">
              <div class="columns is-mobile is-centered">
                <div class="column is-half">
                  <nav class="level">
                    <div class="level-item has-text-centered">
                      <a class="icon-link" href="http://google.com">
                        <i data-feather="eye"></i>
                      </a>
                    </div>
                    <div class="level-item has-text-centered">
                      <a class="icon-link" href="http://github.com">
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
    subtitle: String
  }
};
</script>
