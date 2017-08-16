

var base_url = 'http://be3014b4.ngrok.io/api/';

var image_url = 'http://be3014b4.ngrok.io/images/';

var id_user = localStorage.getItem("id_user");

var id_commerce = localStorage.getItem("id_commerce");



/*Creating an elemet to show the information about a product*/
/*var node = document.createTextNode(name);
para.appendChild(node);
var element = document.getElementById("main");
element.appendChild(para);*/

/**********************************/
//Lista de ordenes del comercio

function listOrders(){

	var url = base_url + 'commerce/'+id_commerce+'/orders';

	$.ajax({
		type:'GET',
		url:url,
		success: function(resp){
			var code = resp['code'];
			if(code == 200){

				for (var i = 0; i < resp['data'].length; i++){

					var id_order = resp['data'][i]['id_order_consumer'];
					var id_status_order = resp['data'][i]['id_status_order'];
					var status_order = resp['data'][i]['status_order'];
					var name = resp['data'][i]['user_name'] + ' ' + resp['data'][i]['user_last_name'] ;
					var address = resp['data'][i]['manual_address'];
					var total = resp['data'][i]['total'];

					var element = '<div class="col-lg-4 col-md-4">'+
				                        '<div class="panel panel-default panel-order">'+
				                            '<div class="panel-heading">'+
				                                '<p>'+status_order+'</p>'+
				                            '</div>'+
				                              '<div class="panel-body">'+
				                                '<p>'+name+'</p>'+
				                                '<p>'+address+'</p>'+
				                                '<p>$'+total+' MXN</p>'+
				                                '<a onclick="detail_order('+id_order+',\'' + name + '\',\'' + address + '\','+total+',\'' + status_order + '\','+id_status_order+');" href="#" class="btn btn-primary pull-right">Detalles</a>'+
				                              '</div>'+
				                        '</div>'+
				                    '</div>';
				    $('#main').append(element);
				}

			}
		}
	});
}

/**********************************/
//Obtener el detalle de una orden
//
//id_order, name, address, total, status
function detail_order(id_order,name, address, total, status, id_status_order){
	//'+id_order+','+name+','+address+','+total+','+status_order+'

	var url_detail = base_url + 'order/detail-order/' + 1;

	$('#client_name').text(name);
	$('#client_address').text(address);
	$('#client_total').text(total);
	$('#id_status_order').val(id_status_order);
	$('#modal-detail-order').modal('show');
	$('#tbody_products').html('');
	$.ajax({
		type:'GET',
		url: url_detail,
		success	: function (resp){
			var code= resp['code'];

			if(code == 200){
				for (var i = 0; i < resp['data'].length; i++){

					var p_name = resp['data'][i]['name'];

					var element = '<tr>'+
		                            '<td>#19</td>'+
		                            '<td>'+p_name+'</td>'+
		                            '<td>5</td>'+
		                          '</tr>';
		           	$('#tbody_products').append(element);               	
				}
			}

			

		}
	});

}

/**********************************/
//Lista de ordenes del comercio

function listProducts(){


	var url = base_url + 'commerce/'+id_commerce+'/product';
	console.log(url)

	$.ajax({

		type: 'GET',
		url: url,
		success: function(resp){

			var code = resp['code'];
			//var call = JSON.decode(resp);
			//var code = '1'//call.code;

			$('#main').html('');

			for (var i = 0; i < resp['data'].length; i++) {

				var name = resp['data'][i]['name'];
				var image = resp['data'][i]['image'];
				var id_product = resp['data'][i]['id_product'];

				var element = '<div class="col-sm-6 col-md-4">'+
							    '<div class="thumbnail">'+
							      '<img style="height: 150px;" src="'+image_url+image+'" alt="...">'+
							      '<div class="caption">'+
							        '<h3>'+ name +'</h3>'+
							        '<p>...</p>'+
							        '<p>'+
							        	'<a id="btn-detail" data-toggle="modal" onclick="detail_product('+id_product+')" href="#" class="btn btn-primary" role="button">Button</a>'+
							        	' <a href="#" class="btn btn-default" role="button">Button</a>'+
							        	'</p>'+
							      '</div>'+
							    '</div>'+
							  '</div>';						
				$('#main').append(element);


				
			};			
		}


	});
}




/*******************/

