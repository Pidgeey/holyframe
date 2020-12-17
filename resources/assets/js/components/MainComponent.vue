<template>
    <div>
        <h1>{{ message }}</h1>
    </div>
</template>

<script>
    export default {
        props: {
            message: {
                type: String,
                required: true
            }
        },
        name: 'MainComponent',
        data:() => ({

        })
    };
</script>

<style scoped>
    h1 {
        text-align: center;
    }
</style>