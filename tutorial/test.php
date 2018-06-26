<?php
    $categoryName = "전국 > 부산 > 서면";
    $searchName = "부산";

    if(strpos($categoryName, $searchName) == true){
        echo "포함";
    }else{
        echo "없음";
    }
?>