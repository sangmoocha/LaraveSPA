<style lang="scss" scoped>
    
</style>

<template>
    <div id='calendar'>
        {{ welcome }}
    </div>
</template>

<script>
    export default {
        name: 'home',
        computed: {
            welcome() {
                return this.$store.getters.welcome
            }
        },
        mounted() {
            
        }
    }
</script>
