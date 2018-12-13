<style lang="scss" scoped>
    .row {
        margin: 0;
        padding: 0;
    }
</style>

<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header black">{{ welcome }}</div>

                <div class="card-body black">
                    I'm an Home component.
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'home',
        computed: {
            welcome() {
                return this.$store.getters.welcome
            }
        }
    }
</script>
