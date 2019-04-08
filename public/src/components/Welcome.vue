<template>
    <div class="welcome bg-primary text-white  border-0 shadow">
        {{ msg }}
    </div>
</template>

<script>
    export default {
        props: {
            name: {
                type: String,
                required: true
            },
        },
        data() {
            return {
                msg: ""
            }
        },
        mounted() {
            this.greetings();
        },
        methods: {
            greetings() {
                this.msg += `Hi, My name is ${this.name} and welcome to your first vue component`;
            },
        }
    };
</script>

<style>
    .welcome {
        padding: 10px;
        border-radius: 4px;
        width: 50vh;
        text-align: center;
        margin: auto;
    }
</style>