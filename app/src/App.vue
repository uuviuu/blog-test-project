<template>
  <h1>Blog</h1>
    <div id="nav">
      <router-link to="/">Home</router-link> |
      <router-link to="/login">Login</router-link> |
      <router-link to="/categories">Categories</router-link>
    </div>
    <router-view />
</template>

<style lang="scss">
@import "~materialize-css/dist/css/materialize.min.css";
@import "assets/css/index.css";
</style>