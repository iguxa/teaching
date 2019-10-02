<template>
    <div>
        <input type="text" v-model="searchName">


        <ul>
            <li v-for="name of filteredNames">{{name}}</li>
        </ul>
    </div>
</template>

<script>
    import ListMixin from './listMixin';
    export default {
        name: "List",
        mixins:[ListMixin]

    }
</script>

<style scoped>

</style>