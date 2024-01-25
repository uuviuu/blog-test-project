<template>
  <div id="app">
    <MainLayout/>
  </div>
</template>

<script>
import MainLayout from '@/layouts/MainLayout'

export default {
  name: 'app-base',
  components: {
    MainLayout
  }
}
</script>

<style lang="scss">
@import "~materialize-css/dist/css/materialize.min.css";
@import "@/assets/css/index.css";
</style>
