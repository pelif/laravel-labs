<template>
    <layout>
        <div class="container mt-5">
            <div class="row text-end">
                <div class="col-md-12">
                    <Link      
                        :href="route('users.create')" 
                        class="btn btn-primary" 
                        data-bs-toggle="tooltip" 
                        data-bs-placement="bottom" 
                        title="Novo Usuário">
                        +
                    </Link>    
                </div>                
            </div>        
            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">E-mail</th>
                            <th scope="col"></th>                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users" :key="user.id">
                            <th scope="row">{{ user.id }}</th>
                            <td>{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <th>
                                {{ user.id }}
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>    
        </diV>
    </layout>
</template>

<script>
import Layout from '../../Layout'
import { Link } from '@inertiajs/inertia-vue3'

export default {
    mounted() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')); 
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl); 
        }); 
    }, 
    components: {
        Layout, 
        Link
    },
    props: {
        users: Object
    }    
}
</script>