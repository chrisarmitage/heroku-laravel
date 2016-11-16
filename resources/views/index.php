<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vue tutorial</title>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
</head>
<body>
<h3>Catalog</h3>

<div id="app">
    <ul>
        <catalog-item v-for="item in items" v-bind:item="item"></catalog-item>
    </ul>
</div>

<script>
    Vue.component('catalog-item', {
        props: ['item'],
        template: '<div class="row"><div class="col s12 m6"><div class="card blue-grey darken-1">'
        + '<div class="card-content white-text"><span class="card-title">{{ item.name }}</span><p>{{ item.description }}</p>'
        + '</div><div class="card-action"><a href="#">View</a></div></div></div></div>'
    });

    var app = new Vue({
        el: '#app',
        data: {
            items: []
        }
    });

    var items = $.get(
            //'http://obscure-atoll-24691.herokuapp.com/items',
            '/api/items',
            {},
            function (data) {
                console.log(data);
                app.items = data;
            }
    )

</script>

</body>
</html>
