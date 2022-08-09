<template>
    <layout>
        <form @submit.prevent="submit">
            <div class="container mt-5">
                <div class="row">
                    <h5>Novo Usuário</h5>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="name" class="form-label">Nome</label>
                        <input 
                            type="text"
                            name="name"
                            class="form-control"
                            v-model="form.name">
                        <span 
                            v-if="errors.name" 
                            class="alert alert-danger">
                            {{ errors.name }}
                        </span>    
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label">E-mail</label>
                        <input 
                            type="email"
                            name="email"
                            class="form-control"
                            v-model="form.email">
                        <span 
                            v-if="errors.email" 
                            class="alert alert-danger">
                            {{ errors.email }}
                        </span>        
                    </div>
                    <div class="col-md-4">
                        <label for="password" class="form-label">Senha</label>
                        <input 
                            type="password" 
                            name="password" 
                            class="form-control"
                            v-model="form.password">
                        <span 
                            v-if="errors.password" 
                            class="alert alert-password">
                            {{ errors.password }}
                        </span>        
                    </div>
                    <div class="col-md-12 text-end">
                        <button 
                            type="submit" 
                            class="btn btn-primary col-md-3 mt-3">
                            Salvar
                        </button>
                    </div>
                </div>    
            </div>
        </form>
    </layout>
</template>

<script>
import Layout from '../../Layout'

export default {
    components: { Layout },
    props: {
        errors: Object,
    },
    data() {
        return {
            form: {
                name: null,
                email: null,
                password: null
            }
        }
    },
    methods: {
        submit() {
            this.$inertia.post('/users', this.form)
        }
    }
}
</script>

