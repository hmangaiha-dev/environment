<template>
  <div>
      <input type="text" v-model="form.name"/>
      <input type="email" v-model="form.email"/>
      <input type="password" v-model="form.password"/>
      <input type="password" v-model="form.password_confirmation"/>
      <button @click.prevent="register">register</button>

  </div>
</template> 

<script>
export default {
    data(){
        return{
            form:{
                name:'',
                email:'',
                password:'',
                password_confirmation:'',
            },
            errors:[]
        }
    },
    methods:{
        register(){
            axios.post(`/api/register`,this.form)
            .then(()=>{
                    console.log('Svaed')
                    
            })
            .catch(error =>{
                console.log(error)
                
            })

        }

    }
}
</script>

<style>

</style>