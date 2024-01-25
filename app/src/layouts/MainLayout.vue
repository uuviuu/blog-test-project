<template>
  <Sidebar/>
  <Navbar/>
  <AddButton/>
</template>

<script>
import Sidebar from '@/components/SidebarComponent'
import Navbar from '@/components/NavbarComponent'
import AddButton from '@/components/AddButtonComponent'

export default {
  name: 'main-layout',
  components: {
    Sidebar, Navbar, AddButton
  }
}
</script>
