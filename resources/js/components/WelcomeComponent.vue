<template>
  <main class="container">
    <div class="columns">
      <div class="column">
        <h1 class="landing-heading">Building products and experiences that businesses love</h1>
        <h2
          class="landing-subheading"
        >I’m currently rebuilding and redesigning my portfolio with an updated stack, layout, and improved accessability. Feel free to check in for updates!</h2>
        <nav class="level">
          <div class="level-item">
            <GithubIcon class="landing-icon" />
          </div>
          <div class="level-item">
            <TwitterIcon class="landing-icon" />
          </div>
          <div class="level-item">
            <LinkedinIcon class="landing-icon" />
          </div>
          <div class="level-item">
            <PhoneIcon class="landing-icon" />
          </div>
          <div class="level-item">
            <EmailIcon class="landing-icon" />
          </div>
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
  line-height: 132.46%;
  /* or 111px */
  letter-spacing: -0.04em;

  color: #32325d;

  text-shadow: 0px 4px 5px rgba(50, 50, 93, 0.09);
}
.landing-subheading {
  font-style: normal;
  font-weight: 300;
  font-size: 29px;
  line-height: 138.71%;
  /* or 52px */

  color: #424770;
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
  width: 39px;
  height: 39px;
}
</style>