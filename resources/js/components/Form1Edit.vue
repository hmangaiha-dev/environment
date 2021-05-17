<template>
  <div >
       
        <div class="container mx-auto flex items-center justify-center">

        <form class="w-full max-w-lg" @submit.prevent="updateDetails">
          <p class="text-gray-700  text-center text-2xl font-bold my-3">
EDIT  </p>
          <div class="flex flex-wrap -mx-3 mb-6 my-16">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              Name
              </label>
              <input v-model="forms.name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="name">
              <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
            </div>
            <div class="w-full md:w-1/2 px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              Email
              </label>
              <input v-model="forms.email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="email">
            </div>
          </div>
       <button class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" >Submit</button>
        </form>
        
              
              </div>
    </div>

</template>
 
<script>
    export default {
        data() {
            return {
                forms: {}
            }
        },
        created() {
            axios
                .get(`http://localhost:8000/api/form/${this.$route.params.id}`)
                .then((response) => {
                    this.forms = response.data;
                });
        },
        methods: {
            updateDetails() {
                axios
                    .patch(`http://localhost:8000/api/form/${this.$route.params.id}`, this.forms)
                    .then((res) => {
                        this.$router.push({path: '/forms1list' });
                    });
            }
        }
    }
</script>