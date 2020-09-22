<template>
  <main class="section container">
    <div class="columns">
      <div class="column is-full-mobile is-half-desktop is-two-thirds-tablet">
        <div class="landing-copy">
          <h1
            class="landing-heading font-semibold"
          >Building products and experiences that businesses love</h1>
          <h2 class="landing-subheading font-light">I am a freelance software developer who specializes in web application development & design. I offer SaaS/web app development, design, consulting, and server maintenance.</h2>
          <br/>
          <h2
            class="landing-subheading font-light"
          >I’m currently rebuilding and redesigning my portfolio with an updated stack, layout, and improved accessibility. In the meantime, please use a contact method below if you're interested in my projects or prior work.</h2>
          <br/>
          <h2>Email: rmaximsorin@gmail.com, roman@romansorin.com</h2>
        
        </div>
        <nav class="level">
          <a href="https://github.com/romansorin" class="level-item">
            <GithubIcon class="landing-icon" />
          </a>
          <a href="https://twitter.com/romansorinn" class="level-item">
            <TwitterIcon class="landing-icon" />
          </a>
          <a href="https://linkedin.com/in/romansorin" class="level-item">
            <LinkedinIcon class="landing-icon" />
          </a>
          <a href="tel:+2163028812" class="level-item">
            <PhoneIcon class="landing-icon" />
          </a>
          <a href="mailto:hello@romansorin.com" class="level-item">
            <EmailIcon class="landing-icon" />
          </a>
          <a href="https://calendly.com/rscom/30min" class="level-item">
            <CalendarIcon class="landing-icon" />
          </a>
        </nav>
      </div>
      <div class="column is-hidden-mobile">
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
  color: #424770;
}
.landing-copy {
  margin-bottom: 255px;
}
.landing-icon {
  cursor: pointer;
  transition: fill 0.15s;
  fill: #525f7f;
}
.landing-icon:hover {
  fill: #6772e5;
}
.level {
  display: flex;
  padding-left: 5px;
  padding-right: 5px;
  flex-wrap: wrap;
  justify-content: flex-start;
}
.level > .level-item:not(.is-narrow) {
  flex-grow: 0;
}
.level-item {
  padding-right: 44px;
  justify-content: start;
  margin-bottom: 25px;
}

.level-item:last-child {
  padding-right: 0;
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

@media screen and (max-width: 767.96px) {
  .landing-heading {
    line-height: 63px;
    font-size: 55px;
  }
  .landing-subheading {
    line-height: 38px;
    font-size: 22px;
  }
  .landing-copy {
    margin-bottom: 130px;
  }
  .level-item:not(:last-child) {
    
    margin-bottom: 25px;
  }
}

@media screen and (max-width: 375px) {
  .landing-heading {
    font-size: 50px;
    line-height: 65px;
  }
}
</style>
