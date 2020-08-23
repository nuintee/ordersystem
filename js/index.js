
//作動させるボタン
let button = document.getElementsByClassName('calc-btn');
//合計表示場所
let tot_price = document.getElementById('total-price');

//全ボタン用動作
for (let i = 0; i < button.length; i++) {
    
    button[i].addEventListener("click",function(){

        //品物の親元クラス
        let items = document.getElementsByClassName('items');
        //小計収納用配列
        let arr = [];

        //品物の個数分
        for (let i = 0; i < items.length; i++) {

            //品物の金額部分指定
            let price = items[i].children[0].value;

            //品物の量部分指定
            let amount = items[i].children[1].value;

            //金額x量の小計
            let sub_total = price * amount;

            //各々の小計を足す際の変数
            let add_total = 0;

            //配列に小計を追加
            arr.push(sub_total);

            //配列の個数分(1要素が1列の積)
            for (let i = 0; i < arr.length; i++) {

                //配列の個数分変数に積を1つずつ足していく
                add_total+= arr[i];
                
            }

            //合計表示内容の同期
            tot_price.innerHTML = add_total;
        }

    },false);
}
