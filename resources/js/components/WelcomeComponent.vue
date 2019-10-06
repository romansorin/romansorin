<template>
  <main class="section container">
    <div class="columns">
      <div class="column is-two-thirds-tablet">
        <div class="landing-copy">
          <h1 class="landing-heading">Building products and experiences that businesses love</h1>
          <h2
            class="landing-subheading"
          >I’m currently rebuilding and redesigning my portfolio with an updated stack, layout, and improved accessability. Feel free to check in for updates!</h2>
        </div>
        <nav class="level">
          <a href="https://github.com/romansorin" class="level-item">
            <GithubIcon class="landing-icon" />
          </a>
          <a href="https://twitter.com/romansorinn" class="level-item">
            <TwitterIcon class="landing-icon" />
          </a>
          <a href="https://linkedin.com/romansorin" class="level-item">
            <LinkedinIcon class="landing-icon" />
          </a>
          <a href="tel:+14408971215" class="level-item">
            <PhoneIcon class="landing-icon" />
          </a>
          <a href="mailto:hello@romansorin.com" class="level-item">
            <EmailIcon class="landing-icon" />
          </a>
        </nav>
      </div>
      <div class="column">
        <LandingIllustration />
      </div>
    </div>
  </main>
</template>

<script>
import * as Icons from "./icons";
import LandingIllustration from "./LandingIllustration";
export default {};
</script>

<style>
.landing-heading {
  font-weight: 600;
  font-size: 68px;
  line-height: 86px;
  /* or 111px */
  letter-spacing: -0.04em;
  margin-bottom: 55px;
  color: #32325d;

  text-shadow: 0px 4px 5px rgba(50, 50, 93, 0.09);
}
.landing-subheading {
  font-style: normal;
  font-weight: 300;
  font-size: 29px;
  line-height: 46px;
  /* or 52px */

  color: #424770;
}
.landing-copy {
  margin-bottom: 255px;
}
.landing-icon {
  cursor: pointer;
  fill: #525f7f;
}
.landing-icon:hover {
  fill: #6772e5;
}
.level {
  padding-left: 5px;
  padding-right: 5px;
  justify-content: start;
}
.level > .level-item:not(.is-narrow) {
  flex-grow: 0;
}
.level-item {
  padding-right: 44px;
  justify-content: start;
}

.level-item > svg {
  width: 32px;
  height: 32px;
}
.column {
  margin-top: auto;
  margin-bottom: auto;
}
.columns {
  min-height: 100vh;
}
.section {
  overflow-x: hidden;
}
</style>