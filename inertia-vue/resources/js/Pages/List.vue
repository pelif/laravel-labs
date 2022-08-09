<template>
    <layout>
        <div class="container">
            <ul>
                <li v-for="item in list" :key="item.id">
                    {{ item.name }}
                </li>
            </ul>
        </div>
    </layout>
</template>

<script>
import Layout from '../Layout'

export default { 
    components: {
        Layout
    },
    props: {
        list: Object
    }
}
</script>