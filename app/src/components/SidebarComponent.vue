<template>
  <div id="nav">
    <ul class="sidenav app-sidenav" :class="{open: modelValue}">
      <li>
        <router-link
          class="waves-effect waves-orange pointer"
          active-class="active"
          v-for="link in links"
          :key=link.url
          :to=link.url>
          {{ link.title }}
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ['modelValue'],
  data: () => ({
    links: [
      {title: 'Счет', url: '/'},
      {title: 'Новая запись', url: '/record'},
      {title: 'История', url: '/history'},
      {title: 'Планирование', url: '/planning'},
      {title: 'Категории', url: '/categories'},
      {title: 'Авторизация', url: '/login'},
      {title: 'Регистрация', url: '/register'},
      {title: 'Профиль', url: '/profile'},
    ]
  })
}
</script>
