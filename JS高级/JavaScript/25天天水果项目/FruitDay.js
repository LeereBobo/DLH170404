var oFruitNotice = document.getElementById("fruitNotice");
var oNotices = document.getElementById("notices");
var oPhoneFruit = document.getElementById("phoneFruit");
var oPhoneMove = document.getElementById("phoneMove");
var oSelectCity = document.getElementsByClassName("selectCity");
var oul = document.getElementsByClassName("oul");
var oshCity = document.getElementById("shCity");
var oShMOver = document.getElementById("shMOver");
var oPriceImgSrc = document.getElementsByClassName("priceImgSrc");
var oShoppingSrc = document.getElementById("shoppingSrc");
var oShowCity = document.getElementById("showCity");
var oClickCity = document.getElementsByClassName("clickCity");
var oLiCity = document.getElementsByClassName("liCity");
var oUlCity = document.getElementsByClassName("ulCity");
var oShoppingBox = document.getElementById("shopping-box");
var oAddSuccess = document.getElementById("addSuccess");
var oDeleteImg = document.getElementById("deleteImg");
var oIsContinue = document.getElementById("isContinue");
var oShopNum = document.getElementById("shopNum");
var oEverPrice = document.getElementsByClassName("everPrice");
var oWrapPrice = document.getElementById("wrapPrice");
var oNavShink = document.getElementById("navShink");
var oNavHidden = document.getElementById("nav-hidden");
var shoppingHidden = document.getElementById("shopping-hidden");
var oFruitImg = document.getElementsByClassName("fruitImg");
var oFruitIndouce = document.getElementsByClassName("fruitIndouce");
var oAllFruit = document.getElementById("allFruit");
var oHiddenNum = document.getElementById("hiddenNum");
var oHiddenPrice = document.getElementById("hiddenPrice");
var inputPrice = 0;//记录点击input后的价格
var clickNum = 0; //记录点击城市的次数
var carNum = 0; //记录小车点击的次数

var allCount = 0;//记录点击input和之前所有的商品数量
var isShopping = true;


//点击li城市 切换城市
for(var i = 0; i < oLiCity.length; i++) {
	oLiCity[i].onclick = function() {
		oShowCity.innerHTML = this.innerHTML;
	}
}

//点击热门城市 切换城市
for(var i = 0; i < oClickCity.length; i++) {
	oClickCity[i].onclick = function() {
		oShowCity.innerHTML = this.innerHTML;
	}
}

//上海的移入移出
oshCity.onmouseover = function() {
	oShMOver.style.display = "block";
	oshCity.style.backgroundColor = "white";
	oshCity.style.cursor = "pointer";
}
oshCity.onmouseout = function() {
	oShMOver.style.display = "";
	oshCity.style.backgroundColor = "";
	oshCity.style.cursor = "";
}

for(var i = 0; i < oSelectCity.length; i++) {

	oSelectCity[i].onmouseover = function() {

		this.style.background = "url(img/WX20170629-105556.png) no-repeat 150px 0 rgb(237,237,237) ";
	}
	oSelectCity[i].onmouseout = function() {

		this.style.background = "url(img/WX20170629-105952.png) no-repeat 150px 0 rgb(255,255,255) ";
	}
}
//城市点击展开收起来
for(var i = 0; i < oSelectCity.length; i++) {
	oSelectCity[i].index = i;

	oSelectCity[i].onclick = function() {
		if(this.index <= 1) {
			oShowCity.innerHTML = oUlCity[this.index].innerHTML;
		}

		clickNum++;
		if(clickNum % 2 == 1) {
			for(var j = 0; j < oul.length; j++) {
				oul[j].style.display = "none";
			}
			oul[this.index].style.display = "block";
			this.style.background = "url(img/WX20170629-105616.png) no-repeat 150px 0 rgb(237,237,237) ";
			this.onmouseover = function() {
				this.style.background = "url(img/WX20170629-105616.png) no-repeat 150px 0 rgb(237,237,237) ";
			}
			this.onmouseout = function() {
				this.style.background = "url(img/WX20170629-105641.png) no-repeat 150px 0 rgb(255,255,255) ";

			}
		} else {
			oul[this.index].style.display = "none";
			this.style.background = "url(img/WX20170629-105952.png) no-repeat 150px 0 rgb(255,255,255) ";

		}
	}

}


//导航栏的折叠隐藏
var isNav = true;
oNavShink.onclick = function(){
	if(isNav){
		oNavShink.style.backgroundColor = "rgb(241,155,0)";
	    oNavHidden.style.display = "block";
	    isNav = false;
	}else{
		oNavShink.style.backgroundColor = "rgb(83,145,25)";
		 oNavHidden.style.display = "none";
		 isNav = true;
	}
	
}

var allPrice = 0;
//小车点击换图片 并且弹出数量加1
	oShopNum.innerHTML =carNum; 	
