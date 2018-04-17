<template>

    <p>
        this is the vue component
    </p>

</template>

<script>
    export default {
        props: ['user'],
        mounted () {
            alert('User Clicking System');
        }
    }
</script>

<style>
    
</style>