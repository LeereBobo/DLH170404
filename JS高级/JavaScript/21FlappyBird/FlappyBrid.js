var oHead = document.getElementById("head");
var oBird = document.getElementById("bird");
var oDuctWrap = document.getElementById("ductWrap");
var oMenu = document.getElementById("menu");
var oSlider = document.getElementById("slider");
var oSlider_img = document.getElementById("slider_img");
var oScore = document.getElementById("score");

var ductMoveTimer = null; //柱子移动的timer
var sliderTimer = null; //草坪移动定时器
var birdTimer = null; //鸟移动的定时器
var scoreNum = 0; //记录分数

oSlider_img.style.width = oSlider_img.children[0].offsetWidth * 2 + "px";

sliderTimer = setInterval(function() {
	if(oSlider_img.offsetLeft <= -oSlider_img.offsetWidth / 2) {
		oSlider_img.style.left = 0;
	} else {
		oSlider_img.style.left = oSlider_img.offsetLeft - 1 + "px";
	}
}, 20)

oMenu.onclick = function(e) {
	var e = e || window.event;
	e.cancelBubble = true;
	this.style.display = "none";
	oBird.style.display = "block";
	oDuctWrap.style.display = "block";
	oHead.style.display = "none";
	//柱子移动
	ductMove();
	//鸟移动
	birdMove();

}

function ductMove() {
	//每三秒创建一个柱子
	ductMoveTimer = setInterval(function() {
		var ductSmallDiv = document.createElement("div");
		ductSmallDiv.setAttribute("class", "ductSmall");
		createDuctChlid(ductSmallDiv);
		oDuctWrap.appendChild(ductSmallDiv);

		//自定义属性 ,记录柱子距离左侧的位置
		ductSmallDiv.theleft = 300;
		ductSmallDiv.style.left = ductSmallDiv.theleft + "px";
		ductSmallDiv.add = true; //只让分数加一次
		ductSmallDiv.timer = setInterval(function() {
			ductSmallDiv.theleft -= 2;
			//当柱子移动到屏幕左侧外时,移除元素和本身的定时器
			if(ductSmallDiv.theleft <= -62) {
				clearInterval(ductSmallDiv.timer);
				oDuctWrap.removeChild(ductSmallDiv);
			} else if(ductSmallDiv.theleft < -32) {
				if(ductSmallDiv.add) {
					changeScore();
					ductSmallDiv.add = false;

				}
			}
			ductSmallDiv.style.left = ductSmallDiv.theleft + "px";
		}, 30);

	}, 3000);

}

//改变分数
function changeScore() {

	scoreNum++;
	var scoreStr = String(scoreNum);
	oScore.innerHTML = "";
	for(var i = 0; i < scoreStr.length; i++) {
		var theImg = new Image();
		theImg.src = "img/" + scoreStr[i] + ".jpg";
		oScore.appendChild(theImg);
	}

}

function createDuctChlid(ductSmallDiv) {
	//随机上面柱子的高度所占父级的百分比
	var upHeight = getRandom(25, 50);
	var oDuctUp = document.createElement("div");
	oDuctUp.setAttribute("class", "duct_up");
	oDuctUp.style.height = upHeight + "%";

	var upImg = document.createElement("img");
	upImg.src = "img/up_pipe.png";
	oDuctUp.appendChild(upImg);

	var oDuctDown = document.createElement("div");
	oDuctDown.setAttribute("class", "duct_down");
	oDuctDown.style.height = (75 - upHeight) + "%";

	var downImg = document.createElement("img");
	downImg.src = "img/down_pipe.png";
	oDuctDown.appendChild(downImg);

	ductSmallDiv.appendChild(oDuctDown);
	ductSmallDiv.appendChild(oDuctUp);

}

function getRandom(min, max) {
	return Math.floor(Math.random() * (max - min + 1) + min);
}

function birdMove() {
	oBird.speed = 0; //鸟的初始速度为0;
	birdTimer = setInterval(function() {
		oBird.speed += 0.5;
		if(oBird.speed >= 6) {
			oBird.speed = 6;
		}
		if(oBird.speed < 0) {
			oBird.src = "img/up_bird0.png";
		} else {
			oBird.src = "img/down_bird0.png"
		}
		//上下边距的碰撞检测
		if(Math.abs(0 - oBird.offsetTop) < Math.abs(oBird.speed)){
			cleartimer();
			alert("游戏结束");
		}else if(Math.abs(422 - 29 - oBird.offsetTop) < Math.abs(oBird.speed) ){
			cleartimer();
			alert("游戏结束");
		}else{
			oBird.style.top = oBird.offsetTop + oBird.speed + "px";
		}
		
		//鸟和柱子的碰撞检测
		//所有的柱子
		var ductSmalls = oDuctWrap.children;
		for(var i = 0; i < ductSmalls.length; i++){
			for(var j = 0; j < ductSmalls[i].children.length ; j++){
				//upOrDown  每个柱子的子元素  即上面或者下面的柱子
				var upOrDown = ductSmalls[i].children[j];
				var isTouch = oIsTouch(oBird,upOrDown);
				if(isTouch){
					cleartimer();
					alert("游戏结束");
				}
			}
		}
		
	}, 30);
}

//fixObj  固定不动的元素
//move   移动的元素

function oIsTouch(fixObj,moveObj){
	//moveObj的宽高
	var moveW = moveObj.offsetWidth;
	var moveH = moveObj.offsetHeight;
	
	//moveObj的位置
	var moveL = moveObj.parentNode.offsetLeft;
	var moveT = moveObj.offsetTop;
	
	//fixObj的宽高
	var fixW = fixObj.offsetWidth;
	var fixH = fixObj.offsetHeight;
	
	//fixObj的位置
	var fixL = fixObj.offsetLeft;
	var fixT = fixObj.offsetTop;
	
	var leftType = moveL + moveW >= fixL;
	var rightType = moveL <= fixW + fixL;
	var topType = moveT + moveH >= fixT;
	var bottomType = moveT <= fixH + fixT;
	
	return leftType && rightType && topType && bottomType;
}

//清定时器
function cleartimer(){
	var timer = setInterval(function(){
		for(var i = 1; i < timer; i++){
			clearInterval(i);
		}
	},10);
}

document.onclick = function() {
	oBird.speed = -7;
}