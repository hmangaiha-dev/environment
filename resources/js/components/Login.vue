<template>
  <div>
      <input type="text" v-model="form.name">
      <input type="password" v-model="form.password">
      <button @click.prevent="loging">Login</button>

  </div>
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return{
            form:{
                name:null,
                password:null

            },
            errors:[]
        
        }
    },
    methods:{
        loging(){
            axios.post(`http://127.0.0.1:8000/api/login`,this.form)
            .then(() =>{
                this.$router.push({name:"dashboard"})
            })
            .catch(error=>{
                this.errors =error.response.data.errors;
            })
        }
    }

}
</script>

<style>

</style>