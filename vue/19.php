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
        <button @click="title = 'Updated title'">Updated title</button>
    </div>
    <hr>
    <div id="app2">
        <h2>{{title}}</h2>
        <button @click="updateFirstTitle">Update First Title</button>
    </div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script>
    var vue1 = new Vue({
        el:'#app',
        data: {
            title: 'Hello i\'m Vue !!!'
        },
        methods: {
            changeName: function (event) {
                this.name = event.target.value
            }
        }
    });
    new Vue({
        el:'#app2',
        data:{
            title:'Hello from Vue 2'
        },
        methods:{
            updateFirstTitle :function f() {
                vue1.title = 'Updated from second app '
            }
        }

    });
</script>
</body>
</html>