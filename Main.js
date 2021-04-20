const app = Vue.createApp({
    data(){
        return{
            NameShop: 'Moblie',
            Total:0,
            cart: [],
            users:[
                {
                    user: "Supagin",
                    password: 12345
                },
                {
                    user: "Chengkhao",
                    password: 1234
                }       
            ],
            amount: 0,
            Tests:[
                {
                    id:1,
                    name: 'Sumsung',
                    price:10,
                    image: './images/2.png',
                    active: false,
                    qty:10,
                    color: ["Black","Gold","Blue"]
                },
                {
                    id:2,
                    name: 'I Phone',
                    price:150,
                    image: './images/1.png',
                    active: false,
                    qty:5,
                    color: ["Black","Gold","Blue"]
                },
                {
                    id:3,
                    name: 'Realme',
                    price:150,
                    image: './images/5.png',
                    active: false,
                    qty:9,
                    color: ["Black","Gold","Blue"]
                },
                {
                    id:3,
                    name: 'Xiaomi',
                    price:150,
                    image: './images/3.png',
                    active: false,
                    qty:20,
                    color: ["Black","Gold","Blue"]
                },
                {
                    id:3,
                    name: 'Huawei',
                    price:150,
                    image: './images/2.png',
                    active: false,
                    qty:0,
                    color: ["Black","Gold","Blue"]
                },
                
            ]
        }
    },

    methods: {
        gopay(){
            location.href='pay.php'
        },
        GoCart(){
            location.href='cart.php'
        },
        goback(){
            location.href='index.html'
        },
        logout(){
            if(confirm("คุณต้องการออกจากระบบใช่หรือไม่ !!"))
            location.href='login.php'
        },
        login(uname,psw){
            for(let i = 0;i <= this.users.length;i++){
                if(psw == this.users[i].password && uname == this.users[i].user){
                    alert("รหัสผ่านถูกต้อง !!")
                    location.href='index.html'
                }
            }
        },
        signup(){
            location.href='signup.php'
        },
        signupinfo(email,psw,pswrepeat){
            location.href='login.php'
            this.users.push({
                user:email,
                password:psw
            })
        },
        apcent(){
            if(confirm("ยืนยันการสั่งซื้อ!!")){
                location.href='index.html'
            }
        },
        addtocart(Test,user) {
            Test.qty -= 1
            this.Total += Test.price
            var number = 1
            console.log(user)   
            this.cart.push({
                id:Test.id,
                name:Test.name,
                price:Test.price,
                image:Test.image,
                qty:Test.qty,
                active:Test.active,
                total:number
            })    
        },
        remove(Test){
            if(confirm("คุณต้องการลบใช่ไหม!")){
                var index = this.cart.indexOf(Test)
                this.cart.splice(index, 1)
            }

        },
        
    }
})

