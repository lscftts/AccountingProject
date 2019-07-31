<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Insert Data</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <script>
        function pageLoad() {
            //1024 * 1024 = 1 MB
            var db = openDatabase('database/database.sqlite', '1.0', 'test database', 1024 * 1024);
            document.getElementById('get').addEventListener('click', onGetData, false);
            function onGetData() {
                db.readTransaction(function (t) {
                    t.executeSql('select * from tCustomer', [], SetData);
                });
            }
        }
    </script>

    </head>
    <body onload="pageLoad();">
    <input value="取得資料" id="get" type="button"><br>
    </body>
</html>
