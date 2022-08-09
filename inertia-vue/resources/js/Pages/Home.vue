<template>
    <layout>
        <div class="container">
            <div class="row text-center mt-5 alert alert-info">
                <h5>{{ name }}, welcome my studies of InertiaJS + VueJS + Laravel ! </h5>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from '../Layout';

export default {
    components: { Layout },
    props: {
        name: String
    }
}
</script>

<style>
</style>