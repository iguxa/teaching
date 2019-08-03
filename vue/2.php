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
        <h1>String: {{ name }}</h1>
        <h1>Sum: {{ 10 + 60 }}</h1>
        <h1>Number: {{number + 22}}</h1>
        <h1>Method: {{ sayHello() }}</h1>
        <h1>If statment: {{ isOk ? 'i\'m ok' : 'i\'m not ok' }}</h1>
        <h1>Functions : {{string.split('').reverse().join('')}}</h1>
    </div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script>
    new Vue({
        el:'#app',
        data: {
            name: 'Vue !!!',
            number: 100,
            isOk:false,
            string: 'My name is Vlad'
        },
        methods: {
            sayHello: function () {
                return 'I\'m function '
            }
        }
    })
</script>
</body>
</html>