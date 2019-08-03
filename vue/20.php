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
        <h2 ref="heading">{{title}}</h2>
        <button @click="upadteFirstTitle()">Update title</button>
        <hr ref="horLine">
    </div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script>
    new Vue({
        el:'#app',
        data: {
            title: 'Hello i\'m Vue !!!'
        },
        methods: {
            upadteFirstTitle: function (event) {
                this.title = 'New title!';
                this.$refs.heading.style.color = 'red';
                console.log(this.$refs.heading);
                console.log(document.querySelector('hr'));
            }
        }
    });
</script>
</body>
</html>