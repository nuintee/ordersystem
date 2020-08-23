
    <ul class ="tab-container">
        <li class ="tab sel" onclick ="tabchange(this);" value="1">食事</li>
        <li  class ="tab" onclick ="tabchange(this);" value="2">軽食</li>
        <li  class ="tab" onclick ="tabchange(this);" value="3">スープ</li>
        <li  class ="tab" onclick ="tabchange(this);" value="4">飲み物</li>
        <li  class ="tab" onclick ="tabchange(this);" value="5">スイーツ</li>
        <li  class ="tab" onclick ="tabchange(this);" value="6">サービス</li>
    </ul>

    <ul class ="item-container active" id ="menu1">
        <li class ="items" onclick="addtocart(this);"　value = "1"><p class ="amount-indicator">0</p><img class ="item-image" src="./images/chickencheese.png" alt=""><p class ="item-name">チーズ唐揚げ</p><p class ="price-txt">200</p></li>
        <li class ="items" onclick="addtocart(this);"　value = "1"><p class ="amount-indicator">0</p><img class ="item-image"  src="./images/steak.png" alt=""><p class ="item-name">ハンバーグ</p><p class ="price-txt">1000</p></li>
        <li class ="items" onclick="addtocart(this);"　value = "1"><p class ="amount-indicator">0</p><img class ="item-image"  src="./images/fish.png" alt=""><p class ="item-name">魚</p><p class ="price-txt">1</p></li>
    </ul>

    <ul class ="item-container" id ="menu2">
        <li class ="items" onclick="addtocart(this);"　value = "1"><p class ="amount-indicator">0</p><img class ="item-image"  src="./images/toastandegg.png" alt=""><p class ="item-name">トースト(卵)</p><p class ="price-txt">200</p></li>
        <li class ="items" onclick="addtocart(this);"　value = "1"><p class ="amount-indicator">0</p><img class ="item-image"  src="./images/rice.png" alt=""><p class ="item-name">米</p><p class ="price-txt">100</p></li>
        <li class ="items" onclick="addtocart(this);"　value = "1"><p class ="amount-indicator">0</p><img class ="item-image"  src="./images/natto.png" alt=""><p class ="item-name">納豆</p><p class ="price-txt">10</p></li>
    </ul>

    <ul class ="item-container" id ="menu3">
        <li class ="items" onclick="addtocart(this);"　value = "1"><p class ="amount-indicator">0</p><img class ="item-image"  src="./images/soup-s.png" alt=""><p class ="item-name">スープ(ホ)</p><p class ="price-txt">100</p></li>
        <li class ="items" onclick="addtocart(this);"　value = "1"><p class ="amount-indicator">0</p><img class ="item-image"  src="./images/soup-m.png" alt=""><p class ="item-name">スープ(キ)</p><p class ="price-txt">100</p></li>
    </ul>

    <ul class ="item-container" id ="menu4">
        <li class ="items" onclick="addtocart(this);"　value = "1"><p class ="amount-indicator">0</p><img class ="item-image"  src="./images/coffee.png" alt=""><p class ="item-name">コーヒー</p><p class ="price-txt">100</p></li>
        <li class ="items" onclick="addtocart(this);"　value = "1"><p class ="amount-indicator">0</p><img class ="item-image"  src="./images/water-glass.png" alt=""><p class ="item-name">水</p><p class ="price-txt">0</p></li>
    </ul>

    <ul class ="item-container" id ="menu5">
        <li class ="items" onclick="addtocart(this);"　value = "1"><p class ="amount-indicator">0</p><img class ="item-image"  src="./images/gummy.png" alt=""><p class ="item-name">グミ</p><p class ="price-txt">10</p></li>
        <li class ="items" onclick="addtocart(this);"　value = "1"><p class ="amount-indicator">0</p><img class ="item-image"  src="./images/milkandcookie.png" alt=""><p class ="item-name">クッキー牛乳</p><p class ="price-txt">100</p></li>
    </ul>

    <ul class ="item-container" id ="menu6">

    </ul>


<style>

    body{
        margin:0;
    }

    .tab-container{
        margin:0;
        padding:0;
        background-color:red;
        display:flex;
        list-style:none;
        justify-content:space-between;
    }

    .tab{
        text-align:center;
        background-color:gray;
        width:100%;
        font-size:13px;
        padding:8px 0 5px 0;
        background-color:#EFEFEF;
        color:#C6BFBF;
    }

    .tab.sel{
        background-color:#FFF;
        color:#101010;
    }

    .item-container{
        display:none;
    }

    .item-container.active{
        margin:0;
        list-style:none;
        padding:16px;
        display:flex;
        justify-content:space-between;
        flex-wrap:wrap;
    }

    .items{
        position:relative;
        text-align:center;
        background-color:#EFEFEF;
        width:30%;
        padding:11px;
        box-sizing:border-box;
        border-radius:20px;
    }

    .amount-indicator{
        display:none;
    }

    .amount-indicator.able{
        z-index:2;
        display:block;
        text-align:center;
        vertical-align:center;
        position:absolute;
        top:0;
        right:0;
        transform:translate(25%,-25%);
        z-index:100;
        background:linear-gradient(to right,#5CCDFF , #2B73FF);
        border-radius:100%;
        margin:0;
        box-sizing:border-box;
        color:#fff;
        font-size:11px;
        font-weight:bold;
        padding:16px;
    }

    .item-image{
        height:5vh;
        width:5vh;
        object-fit:contain;
        margin:11px;
    }

    .item-name{
        text-align:center;
        font-size:11px;
        font-weight:bold;
        color:#767676;
        margin:0;
        align-self:center;
    }

    .price-txt{
        text-align:center;
        font-size:11px;
        color:#C6BFBF;
        margin:0;
        align-self:center;
    }

</style>

<script>

    function tabchange(x){
        let tabs = document.querySelectorAll('.sel');
        let containers = document.querySelectorAll('.active');
        console.log(tabs);
        tabs[0].classList.remove("sel");
        x.classList.add('sel');
        console.log('menu'+x.value);
        containers[0].classList.remove('active');
        document.querySelectorAll('#'+'menu'+x.value)[0].classList.add('active');
    }

</script>