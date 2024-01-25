<template>
  <div class="app-main-layout">
    <Navbar @click="isOpen = !isOpen"/>

    <Sidebar v-model="isOpen"/>

    <main class="app-content" :class="{full: !isOpen}">
      <div class="app-page">
        <router-view/>
      </div>
    </main>

    <AddButton/>
  </div>
</template>

<script>
import Sidebar from '@/components/SidebarComponent'
import Navbar from '@/components/NavbarComponent'
import AddButton from '@/components/AddButtonComponent'

export default {
  name: 'main-layout',
  data: () => ({
    isOpen: true,
  }),
  components: {
    Sidebar, Navbar, AddButton
  }
}
</script>
