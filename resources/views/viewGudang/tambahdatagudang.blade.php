<!DOCTYPE html>
<html lang="en">
<head>
  <title>GUDANG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>
<body>

<div class="container-fluid">
<form class="form-horizontal">
<?php date_default_timezone_set('Asia/Jakarta'); ?>
    <div class="form-group">
      <label class="col-sm-2 control-label">Tanggal Datang</label>
	  <div class="col-sm-4"> 
      <input type="date" id="tanggal" name="Tanggal" class="form-control" value="<?php echo date("Y-m-d") ?>" required="">
	  </div>
    </div>	
	 
    <div class="form-group">
      <label class="col-sm-2 control-label">Nama Supplier</label>
	  <div class="col-sm-5">   
      <input type="text" id="namasupplier" name="namasupplier"  class="form-control"  required="">
      </div>
	</div>
   
  
	  
    <div class="form-group">
      <label class="col-sm-2 control-label">Telp</label>
	  <div class="col-sm-2">  
      <input type="tel" id="telp" name="telp" class="form-control"  required="">
    </div>
	</div>
   
   <div class="form-group">
      <label class="col-sm-2 control-label">Alamat</label>
	  <div class="col-sm-4">  
      <input type="text" id="alamat" name="alamat" class="form-control"  required="">
    </div>
	</div>
   
   <div class="form-group">
      <label class="col-sm-2 control-label">Keterangan</label>
	  <div class="col-sm-4">  
      <input type="text" id="keterangan" name="keterangan" class="form-control"  required="">
    </div>
	</div>
  
 </form>


<div class="row">    
  <form>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Data Barang</h4>
        </div>
        <div class="modal-body">

  <table class="table table-striped" id="myTable" >
 <thead>
      <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Satuan</th>
		<th>Harga</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>';
 
	<tr>
    <td>m01</td><td>CPU 1</td><td>PCS</td><td>1000</td><td>
	<button class="btn btn-info btn-pilih" data-dismiss="modal">pilih</button></td>
	</tr>

    <tr>
    <td>m02</td><td>CPU 2</td><td>PCS</td><td>2000</td><td>
	<button class="btn btn-info btn-pilih" data-dismiss="modal">pilih</button></td>
	</tr>

    <tr>
    <td>m03</td><td>CPU 3</td><td>PCS</td><td>3000</td><td>
	<button class="btn btn-info btn-pilih" data-dismiss="modal">pilih</button></td>
	</tr>

  </table>

		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  











 <div class="col-sm-2">    
    <div class="form-group">
      <label>Kode</label>
      <input type="text" id="kode" name="kode" class="form-control" value="<?php if(isset($_GET['kode'])) echo $_GET['kode'] ;?>" required="" readonly>
    </div>
	</div>
	
	<div class="col-sm-3">    
    <div class="form-group">
      <label>Nama</label>
      <input type="text" id="nama" name="nama" class="form-control" value="<?php if(isset($_GET['nama'])) echo $_GET['nama'] ;?>" required="" readonly>
    </div>
	</div>
	
	<div class="col-sm-1">    
    <div class="form-group">
      <label>Satuan</label>
      <input type="text" id="satuan" name="satuan" class="form-control"  value="<?php if(isset($_GET['satuan'])) echo $_GET['satuan'] ;?>"required="" readonly>
    </div>
	</div>
	
	<div class="col-sm-2">    
    <div class="form-group">
      <label>Harga</label>
      <input type="number" id="harga" name="harga" class="form-control" value="<?php if(isset($_GET['harga'])) echo $_GET['harga'] ;?>" required="" readonly >
    </div>
	</div>
	
	 <div class="col-sm-1">    
    <div class="form-group">
      <label>Jumlah</label>
      <input type="number" id="jumlah" name="jumlah" class="form-control"  value="0" required="">
    </div>
	</div>
	
	 <div class="col-sm-2">    
    <div class="form-group">
      <label>Total</label>
      <input type="number" id="total" name="total" class="form-control"  required="" readonly>
    </div>
	</div>    
	
	<div class="col-sm-1">   
    <div class="form-group">	
	<label> </label><br>
    <button type="submit" id="add" class="btn btn-success btn-block add-btn">Add</button>
	</div>
    </div>
  </form>
</div>

<br/>
  <table id="myTableisi" class="table table-bordered data-table" >
    <thead >
      <th>Kode</th>
	  <th>Nama</th>
	  <th>Satuan</th>	  
	  <th>Jumlah</th>
      <th>Harga</th>
	  <th>Total</th>
      <th>Action</th>
    </thead>
    <tbody>
    
    </tbody>
  </table>



   <div class="row"> 
   <div class="col-sm-9"> 
  
   </div>
	<div class="col-sm-3">    
    <div class="form-group">
      <label>Grand Total</label>
      <input type="text" value="0" id="grandtotal" name="grandtotal"  class="form-control"  required="">
    </div>
	</div>
   </div>

   <div class="row"> 
   <div class="col-sm-2"> 
   <button type="submit" class="btn btn-success btn-block save-btn">Save</button>
   </div>
    <div class="col-sm-2"> 
   <button type="submit" class="btn btn-danger btn-block cancel-btn">Cancel</button>
   </div>
