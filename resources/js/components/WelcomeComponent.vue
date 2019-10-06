<template>
  <main class="section">
    <div class="container">
      <div class="columns">
        <div class="column">
          <h1 class="landing-heading">Building products and experiences that businesses love</h1>
          <h2
            class="landing-subheading"
          >I’m currently rebuilding and redesigning my portfolio with an updated stack, layout, and accessability. Feel free to check in for updates!</h2>
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
  font-size: 84px;
  line-height: 132.46%;
  /* or 111px */
  letter-spacing: -0.04em;

  color: #32325d;

  text-shadow: 0px 4px 5px rgba(50, 50, 93, 0.09);
}
.landing-subheading {
  font-style: normal;
  font-weight: 300;
  font-size: 37px;
  line-height: 139.6%;
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
</style>