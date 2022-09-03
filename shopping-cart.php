<?php
require __DIR__. '/parts/meow_db.php';  // /開頭
$pageName ='購物車'; //頁面名稱


$cate = isset($_GET['cate']) ? intval($_GET['cate']):0;//沒有找到的話就會回到全部分
?>
<style>
    .progress-bar-yu{
    margin-top: 88px;
    margin-bottom: 40px;
    font-size: var(--font-h5-20)
}
.circle{
    position: relative;
    width: 35px;
    height: 35px;
    background-color: #E5A62A;
    border-radius: 50%;
}
.circle .page-one-number{
    color: #fff;
}
.circle h5{
    color: rgba(67, 42, 15, 0.38);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.page h5{
    /* border: 1px solid #000; */
    line-height: 20px;
    padding: 10px;
    text-align: center;
    color: rgba(67, 42, 15, 0.38);
}
.page .page-one{
    color: #432A0F;
}
.progress-yu .pageline::after{
    width: 50%;
    height: 1px;
    background-color:#432A0F ;
    vertical-align: middle;
}
.progress-yu .pageline::before{
    width: 50%;
    height: 1px;
    background-color:#432A0F ;
    vertical-align: middle;
}

/* 獨家商品 旅遊行程分頁標籤 */
.pagination-yu{
    font-size: var(--font-h5-20);
    width: 75%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.pagination-yu .btn {
    color: rgba(67, 42, 15, 0.38);
    outline:1px solid #E5A62A;
    border: 1px solid  #E5A62A;
}
.pagination-yu .btn:focus  {
    box-shadow:none;
    background-color: #E5A62A;
    outline:1px solid #E5A62A;
    border: 1px solid  #E5A62A;
    color: #fff;
}
.pagination-yu .btn:active{
    border-color:#E5A62A;
    background-color: #E5A62A;
    color: rgba(67, 42, 15, 0.38);
    outline:1px solid #E5A62A;
    border: 1px solid  #E5A62A;
}


/* 數量增加按鈕 */
.qty {
    width: 40px;
    height: 35px;
    text-align: center;
    border: 0;

}
input.qtyplus {
    width: 25px;
    height: 35px;

}
input.qtyminus {
    width: 25px;
    height: 35px;
}
</style>
<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>
<div class="">
    <div class="container-fluid p-0">
        <div class="progress-bar-yu" >
            <div class=" progress-yu d-flex justify-content-around ">
                <span class="row ">
                    <div class="circle ">
                        <h5 class="page-one-number">1</h5>
                    </div>
                    <div class="page ">
                        <h5 class="pl-2 page-one" >購物車訂單</h5>
                    </div>
                </span>

                <span class="row pageline ">
                    <div class="circle">
                        <h5>2</h5>
                    </div>
                    <div class="page">
                        <h5 class="pl-2 page-two" >填寫資料</h5>
                    </div>
                </span>
                
                <span class="row">
                    <div class="circle">
                        <h5>3</h5>
                    </div>
                    <div class="page ">
                        <h5 class="pl-2 page-three" >完成訂單</h5>
                    </div>
                </span>
            </div>
        </div>

        <!-- 獨家商品 旅遊行程分頁標籤 -->
        <div class=" pagination-yu btn-group " >
            <a href="#unique" data-toggle="tab"  class="px-0 m-auto btn" role="button" >獨家商品</a>
            <a href="#" data-toggle="tab" class=" px-0 m-auto btn" role="button">旅遊行程</a>
        </div>
    </div>
    <div class="container">
        <div class="row" id="unique">
            <div class="col">
                <table class="table ">
                    <thead>
                        <tr>
                        <th scope="col">
                            <div class="input">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                                全選
                            </div>
                        </th>
                        <th scope="col" src="imgs/small/<?= $v['product_id'] ?>.jpg" alt="<?= $v['productname'] ?>">商品照片</th>
                            <th scope="col">商品名稱</th>
                            <th scope="col">規格</th>
                            <th scope="col">單價</th>
                            <th scope="col">數量</th>
                            <th scope="col" class="sub-total">小計</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <th scope="row">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                            </th>
                            <td>
                                <img src="" alt="">
                            </td>
                            <td>
                                <p class="m-0">
                                    台北霞海城隍廟獨家聯名
                                    <br>
                                    -七夕月老供品組-甜作之盒
                                </p>
                            </td>
                            <td>
                                <div class=" type-yu  btn-group btn-danger">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        規格
                                    </button>
                                    <ul class="dropdown-menu">
                                        ...
                                    </ul>
                                </div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <form id='myform' method='POST' action='#'>
                                    <label for=""> </label>
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </form>
                            </td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                            </th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                            </th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__. '/parts/scripts.php'; ?>
<!-- <script>

//價錢加,
const dollarCommas = function(n){
    return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
};

function removeItem(event) {
        const tr = $(event.currentTarget).closest('tr');
        const sid = tr.attr('data-sid');

        $.get(
            'handle-cart.php',
            {sid}, 
            function(data){
                console.log(data);
                showCartCount(data); // 購物車總數量
                tr.remove();

                // TODO: 更新小計, 總計, 
                //TODO:總計,
                
                updatePrices();//刪除後要呼叫函式
            }, 
            'json');
    }

    function updateItem(event) {
        const sid = $(event.currentTarget).closest('tr').attr('data-sid');
        const qty = $(event.currentTarget).val();

        $.get(
            'handle-cart.php',
            {sid, qty}, 
            function(data){
                console.log(data);
                showCartCount(data); // 購物車總數量
                // TODO: 更新小計, 總計, 總數量
                // TODO: 更新小計, 總計
                updatePrices(); //更新後就要呼叫函式
            }, 
            'json');
    }

    function updatePrices(){
        let total = 0;  //總價歸零

        $(".cart-item").each(function(){
            const tr = $(this);
            const td_price = tr.find(".price");
            const td_sub = tr.find(".sub-total");

            const price = +td_price.attr("data-val");
            const qty = +tr.find(".qty").val();

            //td_price.html("$" +price); //+是轉型
            //td_sub.html("$" +price * qty); 

            td_price.html('$ ' + dollarCommas(price) );
            td_sub.html('$ ' + dollarCommas(price * qty));
            total += price * qty; //小計計算

        });
        //$("#total-price").html("$" + total);
        $('#total-price').html('$ ' + dollarCommas(total));
    }
    updatePrices(); // 一進頁面就要執行一次


</script> -->

<script>
    //數量增加按鈕
    $(function() {
  // This button will increment the value
    $('.qtyplus').click(function(e) {
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    fieldName = $(this).attr('field');
    // Get its current value
    var currentVal = parseInt($('input[name=' + fieldName + ']').val());
    // If is not undefined
    if (!isNaN(currentVal)) {
      // Increment
        $('input[name=' + fieldName + ']').val(currentVal + 1);
    } else {
      // Otherwise put a 0 there
        $('input[name=' + fieldName + ']').val(0);
    }
    });
  // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    fieldName = $(this).attr('field');
    // Get its current value
    var currentVal = parseInt($('input[name=' + fieldName + ']').val());
    // If it isn't undefined or its greater than 0
    if (!isNaN(currentVal) && currentVal > 0) {
      // Decrement one
        $('input[name=' + fieldName + ']').val(currentVal - 1);
    } else {
      // Otherwise put a 0 there
        $('input[name=' + fieldName + ']').val(0);
    }
    });
});
</script>
<?php include __DIR__. '/parts/html-foot.php'; ?>