</div>
<script>
$("#kode").click(function(){
	 $('#myModal').modal('show');
}); 

$("#myTable").on("click", ".btn-pilih", function(){

      var currentRow = $(this).closest("tr");
      var kode1 = currentRow.find("td:eq(0)").html(); 
	  var nama1 = currentRow.find("td:eq(1)").html(); 
	  var satuan1 = currentRow.find("td:eq(2)").html(); 
	  var harga1 = currentRow.find("td:eq(3)").html(); 
$('#myModal').modal('hide');
	 
$("#kode").val(kode1);
$("#nama").val(nama1);
$("#satuan").val(satuan1);
$("#harga").val(harga1);

});

$("#jumlah").change(function(){
	 var harga=$("#harga").val();
	 var jumlah=$("#jumlah").val();
	 $("#total").val(harga*jumlah);
});  


$("#add").click(function(e){    
        e.preventDefault();
		if($("input[name='jumlah']").val()>0)
		{	
		var kode = $("input[name='kode']").val();
        var nama = $("input[name='nama']").val();
		var satuan = $("input[name='satuan']").val();
        var jumlah = $("input[name='jumlah']").val();		
		var harga = $("input[name='harga']").val();	
		var total = $("input[name='total']").val();
        
     
        $(".data-table tbody").append("<tr data-kode='"+kode+"' data-nama='"+nama+"' data-satuan='"+satuan+"' data-jumlah='"+jumlah+"' data-harga='"+harga+"' data-total='"+total+"'><td>"+kode+"</td><td>"+nama+"</td><td>"+satuan+"</td><td>"+jumlah+"</td><td>"+harga+"</td><td>"+total+"</td><td><button class='btn btn-danger btn-xs btn-delete'>Delete</button></td></tr>");
    
        $("input[name='kode']").val('');
		$("input[name='nama']").val('');
		$("input[name='satuan']").val('');		
        $("input[name='jumlah']").val('');
		$("input[name='harga']").val('');		
		$("input[name='total']").val('');
		} 
        perhitunganColumn(5);
    });

function perhitunganColumn(index) {		  
	   
            var total = 0;
            $('table tr').each(function() {
                var value = parseInt($('td', this).eq(index).text());
                if (!isNaN(value)) {
                    total += value;
					
                }
            });

            $("#grandtotal").val(total);
     }

$("body").on("click", ".btn-delete", function(){
        $(this).parents("tr").remove();
		 perhitunganColumn(5);
    });
$("body").on("click", ".save-btn", function(){
       saveColumn();		
    }); 


 function saveColumn() {
             var kodetr='<?php echo date("Ymd").date("His") ?>';
		     var tanggal=$("#tanggal").val();
			 var namasupplier=$("#namasupplier").val();
			 var telpon=$("#telpon").val();
			 var alamat=$("#alamat").val();
			 var keterangan=$("#keterangan").val();			
		     var grandtotal=$("#grandtotal").val();	
			
			 
			        console.log(kodetr);
			        console.log(tanggal);
					console.log(namasupplier);
					console.log(telpon);
					console.log(alamat);
					console.log(keterangan);					
					console.log(grandtotal);					
					console.log("-----------");


 //$.get('http://localhost/penjadwalan/transaksimaster.php?kodetr='+kodetr+'&tanggal='+tanggal+'&namasupplier='+namasupplier+'&telpon='+telpon+'&alamat='+alamat+'&keterangan='+keterangan+'&grandtotal='+grandtotal,function(){ });
 
 
	 console.log('http://localhost/laravel12/simpangudang.php?kodetr='+kodetr+'&tanggal='+tanggal+'&namasupplier='+namasupplier+'&telpon='+telpon+'&alamat='+alamat+'&keterangan='+keterangan+'&grandtotal='+grandtotal);
      
       $('#myTableisi tr').each(function() {
				
               
        var kode = $('td',this).eq(0).text();
				
				var nama = $('td',this).eq(1).text();
				
				var satuan = $('td',this).eq(2).text();
				
				var harga = $('td',this).eq(3).text();
				
				var jumlah = $('td',this).eq(4).text();
				    
				
				 if (kode!=""){
					console.log(kodetr);
          console.log(kode);
					console.log(nama);
					console.log(satuan);
					console.log(harga);
					console.log(jumlah);
					

//$.get('http://localhost/penjadwalan/transaksidetail.php?kodetr='+kodetr+'&satuan='+satuan+'&harga='+harga+'&jumlah='+jumlah+'&nama='+nama+'&kode='+kode,function(){ });

              //window.location="http://localhost/penjadwalan/transaksi.php";
					
                }
                
				
            });
            



        }       
</script>
</body>
</html>