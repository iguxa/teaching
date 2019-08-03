<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <h2>{{title}}</h2>
        <button @click="title='Changed Title'">Change</button>
        <button @click="doDestroy">Destroy</button>
    </div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script>
    var vue = new Vue({
        el:'#app',
        data: {
            title: 'Hello i\'m Vue !!!'
        },
        beforeCreate:function () {
            console.log('Before Create');
        },
        created:function () {
            console.log('Created');
        },
        beforeMount:function () {
            console.log('Before Mount')
        },
        mounted:function () {
            console.log('Mounted')
        },
        beforeUpdate:function () {
            console.log('Before Updated')
        },
        updated:function () {
            console.log('Updated')
        },
        beforeDestroy:function () {
            console.log('Before Destroy')
        },
        destroyed:function () {
            console.log('Destroyed')
        },
        methods:{
            doDestroy:function () {
                this.$destroy();
            },
        }

    });

</script>
</body>
</html>