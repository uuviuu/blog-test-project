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
        <div class="input-field">
          <input
            id="name"
            type="text"
            v-model.trim="name"
            :class="v$.name"
          >
          <label for="name">Имя</label>
          <small class="helper-text invalid">Name</small>
        </div>
        <p>
          <label>
            <input type="checkbox" v-model="agree"/>
            <span>С правилами согласен</span>
          </label>
        </p>
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
            Зарегистрироваться
            <i class="material-icons right">send</i>
          </button>
        </div>

        <p class="center">
          Уже есть аккаунт?
          <router-link to="/login">Войти!</router-link>
        </p>
      </div>
    </form>
  </div>
</template>

<script>
import {useVuelidate} from '@vuelidate/core'
import {email, required, minLength} from '@vuelidate/validators'

export default {
  name: 'register-form',
  setup: () => ({v$: useVuelidate()}),
  data: () => ({email: '', password: '', name: '', agree: false}),
  validations: {
    email: {email, required},
    password: {required, minLength: minLength(6)},
    name: {required},
    agree: {checked: v$ => v$},
  },
  methods: {
    async submitHandler() {
      const result = await this.v$.$validate()
      if (!result) {
        return
      }

      const formData = {
        email: this.email,
        password: this.password,
        name: this.name,
      }

      console.log(formData)

      this.$router.push('/')
    }
  }
}
</script>
