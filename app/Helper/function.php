<?php
//tính % khuyến mãi
function percent($sale, $price){
    return round(($price - $sale)*100/$price);
}