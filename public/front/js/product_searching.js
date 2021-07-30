var url ="http://127.0.0.1:8000/";
$(document).ready(function(){
	$('input[type=radio][name="brand"]').change(function(){
		var value =  $(this).val();
		 $.ajax({
            url: "/api/brandsearch/product?brand=" + value,
            method: "Get",
            dataType: "json",
            success: function(response) {
// alert(response.id)
             showProduct(response);
            },
        });
	})
})
function showProduct(response){
    $(".one").remove();
	var potrait;
	
	
potrait=response.product.forEach((element)=>{
	var one = document.createElement('Div');
	one.setAttribute('class','col-sm-6 col-md-6 col-lg-4 col-xl-4 one');
	var prosinglefix =document.createElement('Div');
	prosinglefix.setAttribute('class','products-single fix');
	var boximg= document.createElement('Div');
	boximg.setAttribute('class','box-img-hover');
	var typelb=document.createElement('Div');
	typelb.setAttribute('class','type-lb');
	var lbsale=document.createElement('p');
	lbsale.setAttribute('class','sale');
	var img=document.createElement('img');
	img.setAttribute('class','img-fluid');
	img.setAttribute('alt','Image');
	var maxicon=document.createElement('Div');
	maxicon.setAttribute('class','mask-icon');
	var maxiconul=document.createElement('ul');
	var li=document.createElement('li');
    var li1=document.createElement('li');
    var li2=document.createElement('li');
	var liancher=document.createElement('a');
	liancher.setAttribute('data-toggle','tooltip');
	liancher.setAttribute('data-placement','right');
	liancher.setAttribute('title','View');
    var liancher1=document.createElement('a');
	liancher1.setAttribute('data-toggle','tooltip');
	liancher1.setAttribute('data-placement','right');
	liancher1.setAttribute('title','Compare');
    var liancher2=document.createElement('a');
	liancher2.setAttribute('data-toggle','tooltip');
	liancher2.setAttribute('data-placement','right');
	liancher2.setAttribute('title','Add to Wishlist');
	var eye=document.createElement('i');
	eye.setAttribute('class','fas fa-eye');
	var sync=document.createElement('i');
	sync.setAttribute('class','fas fa-sync-alt');
	var heart=document.createElement('i');
	heart.setAttribute('class','far fa-heart');
	var addtocartancher=document.createElement('a');
	addtocartancher.setAttribute('class','cart');
	addtocartancher.innerHTML= "Add To Cart";
	var whytext=document.createElement('div');
	whytext.setAttribute('class','why-text');
	var whytexth4=document.createElement('h4');
	var whytexth5=document.createElement('h5');
	alert(element.id);
    lbsale.innerHTML="sale";
    typelb.appendChild(lbsale);
    img.setAttribute('src',url +"upload/"+element.img1);
    liancher.setAttribute('href',url+"front/shop_detail/"+element.id);
    liancher.appendChild(eye);
    liancher1.setAttribute('href',"#");
    liancher1.appendChild(sync);
    liancher2.setAttribute('href',url+"add/to/wishlist/"+element.id);
    liancher2.appendChild(heart);
    li.appendChild(liancher);
    li1.appendChild(liancher1);
    li2.appendChild(liancher2);
    maxiconul.appendChild(li);
    maxiconul.appendChild(li1);
    maxiconul.appendChild(li2);
    addtocartancher.setAttribute('href',url+"add/to/cart/"+element.id);
    maxicon.appendChild(maxiconul);
    maxicon.appendChild(addtocartancher);
    boximg.appendChild(typelb);
    boximg.appendChild(img);
    boximg.appendChild(maxicon);
    whytexth4.innerHTML=element.product_name;
    whytexth5.innerHTML=element.selling_price;
    whytext.appendChild(whytexth4);
    whytext.appendChild(whytexth5);
    prosinglefix.appendChild(boximg);
    prosinglefix.appendChild(whytext);
    one.appendChild(prosinglefix);
// i=i++;
$('#gridone').append(one);
});









	var two;
	var colsm6one;

}
