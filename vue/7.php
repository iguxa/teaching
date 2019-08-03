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
        <h2>{{title}} = {{counter}}</h2>
        <button v-on:click="riseCounter(5,'Изменено на 5',$event)">Увеличить на 5</button>
        <button v-on:click="riseCounter(10,'Изменено на 10',$event)">Увеличить на 10</button>

    </div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script>
    new Vue({
        el:'#app',
        data: {
            counter: 0,
            title: ' Счетчик'
        },
        methods:{
            riseCounter : function (num,str,event) {
                this.counter += num;
                this.title = str;

                if(num == 5){
                    event.target.style.color = 'blue';
                }
                if (num == 10){
                    event.target.style.color = 'red';

                }
            },
        }
    })
</script>
</body>
</html>