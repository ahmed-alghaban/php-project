<div class="spaceTable">

<?php

$id 	=	(int)$_GET['recived'];

 edit_value('requestitems','request_item_id',$id,'status','recived');
 
 $for_id	=	show_value('requestitems','request_item_id',$id,'for_id');
 $quantity	=	show_value('requestitems','request_item_id',$id,'quantity');
 $connection->query("update itemsforstore set quantity= quantity+$quantity where for_id='$for_id' ");
 
echo '
		<div class="success">
			  <p><strong>تمت</strong> عملية الإرجاع بنجاح وجاري تحويلك إلى قائمة الطلبات الجديدة</p>
			</div>

		';

        header("Refresh:3,url=?");
        
      ?>
</div>
