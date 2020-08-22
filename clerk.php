<?php
    $mode ="店員";
    $edit = "<button class ='edit-btn' onclick='edit();'></button>";
    require "header.php";
    require "menu.php";
    require "footer.php";
?>

<div class = "overlay">

    <div class ="olc-wrapper">
    <ul　class ="order-list" id ="ol-container">
        
    </ul>
    </div>

    <div class ="order-action">
        <button>注文</button>
        <p class ="total-price">1000</p>
        <button>注文</button>
    </div>

</div>


<style>

    .nav-header{
        background:linear-gradient(to right,#5CCDFF , #2B73FF);
    }

    .tab.sel{
        border-bottom:5px #5CCDFF solid;
    }

    .action-btn{
        background-color:#5CCDFF;
        background-image:url('images/cart.png');
    }

    .overlay{
        display:none;
    }

    .overlay.show{
        display:block;
        z-index:100;
        position:absolute;
        bottom:15vh;
        background-color:rgba(0,0,0,0.7);
        height:calc(85vh - 56px);
        width:100%;
        overflow:auto;
    }

    .order-wrapper{
        background-color:#EFEFEF;
        display:flex;
        justify-content:space-around;
        margin:16px;
        padding:11px;
        border-radius:20px;
    }

    .olc-wrapper{
        margin-bottom:15vh;
    }


    .order-action{
        position:fixed;
        bottom:15vh;
        width:100%;
        display:flex;
        justify-content:space-between;
        background-color:#C6BFBF;
    }

    .calc-btn{
        border-radius:50px;
        border:none;
        outline:none;
        background:#FFF;
        height:5vh;
        width:5vh;
        align-self:center;
    }


</style>

<script>

    let actionBtn = document.querySelector('.action-btn');

    function updateprice(){

        let totalprice = document.querySelectorAll('.total-price')[0];

        let price = document.querySelectorAll('.price-text');

        let amount = document.querySelectorAll('.item-amount');

        console.log(price);

    }


    function addtocart(x){

        let child = x.children;
        let orderList = document.getElementById('ol-container');

        console.log(x.value);

        x.value++;

        let amount= child[0].innerHTML = x.value;



        //Indicator Handling
        if(child[0].innerHTML <= 0){
            console.log("Less than 0");
            child[0].classList.remove('able');
        }

        else if(child[0].innerHTML > 0){
            child[0].classList.add('able');
        }

        
        /*
        let infoArr = [];

        console.log(orderList);

        infoArr.push(child[2].innerHTML);

        localStorage.setItem(child[1].innerHTML,infoArr);

        console.log(child);
        */

        //New Tabs Screen

        if(x.classList.contains('added')){

            console.log("contains");
            updateprice();
        }

        else if(x.classList.contains('added') == false){
            console.log("nope");

            let newLi = document.createElement('li');
            newLi.className ="order-wrapper";

            let newImg = document.createElement('img');
            newImg.className ="item-image";
            newImg.src = child[1].src;

            let newP1 = document.createElement('p');
            newP1.className="item-name";
            newP1.innerHTML = child[2].innerHTML;

            let newP2 = document.createElement('p');
            newP2.className ="price-txt";
            newP2.innerHTML = child[3].innerHTML;

            let newBtn1 = document.createElement('button');
            newBtn1.className ="calc-btn minus";
            newBtn1.innerHTML = "-";

            let newP3 = document.createElement('p');
            newP3.className ="item-amount";
            newP3.innerHTML = amount;

            let newBtn2 = document.createElement('button');
            newBtn2.className ="calc-btn add";
            newBtn2.innerHTML = "+";

            newLi.appendChild(newImg);
            newLi.appendChild(newP1);
            newLi.appendChild(newP2);
            newLi.appendChild(newBtn1);
            newLi.appendChild(newP3);
            newLi.appendChild(newBtn2);

            orderList.appendChild(newLi);

            x.classList.add('added');
        }


    }

    actionBtn.addEventListener('click',function(){

        let overlay = document.querySelectorAll('.overlay');

        overlay[0].classList.toggle('show');

    },false);
    

</script>