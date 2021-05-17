@extends('layouts.app')
@section('content')
<span class="text-gray-700 font-bold">ENVIRONMENT, FOREST & CLIMATE CHANGE DEPARTMENT</span>

<div class="flex bg-gray-100 border-b border-gray-300 py-4">

    <div class="container mx-auto">
        <router-link class=" mr-4" to="/" exact >Home</router-link>
        {{-- <router-link class=" mr-4" to="/about">About </router-link> --}}
        <router-link class=" mr-4" to="/forms1list">List</router-link>
        <router-link class=" mr-4" to="/forms1">Add</router-link>

        <router-link class=" mr-4" to="/login">Login</router-link>
        <router-link class=" mr-4" to="/register">Register</router-link>


    </div>
</div>
<div class="container mx-auto py-2 ">
    <router-view></router-view>

</div>
@endsection