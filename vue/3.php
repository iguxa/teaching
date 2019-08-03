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
        <h2>
            <a v-bind:href="url">Google</a>
        </h2>
        <h2 v-html="link">

        </h2>
    </div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script>
    new Vue({
        el:'#app',
        data: {
           url: 'http://google.com',
           link: '<a href="http://google.com">Google</a>'
        },
    })
</script>
</body>
</html>