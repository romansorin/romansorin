<template>
  <main class="section">
    <div class="container">
      <div class="columns">
        <div class="column">
          <h1
            class="title is-1 landing-heading"
          >Building products and experiences that businesses love</h1>
          <h2
            class="subtitle is-3 landing-subheading"
          >I’m currently rebuilding and redesigning my portfolio with an updated stack, layout, and accessability. Feel free to check in for updates!</h2>

          <GithubIcon fill="#525f7f" />
          <TwitterIcon fill="#525f7f" />
          <LinkedinIcon fill="#525f7f" />
          <PhoneIcon fill="#525f7f" />
          <EmailIcon fill="#525f7f" />
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
</style>