$(document).ready(function()
{

	var total=0;

	cartnoti();
	showtable();

	function cartnoti()
	{
		var totalqty = 0;
		var cart = localStorage.getItem('cart');

			if (cart) 
			{
				var cartobj = JSON.parse(cart);
				$.each(cartobj.mycart ,function(i, v) 
				{
					var qty = v.qty;
					totalqty += parseInt(qty);
				});
			}
		
		$('.cart_num').html(totalqty);
	}

	$('.addtocard_btn').click(function(event) 
	{
		
		var id=$(this).data('id');
	 	var name=$(this).data('name');
	 	var price=$(this).data('price');
	 	var photo=$(this).data('photo');
	 	var cname = $(this).data('cname');
	 	var qty = 1;

	 	var	cart=localStorage.getItem('cart');

	 	if(!cart)
	 	{
	 		cart='{"mycart":[]}';
	 	}
	 	

	 	var mycartitem={id:id,name:name,price:price,photo:photo,cname:cname,qty:qty};
        var mycartobj=JSON.parse(cart);
        var exist=0;

        $.each(mycartobj.mycart,function(i,v)
        {
            if (id == v.id) 
            {
                v.qty++;
                exist=1;
            }
        })
        if(exist == 0)
        {
            mycartobj.mycart.push(mycartitem);
        }
        
        localStorage.setItem('cart',JSON.stringify(mycartobj));
        cartnoti();


	});

	function showtable()
	{
		var localstorageitem = localStorage.getItem('cart');
		if (localstorageitem) 
		{
			$('.shoppingcart_div').show();
			$('.noshoppingcart_div').hide();

			var localstorageitem = JSON.parse(localstorageitem);
			var mycart = localstorageitem.mycart;

			var mytable ='';
			var j=1;
			var carttotal=0; var subtotal=0;



			$.each(mycart,function (i,v) 
			{
				if (v) 
				{
					var result; var sst;
					var id = v.id;
					var name = v.name;
					var price = v.price;
					var photo = v.photo;
					var author = v.author;
					var genre = v.genre;
					var qty = v.qty;

					subtotal = price * qty;

					mytable +='<ul class="cart_items_list">'+
								'<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">'+
									

									'<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">'+
										'<div>'+
											'<div class="product_image">'+
												'<img src="'+photo+'" class="photo" alt="">'+
											'</div>'+
										'</div>'+
										'<div class="product_name"><p> '+name+' </p></div>'+
									'</div>'+
									'<div class="product_price text-lg-center product_text">'+
										'<span>Price: </span>'+price+
									'</div>'+
									'<div class="product_quantity_container">'+
										'<div class="product_quantity ml-lg-auto mr-lg-auto text-center">'+
											'<span class="product_text product_num">'+qty+'</span>'+
											'<div class="qty_sub qty_button trans_200 text-center" data-id="'+id+'"><span> - </span></div>'+
											'<div class="qty_add qty_button trans_200 text-center" data-id="'+id+'"><span> + </span></div>'+
										'</div>'+
									'</div>'+
									'<div class="product_total text-lg-center product_text">'+
										'<span>Total: </span>'+subtotal+
										'<button class="btn btn-default float-right delete_btn" data-id="'+i+'"> <i class="fa fa-times text-danger"> </i> </button>'+
									'</div>'+
								'</li>'+
							'</ul>';

					j++;
					carttotal += subtotal;



				}

			});

			total = carttotal;

			$(".subtotal").text(total);
			$(".total").text(total);

			$('.shoppingcart_item').html(mytable);
		}

		else
		{
			$('.shoppingcart_div').hide();
			$('.noshoppingcart_div').show();
		}



	}

	// Add Quantity
	$('.shoppingcart_item').on('click','.qty_add',function(){
        var id=$(this).data('id');
        var localstorageitem=localStorage.getItem('cart');
        var localstorageitem=JSON.parse(localstorageitem);
        var mycart = localstorageitem.mycart;

        $.each(mycart,function (i,v) 
		{
			if (v.id == id) 
			{
				v.qty++;
			}
		})
		
		cart = JSON.stringify(localstorageitem);
		localStorage.setItem('cart',cart);
		showtable();
    });

    // Minus Quantity
	$('.shoppingcart_item').on('click','.qty_sub',function(){
        var id=$(this).data('id');
        var localstorageitem=localStorage.getItem('cart');
        var localstorageitem=JSON.parse(localstorageitem);
        var mycart = localstorageitem.mycart;

        $.each(mycart,function (i,v) 
		{
			var v_id = v.id;
			if (v_id == id) 
			{
				mycart[i].qty--;
				if (!mycart[i].qty == 0) 
				{
					cart = JSON.stringify(localstorageitem);
					localStorage.setItem('cart',cart);

				}
			}
		})

		
		showtable();
		
		
    });

	// Remove
	$('.shoppingcart_item').on('click','.delete_btn',function()
	{
		var id = $(this).data('id');
        var ans=confirm('Are you sure?');
        if (ans) 
        {
        	console.log(id);
          	var cart=localStorage.getItem('cart');
          	var mycartobj=JSON.parse(cart);
          	console.log(id);
          	var mycart = mycartobj.mycart;
          	console.log(mycartobj.mycart);


          	mycartobj.mycart.splice(id,1);
          	localStorage.setItem('cart',JSON.stringify(mycartobj));
          	console.log(mycartobj.mycart);
          	cartnoti();
          	showtable();
        }
    });


	// Checkout
	$('.checkout_button').click(function(event) 
	{
		var localstorageitem=localStorage.getItem('cart');
        var cart=JSON.parse(localstorageitem);

        var url = base_url;

        $.ajax({
        	type: 'POST',
        	url: url+'addtocart',
        	data: {cart:cart, total:total },
        	success:function(data)
        	{
        		localStorage.clear();
        		window.location.href=url;
        	}
        });
         
	});






















});