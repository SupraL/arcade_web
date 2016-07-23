<?php
if(isset($bgOption)){
    if($bgOption == 0)
        echo $imageData->image;
    else
        echo $imageData->indexImage;
} else {
    echo $imageData->image;
}
?>