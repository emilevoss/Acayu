<template>
    <div class="clamp-1280" id="contentKids">

      <!----- Header Section ----->
      <section class="headerSection">
      <div class="clamp-1280">
          <img src="" alt="" class="logo">
          Logo
          <ul class="menu">
            <li><a href="#about">About Me</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#workshops">Workshops</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#rates">Rates & Bookings</a></li>
          </ul>
      </div>
      </section>

      <!----- About Section ----->

      <section class="aboutSection" id="about">
        <div class="clamp-1280">About Sections goes here
          <div class="title"></div>
          <div class="aboutImg">
            <img src="" alt="About IMG goes here">
          </div>
          <div class="aboutText">About Text goes here</div>
        </div>
      </section>




    </div>
</template>

<style lang="less">
  @import "css/global.less";
  @import url('https://fonts.googleapis.com/css?family=Comfortaa:400,700&display=swap');

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
