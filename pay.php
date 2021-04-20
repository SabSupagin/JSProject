<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOBLIE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://unpkg.com/vue@next"></script>
</head>
<body>

    <div id="app">
        <div class="container">
            <div class="col-md-4">
                <center>
                <button class="btn btn-primary" @click="GoCart()">รถเข็น</button>
                <button class="btn btn-primary" @click="apcent()">ยืนยันการชำระ</button>
                </center>
              </div>
        </div>
    </div>

    
    <script src="./Main.js"></script>

    <script>
        const mountedApp = app.mount('#app')
    </script>

   

</body>
</html>

