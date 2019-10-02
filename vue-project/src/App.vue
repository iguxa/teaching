<template xmlns:v-colored="http://www.w3.org/1999/xhtml">
  <div class="container">
    <form class="pt-3">
      <div class="form-group">
      <label for="email">Email</label>
      <input
              type="email"
              id="email"
              class="form-control "
              :class="{'is-invalid':$v.email.$error}"
              v-model="email"
              @input="$v.email.$touch()"
      >
      <div v-if="!$v.email.required" class="invalid-feedback">Email field is required</div>
      <div v-if="!$v.email.email" class="invalid-feedback">This field should be an email</div>
      <div v-if="!$v.email.uniqEmail" class="invalid-feedback">This email already exists</div>
    </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input
                type="password"
                id="password"
                class="form-control "
                :class="{'is-invalid':$v.password.$error}"
                v-model="password"
                @input="$v.password.$touch()"
        >
        <div v-if="!$v.password.minLength" class="invalid-feedback">Min length of password is {{$v.password.$params.minLength.min}}.Now it is {{password.length}}</div>
      </div>
      <div class="form-group">
        <label for="confirm">Confirm password</label>
        <input
                type="password"
                id="confirm"
                class="form-control "
                :class="{'is-invalid':$v.confirmPassword.$error}"
                v-model="confirmPassword"
                @input="$v.confirmPassword.$touch()"
        >
        <div v-if="!$v.confirmPassword.sameAs" class="invalid-feedback">Password should match</div>
      </div>
    </form>
  </div>
</template>

<script>
  import {required,email,minLength,sameAs} from 'vuelidate/lib/validators'
  export default {
  name: 'app',
    data(){
      return {
        email:'',
        password:'',
        confirmPassword:''
      }
    },
    validations:{
      email:{
        required,
        email,
        uniqEmail:function (newEmail) {
          //return newEmail !== 'test@mail.ru';
          return new Promise((resolve,reject)=>{
            setTimeout(()=>{
              const value = newEmail !== 'test@mail.ru';
              resolve(value)
            },3000)
          })
        }
      },
      password: {
        minLength:minLength(6)
      },
      confirmPassword:{
        sameAs:sameAs((vue)=>{
          return vue.password
        })

      }
    }
}
</script>

<style scoped>
  textarea{
    height: 100px;
    width: 400px;
  }
  p{
    white-space: pre;
  }
</style>
