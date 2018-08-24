<html>
<head>
  <meta charset="utf-8">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
    <body >
    <header>
        <h1>Users</h1>
    </header>
    <article>
        <div id="app">
            <App></App>
        </div>
    </article>
        <script>window.user={!! json_encode($users) !!};</script>
        <script src="/js/app.js"></script>
        <!-- <script src="/js/users.js"></script> -->
    </body>
</html>
<style>
    header{
        height:30px;
        padding-left: 30px;  
        font-family: "Avenir", Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        color: #2c3e50;
        margin-top: 0px;
    }
</style>