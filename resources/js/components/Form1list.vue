<template>
    <div>
        <h2 class="text-center">List</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>fathersname</th>
                <th>Action</th>
         
            </tr>
            </thead>
            <tbody>
            <tr v-for="form in forms" :key="form.id">
                <td>{{ form.name}}</td>
                <td>{{ form.fathersname }}</td>
          
               <td>
                   <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: form.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteForm(form.id)">Delete</button>

                    </div>
                   
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
import axios from 'axios'
    export default {
        data() {
            return {
                forms:[],
            }
        },
        created() {
            axios
                .get('http://localhost:8000/api/form/')
                .then(response => {
                    this.forms = response.data;
                });
        },
        methods: {
            deleteForm(id) { 
                axios
                    .delete(`http://localhost:8000/api/form/${id}`)
                    .then(response => {
                        let i = this.forms.map(data => data.id).indexOf(id);
                        this.forms.splice(i, 1)
                    });
            }
        }
    }
</script>