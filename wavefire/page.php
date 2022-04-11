

<?php  





for($num = 1 ;$num<=$talopage;$num++)
{?>
<?php if($num != $current_page){?>
<a class="page" href="?per_page=<?=$item_per_page?>&page=<?=$num?>"><?=$num?></a>

<?php } else {
?>
<strong style="color:red;"> <?=$num?> </strong>

<?php
}
?>

<?php
}

?>




<style>

.page a{

border: 1px soild black;

}
.page a:hover:not(.active) {background-color: #dddd;}
</style>