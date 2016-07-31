<?php
if(isset($bgOption)){
    if($bgOption == 0)
        echo $imageData->image;
    else
        echo $imageData->indexImage;
} else {
    if(isset($receiptOption)){
        if($receiptOption == '0')
            echo $imageData->image;
        else
            echo $imageData->receipt;
    }else{
        echo $imageData->image;
    }
}
?>