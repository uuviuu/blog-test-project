<template>
  <nav class="navbar orange lighten-1">
    <div class="nav-wrapper">
      <div class="navbar-left">
        <a href="#">
          <i class="material-icons black-text">dehaze</i>
        </a>
        <span class="black-text">12.12.12</span>
      </div>

      <ul class="right hide-on-small-and-down">
        <li>
          <a
              class="dropdown-trigger black-text"
              href="#"
              data-target="dropdown"
          >
            USER NAME
            <i class="material-icons right">arrow_drop_down</i>
          </a>

          <ul id='dropdown' class='dropdown-content'>
            <li>
              <a href="#" class="black-text">
                <i class="material-icons">account_circle</i>Профиль
              </a>
            </li>
            <li class="divider" tabindex="-1"></li>
            <li>
              <a href="#" class="black-text">
                <i class="material-icons">assignment_return</i>Выйти
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <div id="nav">
    <ul class="sidenav app-sidenav open">
      <li>
        <router-link class="waves-effect waves-orange pointer" to="/">На главную</router-link>
      </li>
      <li>
        <router-link class="waves-effect waves-orange pointer" to="/record">Счет</router-link>
      </li>
      <li>
        <router-link class="waves-effect waves-orange pointer" to="/history">История</router-link>
      </li>
      <li>
        <router-link class="waves-effect waves-orange pointer" to="/planning">Планирование</router-link>
      </li>
      <li>
        <router-link class="waves-effect waves-orange pointer" to="/categories">Категории</router-link>
      </li>
      <li>
        <router-link class="waves-effect waves-orange pointer" to="/login">Авторизация</router-link>
      </li>
      <li>
        <router-link class="waves-effect waves-orange pointer" to="/register">Регистрация</router-link>
      </li>
      <li>
        <router-link class="waves-effect waves-orange pointer" to="/profile">Профиль</router-link>
      </li>
    </ul>
  </div>
  <router-view/>

  <div class="fixed-action-btn">
    <a class="btn-floating btn-large blue" href="#">
      <i class="large material-icons">add</i>
    </a>
  </div>
</template>

<style lang="scss">
@import "~materialize-css/dist/css/materialize.min.css";
@import "assets/css/index.css";
</style>