<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <Link class="navbar-brand" href="#">$myFin$</Link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <Link class="nav-link" :href="route('home')">Home</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" :href="route('users.index')">Usuários</Link>
                    </li>                
                    <li class="nav-item">
                        <Link class="nav-link" href="#">Clientes</Link>
                    </li>                
                    <li class="nav-item">
                        <Link class="nav-link" href="#">Propostas</Link>
                    </li>                
                </ul>
            </div>
        </nav>
        <div class="container">
            <div v-if="$page.props.flash.message" class="alert alert-success">
                {{ $çage.props.flash.message }}
            </div>
            <slot/>
        </div>
    </div>    
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: { Link, }
}
</script>

<style>
</style>