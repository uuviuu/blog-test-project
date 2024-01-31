<template>
  <div class="grey darken-1 empty-layout">
    <form class="card auth-card" @submit.prevent="submitHandler">
      <div class="card-content">
        <span class="card-title">Блог</span>
        <div class="input-field">
          <input
            id="email"
            type="text"
            v-model.trim="email"
            :class="v$.email"
          >
          <label for="email">Email</label>
          <small class="helper-text invalid">Email</small>
        </div>
        <div class="input-field">
          <input
            id="password"
            type="password"
            v-model.trim="password"
            :class="v$.password"
          >
          <label for="password">Пароль</label>
          <small class="helper-text invalid">Password</small>
        </div>
        <p v-for="error of v$.$errors" :key="error.$uid">
          {{ error.$message }}
        </p>
      </div>
      <div class="card-action">
        <div>
          <button
            class="btn waves-effect waves-light auth-submit"
            type="submit"
          >
            Войти
            <i class="material-icons right">send</i>
          </button>
        </div>

        <p class="center">
          Нет аккаунта?
          <router-link to="/register">Зарегистрироваться</router-link>
        </p>
      </div>
    </form>
  </div>
</template>

<script>
import {useVuelidate} from '@vuelidate/core'
import {email, required, minLength} from '@vuelidate/validators'

export default {
  name: 'login-form',
  setup: () => ({v$: useVuelidate()}),
  data: () => ({email: '', password: ''}),
  validations() {
    return {
      email: {email, required},
      password: {required, minLength: minLength(6)},
    }
  },
  methods: {
    async submitHandler() {
      const result = await this.v$.$validate()
      if (!result) {
        return
      }
      this.$router.push('/')
    }
  }
}
</script>
