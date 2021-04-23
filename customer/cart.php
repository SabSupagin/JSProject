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
    <center>
    <h1>รถเข็น</h1>
    </center>
    <div id="app">
        <div class="container">
        <div class="col-md-12">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">จำนวน</th>
                            <th scope="col">ราคา</th>
                            <th scope="col">ลบ</th>
                          </tr>
    
                        </thead>
                        <tbody>
                        <tr v-for="Test in Tests">
                            <td><img v-bind:src="Test.image" style="width: 20%;"></td>
                            <td>{{  Test.qty  }}</td>
                            <td>{{  Test.price  }}</td>
                            <td>
                              <button class="btn btn-primary" @click="remove(Test)">Delete<img src="../images/8.png" style="width: 30px;"></button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                              <div class="col-md-12">
                                <center>
                                  <button class="btn btn-primary" @click="goback()" style="margin-right: 1cm;">กลับ<img src="../images/9.png" style="width: 30px;"></button>
                                <button class="btn btn-primary" @click="gopay()">ชำระเงิน<img src="images/7.png" style="width: 30px;"></button>
                                </center>
                              </div>
                            </td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
        </div>
    </div>

    
    <script src="../Main.js"></script>

    <script>
        const mountedApp = app.mount('#app')
    </script>

   

</body>
</html>

