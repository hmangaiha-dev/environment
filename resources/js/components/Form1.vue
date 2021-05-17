<template>
    <div >
        <!-- <h3 class="text-center">Create Product</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addValues">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="forms.name">
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" class="form-control" v-model="forms.email">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div> -->

        <div class=" mx-auto flex items-center justify-center w-full">
<!-- max-w-lg -->
        <form class="w-1/2 " @submit.prevent="addValues">
          <p class="text-gray-700  text-center text-2xl font-bold my-3">FORM - I<br>
FORM OF APPLICATION FOR PERMISSION TO FELL TREES/TREE
PLANTATION IN NON-FOREST AREA </p>
          <div class="flex flex-wrap -mx-3 mb-6 my-16">
            <div class="w-full md:w-1/2 px-3 mb-9 md:mb-0 ">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              1.Name of Applicant 
              </label>
              <input v-model="forms.name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="name">
              <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
            </div>
            <div class="w-full md:w-1/2 px-3 ">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              2.Father's Name
              </label>
              <input v-model="forms.fathersname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Father's name">
            </div>


            <div class="w-full mb-10 px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 my-2" for="grid-last-name">
             3.Address (Village/Town/Station/Dist.) 
              </label>
              <input v-model="forms.address" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Address">
            </div>


            <p class="text-gray-700 font-bold mb-4 px-3 uppercase"> 4. Location of trees/tree plantation: </p>

            <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 px-3 mb-4">
              <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
             a)Area
              </label>
              <input v-model="forms.area" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Area">
            </div>
            
            <div class="w-full md:w-1/2 px-3 mb-auto">
              <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
             b) Boundaries
              </label>
              <input v-model="forms.boundaries" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Boundaries">
            </div>
            
            <div class="w-full md:w-1/2 px-3 mb-4">
              <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              c) Reference to Patta/License of the land (Copy enclosed)
              </label>
              <input v-model="forms.reference" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Reference">
            </div>

           
    <!-- <label class="w-16 flex flex-col items-center px-3 py-3 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="mt-2 text-base leading-normal">Select a file</span>
        <input type='file' class="hidden" />
    </label> -->

</div>

            <div class="w-full md:w-1/2 px-3 mb-4">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
             5. Species of trees/tree plantation 
              </label>
              <input v-model="forms.treespecies" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Tree species">
            </div>

             <div class="w-full md:w-1/2 px-3 mb-4">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            6. Year of raising the plantation
              </label>
              <input v-model="forms.treespecies" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Tree species">
            </div>

 <div class="w-full md:w-1/2 px-3 mb-4">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
             7. Reference to registration of the trees/tree plantation (enclosed certifies)
              </label>
              <input v-model="forms.treespecies" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Tree species">
            </div>

 <div class="w-full md:w-1/2 px-3 mb-4">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
             8. Nature of felling (viz. thinning/final felling)
              </label>
              <input v-model="forms.treespecies" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Tree species">
            </div>

 <div class="w-full md:w-1/2 px-3 mb-4">
              <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
             a) For bona fide personal use. 
              </label>
              <input v-model="forms.treespecies" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Tree species">
            </div>

 <div class="w-full md:w-1/2 px-3 mb-4">
              <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
             b) For sale within Mizoram. 
              </label>
              <input v-model="forms.treespecies" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Tree species">
            </div>

 <div class="w-full md:w-1/2 px-3 mb-4">
              <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
             c) For sale outside Mizoram.
              </label>
              <input v-model="forms.treespecies" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Tree species">
            </div>

 <div class="w-full md:w-1/2 px-3 mb-4">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            10. No. of trees purposed to be felled
              </label>
              <input v-model="forms.treespecies" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Tree species">
            </div>
            
            <div class="w-full md:w-1/2 px-3 mb-4">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            11. The route by which the felled timber will be transported 
              </label>
              <input v-model="forms.treespecies" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Tree species">
            </div>
            
            <div class="w-full md:w-1/2 px-3 mb-4">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            12. Period of operation purposed (Not to
exceed one year in any case) 
              </label>
              <input v-model="forms.treespecies" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Tree species">
            </div>

          



          </div>


       <button class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" >Submit</button>
        </form>
        
              
              </div>
    </div>

  



</template>
 
<script>
import axios from 'axios';
    export default {
        data() {
            return {
                forms: {}
            }
        },
        methods: {
            addValues() {
                axios
                    .post('http://localhost:8000/api/form', this.forms)
                    .then(response => (
                        this.$router.push({ path: '/' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>