function detail_product(id_product){

	var id_product = id_product;
	var url = base_url + 'commerce/'+id_commerce+'/detail-product/'+id_product;

	$('#modal-detail-product').modal('show');

	$.ajax({

		type: 'GET',
		url: url,
		success: function (resp){
			var code = resp['code'];
			if(code == 200){
				var id_product = resp['data'][0]['id_product'];
				var name = resp['data'][0]['name'];
				var desc = resp['data'][0]['description'];
				var price = resp['data'][0]['price'];
				var cat = resp['data'][0]['id_product_type'];
				
				$('#id_product').val(id_product);
				$('#detail-name').val(name);
				$('#detail-desc').val(desc);
				$('#detail-price').val(price);
				$('#detail-cat').val(cat);

			}
		}
	});

	$('#modal-detail-product').on('hidden.bs.modal', function (e) {
 				listProducts();	
	})
}

/********UPDATE PRODUCT**********/

$('#form-update-product').submit(function (e){

	e.preventDefault();
	var id_product = $('#id_product').val();
	var name = $('#detail-name').val();
	var image = $('#update-image').val();  //$('#update-image').prop('files')[0];

	var url = base_url + 'commerce/'+id_commerce+'/update-product/'+id_product;//+'?_method=put';

	var data = {
			'_method': 'put',
			'name':name,
			'image':image
		};

	console.log(image)
	$.ajax({
		type: 'POST',
		url: url,
		data:data,
		success: function(resp){
			console.log(resp)
		}
	});


});


/****save new product*****/
$('#form-new-product').submit(function (e) {
	
	e.preventDefault();
	var name = $('#new-name').val();
	var desc = $('#new-desc').val();
	var price =  $('#new-price').val();
	var id_product_type = $('#new-cat').val();
	var image = $('#image').val();

	var url = base_url + 'commerce/'+id_commerce+'/create-product';

	var campos = $('#form-new-product').serialize();

	var formData = new FormData($("#form-new-product")[0]);

	formData.append('id_commerce', id_commerce)
	/*formData.append('name',name)
	formData.append('description', desc)
	formData.append('price',price)
	formData.append('id_product_type',id_product_type)
	formData.append('image', image)*/
	/*var data = {

		'id_commerce':id_commerce,
		'name':name,
		'description':desc,
		'price':price,
		'id_product_type':id_product_type,
		'image': image
	}*/

	$.ajax({
		type: 'POST',
		url: url,
		data: formData,
        cache: false,
        contentType: false,
        processData: false,
		success: function(resp){
			var code = resp['code'];
			if(code == 200){
				listProducts();
			}
		}
	});
});

/**********************************************/
//
// Commerce section
//

function commerceInfo(){

	var url = base_url + 'commerce/'+ id_commerce;

	$.ajax({
		url:url,
		type: 'GET',
		success: function (resp){

			var code = resp['code'];
			if(code == 200){

				$('#img_comm').attr('src',resp['data'][0]['url_img']);
				$('#comm_name').text(resp['data'][0]['name']);
				$('#phone_comm').val(resp['data'][0]['phone']);
				$('#state_comm').val(resp['data'][0]['state']);
				$('#city_comm').val(resp['data'][0]['city']);
				$('#col_comm').val(resp['data'][0]['colony']);
				$('#cp_comm').val(resp['data'][0]['postal_code']);
				$('#addss_comm').val(resp['data'][0]['address']);
			}
		}
	});
}


function staffInfoList(){

	var url = base_url + 'commerce/'+id_commerce+'/staff';

	$.ajax({
		url: url,
		type:'GET',
		success: function(resp){
			console.log(resp)
			var code= resp['code'];
			var rol = Array("","Admin","Vendedor","Repartidor");

			if(code == 200){
				for (var i = 0; i < resp['data'].length; i++){

					var id_staff = resp['data'][i]['id_info_user_commerce'];
					var name = resp['data'][i]['name'];
					var last_name = resp['data'][i]['last_name'];
					var id_rol = resp['data'][i]['id_rol_commerce'];

					var element = '<tr>'+
		                            '<td>'+id_staff+'</td>'+
		                            '<td>'+name+'</td>'+
		                            '<td>'+last_name+'</td>'+
		                            '<td>'+rol[id_rol]+'</td>'+
		                            '<td><a class="btn btn-danger btn-xs" href="#">Eliminar</a>'+
		                            	'<span> - </span>' +
		                            	'<a class="btn btn-warning btn-xs" href="#">Editar</a></td>'+
		                          '</tr>';
		           	$('#tbody_products').append(element);               	
				}
			}
		}
	});
}

