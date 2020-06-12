<h2>Konfirmasi Check Out</h2>
<div class="kotak2">
<?php
$grand_total = 0;
if ($cart = $this->cart->contents())
 {
 foreach ($cart as $item)
 {
 $grand_total = $grand_total + $item['subtotal'];
 }
 echo "<h4>Total Belanja: Rp.".number_format($grand_total,0,",",".")."</h4>"; ?>
<form class="form-horizontal" action="<?php echo base_url()?>member/proses_order" method="post" name="frmCO"
	id="frmCO">
 
  <div class="form-group has-success has-feedback">
 <div class="col-xs-offset-3 col-xs-9">
 <button type="submit" class="btn btnprimary">Proses Order</button>
 </div>
 </div>
 </form>
 <?php
 }
 else
 {
 echo "<h5>Shopping Cart masih kosong</h5>";
 }
 ?>
</div>