for(var i = 0; i < oPriceImgSrc.length; i++) {
	oPriceImgSrc[i].sub = i;
	oPriceImgSrc[i].onclick = function() {
		var inputNum = 1;//记录Input的加减的数量

		    //记录点击购物车的次数,将数字显示在成功购物数量上
		    carNum++;
		    oShopNum.innerHTML =carNum; 
		    //计算总的价格 并显示
		    var ePrice = oEverPrice[this.sub].innerHTML;
		    var re = /[0-9]+\.[0-9]+/g;
		    var priceOne = ePrice.match(re);
		    allPrice += parseFloat(priceOne);
		    oWrapPrice.innerText = "¥" + allPrice ;
		   
		    //改变购物车的图片 显示蒙版 显示成功购物
			this.src = "img/2895E58AC4DBAFD155A4D409AE0F2AFE.jpg";
			oAddSuccess.style.display = "block";
			maskDiv.style.display = "block";
			
			
			//将点击的水果显现在导航栏的购物车中
			var newFruitDiv = document.createElement("div");
			newFruitDiv.className = "hiddenImg";
			
			oAllFruit.appendChild(newFruitDiv);
			
			var newFruitImg = new Image();
			newFruitImg.width = "70";
			newFruitImg.height = "70";
			newFruitImg.src = oFruitImg[this.sub].src;
			newFruitDiv.appendChild(newFruitImg);
			
			var newdescriptDiv = document.createElement("div");
			newdescriptDiv.className = "hiddenContent";
			
			oAllFruit.appendChild(newdescriptDiv);
			
			var descriptDiv = document.createElement("div");
			newdescriptDiv.appendChild(descriptDiv);
			descriptDiv.innerHTML = oFruitIndouce[this.sub].innerHTML;
			
			var priceDiv = document.createElement("div");
			newdescriptDiv.appendChild(priceDiv);
			priceDiv.innerHTML = oEverPrice[this.sub].innerHTML;
			
			var spanLeast = document.createElement("span");
			newdescriptDiv.appendChild(spanLeast);
			spanLeast.id= "countLeast";
			spanLeast.innerHTML = "-";
			
			var newInput = document.createElement("input");
			newInput.type = "text";
			newInput.value = inputNum;
			newInput.id="myInput";
			newdescriptDiv.appendChild(newInput);
			
			var spanAdd = document.createElement("span");
			newdescriptDiv.appendChild(spanAdd);
			spanAdd.id= "countAdd";
			spanAdd.innerHTML = "+";
			
			var  spanDelete = document.createElement("span");
			newdescriptDiv.appendChild(spanDelete);
			spanDelete.innerText = "delete";
			spanDelete.id="deleteOne";
			
			oHiddenNum.innerHTML = inputNum;
			//点击input加减数量
			spanAdd.onclick = function(){
				inputNum++;
				newInput.value = inputNum;
				//导航栏购物车中的商品数量和价格
				oHiddenNum.innerHTML = inputNum;
				oHiddenPrice.innerHTML =  "¥" + allPrice * inputNum;
			}
			spanLeast.onclick = function(){
				if(inputNum >= 2){
				inputNum--;
				newInput.value = inputNum;
				//导航栏购物车中的商品数量和价格
				oHiddenNum.innerHTML = inputNum;
				oHiddenPrice.innerHTML =  "¥" + allPrice * inputNum;
				}
			}
	
			//点击删除时,删除添加的图片
			spanDelete.onclick = function(){
				oAllFruit.removeChild(newFruitDiv);
				oAllFruit.removeChild( newdescriptDiv);
			}
			
			
			
	}	
}
var nullShopping = true;
//搜索处购物车换图片
oShoppingSrc.onclick = function() {
	if(isShopping) {
		oShoppingSrc.src = "img/2895E58AC4DBAFD155A4D409AE0F2AFE.jpg";
		isShopping = false;
	} else {
		oShoppingSrc.src = "img/7A707F4FBBF2AF5DC5E17AB39A1918AF.jpg";	
		isShopping = true;
	}
	if(carNum == 0 && nullShopping){
		oShoppingBox.style.display = "block";
		nullShopping = !nullShopping;
	}else if (carNum == 0 && !nullShopping){
		oShoppingBox.style.display = "none";	
		nullShopping = !nullShopping;
	}
	if(carNum >= 1 &&  nullShopping){
		shoppingHidden.style.display = "block";
		nullShopping = !nullShopping;
	}else if(carNum >= 1 && !nullShopping){
		shoppingHidden.style.display = "none";
		nullShopping = !nullShopping;
	}
}

//点击X和继续购物弹出的购物车隐藏 
oDeleteImg.onclick = function() {
	oAddSuccess.style.display = "none";
	maskDiv.style.display = "none";
	for(var i = 0; i < oPriceImgSrc.length; i++) {
		oPriceImgSrc[i].src = "img/57DA7AB517D10B67CA29200F96E5A137.png";
	}
	
}
oIsContinue.onclick = function() {
	oAddSuccess.style.display = "none";
	maskDiv.style.display = "none";
	for(var i = 0; i < oPriceImgSrc.length; i++) {
		oPriceImgSrc[i].src = "img/57DA7AB517D10B67CA29200F96E5A137.png";
	}
}
//创建蒙版
var maskDiv = document.createElement("div");
maskDiv.style.width = (document.body.clientWidth) + "px";
maskDiv.style.height = (document.body.clientHeight) + "px";
maskDiv.className = "mask";
document.body.appendChild(maskDiv);

//果园公告鼠标移入移出
oFruitNotice.onmouseover = function() {
	oNotices.style.display = "block";
	oFruitNotice.style.backgroundColor = "white";
	oFruitNotice.style.cursor = "pointer";
}
oFruitNotice.onmouseout = function() {
	oNotices.style.display = "";
	oFruitNotice.style.backgroundColor = "";
	oFruitNotice.style.cursor = "";
}

//手机果园的移入移出
oPhoneFruit.onmouseover = function() {
	oPhoneMove.style.display = "block";
	oPhoneFruit.style.backgroundColor = "white";
	oPhoneFruit.style.cursor = "pointer";
}
oPhoneFruit.onmouseout = function() {
	oPhoneMove.style.display = "";
	oPhoneFruit.style.backgroundColor = "";
	oPhoneFruit.style.cursor = "";
}