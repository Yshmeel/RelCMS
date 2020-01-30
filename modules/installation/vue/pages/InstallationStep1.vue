<template>
    <div class="step1">
        <p>Wait, we are just checking CMS requirements to your server</p>
        <loader-icon></loader-icon>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {

            };
        },
        mounted() {
            axios.get("/api/v1/installation/check-requirements");
        }
    }
</script>