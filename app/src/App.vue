<template>
  <div id="app">
    <MainLayout/>
  </div>
</template>

<script>
import MainLayout from '@/layouts/MainLayout'
import dateFilter from "@/filters/dateFilter";

export default {
  name: 'app-base',
  components: {
    MainLayout
  },
  filters: {
    'dateFilter': dateFilter
  }
}
</script>

<style lang="scss">
@import "~materialize-css/dist/css/materialize.min.css";
@import "@/assets/css/index.css";
</style>
