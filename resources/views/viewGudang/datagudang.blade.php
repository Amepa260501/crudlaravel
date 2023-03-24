<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
 
  
  
</head>
<body>
  <form>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-xl"> 
    
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
        <th>ID Produk</th>
        <th>Ketegori</th>
        <th>produk</th>
        <th>Harga</th>
        <th>Deskripsi</th>
      </tr>
    </thead>
    <tbody>

  @foreach ($produk as $data)
    <tr>
      <td>{{ $data->id_produk }}</td><td>{{ $data->nama_kategori }}<td><td>{{ $data->nama_produk }}</td><td>{{ $data->harga }}</td><td>{{ $data->descripsi }}</td>
      <td><button class="btn btn-info btn-pilih" data-dismiss="modal">pilih</button></td>
    </tr>
  @endforeach

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
      <input type="text" id="id_produk" name="id_produk" class="form-control" value="<?php if(isset($_GET['id_produk'])) echo $_GET['id_produk'] ;?>" required="" readonly>
    </div>
	</div>

	<div class="col-sm-3">    
    <div class="form-group">
      <label>Nama Kategori</label>
      <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" value="<?php if(isset($_GET['nama_kategori'])) echo $_GET['nama_kategori'] ;?>" required="" readonly>
    </div>
	</div>

	<div class="col-sm-3">    
    <div class="form-group">
      <label>Nama Produk</label>
      <input type="text" id="nama_produk" name="nama_produk" class="form-control" value="<?php if(isset($_GET['nama_produk'])) echo $_GET['nama_produk'] ;?>" required="" readonly>
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
      <label>Descripsi</label>
      <input type="text" id="descripsi" name="descripsi" class="form-control"  value="<?php if(isset($_GET['descripsi'])) echo $_GET['descripsi'] ;?>"required="" readonly>
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
	  <th>Nama Kategori</th>
	  <th>Nama Baranng</th>	  
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
$("#id_produk").click(function(){
	 $('#myModal').modal('show');
}); 

$("#myTable").on("click", ".btn-pilih", function(){
           // get the current row
      var currentRow = $(this).closest("tr");
      var id_produk = currentRow.find("td:eq(0)").html(); 
	  var nama_kategori = currentRow.find("td:eq(1)").html(); 
	  var nama_produk = currentRow.find("td:eq(2)").html(); 
	  var harga = currentRow.find("td:eq(3)").html(); 
    var descripsi = currentRow.find("td:eq(4)").html(); 
$('#myModal').modal('hide');
	 
$("#id_produk").val(id_produk);
$("#nama_kategori").val(nama_kategori);
$("#nama_produk").val(nama_produk);
$("#harga").val(harga);	 
$("#descripsi").val(descripsi);	

		
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
		var id_produk = $("input[name='id_produk']").val();
    var nama_kategori = $("input[name='nama_kategori']").val();
		var nama_produk = $("input[name='nama_produk']").val();
    var harga = $("input[name='harga']").val();
    var descripsi = $("input[name='descripsi']").val();
    var jumlah = $("input[name='jumlah']").val();		
		var total = $("input[name='total']").val();
        
     
        $(".data-table tbody").append("<tr data-id_produk='"+id_produk+"' data-nama_kategori='"+nama_kategori+"' data-nama_produk='"+nama_produk+"' data-harga='"+harga+"'data-descripsi='"+descripsi+"'data-jumlah='"+jumlah+" data-total='"+total+"'><td>"+id_produk+"</td><td>"+nama_kategori+"</td><td>"+nama_produk+"</td><td>"+harga+"</td><td>"+descripsi+"</td><td>"+jumlah+"</td><td>"+total+"</td><td><button class='btn btn-danger btn-xs btn-delete'>Delete</button></td></tr>");
    
        $("input[name='id_produk']").val('');
		$("input[name='nama_kategori']").val('');
		$("input[name='nama_produk']").val('');		
    $("input[name='harga']").val('');   
    $("input[name='descripsi']").val(''); 
    $("input[name='jumlah']").val('');
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
       var id_produk='<?php echo date("Ymd").date("His") ?>';
		   var nama_kategori=$("#nama_kategori").val();
			 var nama_produk=$("#nama_produk").val();
			 var descripsi=$("#descripsi").val();			
		   var grandtotal=$("#grandtotal").val();				
			 
			    console.log(id_produk);
			    console.log(nama_kategori);
					console.log(nama_produk);
					console.log(descripsi);					
					console.log(grandtotal);					
					console.log("-----------");

 $.get('http://localhost/crudlaravel/gudangmaster/'+kodetr+'/'+tanggal+'/'+namasupplier+'/'+telpon+'/'+alamat+'/'+keterangan+'/'+grandtotal,function(){ });
 
 
 console.log('http://localhost/latihanlaravel8/gudangmaster/'+kodetr+
   '/'+tanggal+'/'+namasupplier+'/'+telpon+
   '/'+alamat+'/'+keterangan+'/'+grandtotal);
      
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
$.get('http://localhost/latihanlaravel8/gudangdetail/'+
kodetr+'/'+kode+'/'+harga+'/'+jumlah,function(){ });
console.log('http://localhost/latihanlaravel8/gudangdetail/'+
kodetr+'/'+kode+'/'+harga+'/'+jumlah);
//window.location="http://localhost/latihanlaravel8/datagudang";
					
                }
                
				
            });
        }	    
</script>
</body>
</html>