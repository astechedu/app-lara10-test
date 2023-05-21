@extends('layouts.app')

@section('content') 

	<div class="row">
		<?php foreach($products as $product) { ?>
		<div class="flex flex-row col-md-2 m-2">
			
			<div class="card" style="width: 12rem;">
			  <img src="{{asset('images/shirt.jpg')}}" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title"><?= $product['name'] ?></h5>
			    <p class="card-text">$<?= $product['price'] ?></p>
			    <p class="card-text"><?= $product['description'] ?></p>
			    <a href="#" class="btn btn-primary">Buy Now</a>
			    <button class="btn btn-info">Buy</button>
			  </div>
			  <input type="hidden" id='id' value="<?php echo $product['id'] ?>" >
			  <input type="hidden" id='name' value="<?php echo $product['name'] ?>" >
			  <input type="hidden" id='price' value="<?php echo $product['price'] ?>" >
			  <input type="hidden" id='quantity' value="<?php echo $product['quantity'] ?>" >
			</div>  
		</div>
	<?php } ?> 	
	</div>

  <?php //{{ $products->links() }}?>
   <div id="bodyData"></div>

<!-- Jquery Ajax -->

<!--
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		}); 
-->

<script>
    $(function(){

	$.ajaxSetup({

	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});	     

        $('button').on('click', function(){        	
           let product = [];
           let id = $('#id').val();
           let name = $('#name').val();
           let quantity = $('#quantity').val();
           let price = $('#price').val();

           let url = '{{route("ajax.testpost")}}';

               productData = {"id":id, "name":name, "price":price, "quantity":quantity};
 
           $.ajax({
           	 url: url,
           	 type:'POST',
           	 dateType:'json',  
           	 data: productData,      
           	 success: function (response) {           	  
                //console.log('ok');
                alert('ok');	
           	 },
           	 error: function (response) {
           	 	alert('fail');
           	 }           	 
           });
        });      
    });
</script>

@endsection
<!--
<script>
    $(function(){

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});	                
        //$('button').on('click', function(){        	

           let url = '{{route("ajax.lists")}}';
 
           $.ajax({
           	 url: url,
           	 type:'GET',
           	 dateType:'json',

           	 success: function (response) {   
          	  
                console.log(response)	 	

           	 },
           	 error: function (response) {
           	 	alert('fail');
           	 }           	 
           });
        //});      
    });
</script>
-->

