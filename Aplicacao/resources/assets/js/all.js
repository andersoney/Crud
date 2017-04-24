var map;
var markers={};
var cont=0;
var data={};



inicioMapa=function() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 0, lng: 0},
		zoom: 2
	});
	$.get('/getData',function($dota){
		//console.log($dota);
		this.data=$dota;
		for(var i=0 ; i<data.length ; i++){
		//console.log(i);
		addMarker({lat:data[i].ltg,lng:data[i].lng},'asdasd','adasda');
	}
	});
	
	
	//marca();
}
function marca(){
	var location={lat:0,lng:0};
	var mensage='Primeiro Marker';
	var textPassMouse='Testo ao passar o mause';
	addMarker(location,mensage,textPassMouse);
}
function addMarker(location,mensage,altTitulo) {
	
  	var marker = new google.maps.Marker({
    	position: location,
    	map: map,
    	title: altTitulo
  	});
	marker.addListener('click',function(){
		var infowindow = new google.maps.InfoWindow({
		content: mensage
  	});
		infowindow.open(marker.get('map'),marker);
	});
	markers[cont]=marker;
}
$.get('/getData',function($data){
	//console.log($data);
	data=$data;
});

reinicioMapa=function($n) {
	$.get('/getData',function($dota){
		//console.log($dota);
		this.data=$dota;
		for(var i=0 ; i<data.length ; i++){
			if($n===data[i].id){
				var ncenter={lat:data[i].ltg,lng:data[i].lng};
			}
		}
	});
	$.get('/getData',function($dota){
		//console.log($dota);
		this.data=$dota;
		for(var i=0 ; i<data.length ; i++){
		//console.log(i);
		addMarker({lat:data[i].ltg,lng:data[i].lng},'asdasd','adasda');
	}
	});
	for(var i=0 ; i<data.length ; i++){
		if($n===data[i].id){
			var ncenter={lat:data[i].ltg,lng:data[i].lng};
		}
		addMarker({lat:data[i].ltg,lng:data[i].lng},'asdasd','adasda');
	}
	map = new google.maps.Map(document.getElementById('map'), {
		center: ncenter,
		zoom: 8
	});	
}

var axios=require('axios');
console.log(axios);

excluir=function($n){
	$.ajax({
	    type: "DELETE",
	    url: "http://localhost:8000/artigo/"+$n,
	    success: deletedSucesso,
	    error: deletedErro
	});
};

deletedSucesso=function(msg){
	console.log("Data Deleted: ");
	console.log(msg);
};
deletedErro=function(msg){
	console.log("Erro para deletar");
	console.log(msg);
};