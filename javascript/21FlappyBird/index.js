var oHead = document.getElementById("head");
var oBird = document.getElementById("bird");
var oDuckWrap = document.getElementById("ductWrap");
var oMenu = document.getElementById("menu");
var oSlider = document.getElementById("slider");
var oSlider_img = document.getElementById("slider_img");
var oScore = document.getElementById("score");

var ductMoveTimer = null; //柱子移动定时器
var sliderTimer = null; //草坪移动定时器
var birdTimer = null; //鸟移动的定时器
var scoreNum = 0; //记录分数

oSlider.style.width = oSlider_img.children[0].offsetWidth * 2 + "px";
sliderTimer = setInterval(function() {
	if(oSlider_img.offsetLeft <= -oSlider_img.offsetWidth / 2) {
		oSlider_img.style.left = 0;
	} else {
		oSlider_img.style.left = oSlider_img.offsetLeft - 1 + "px";
	}
}, 20);

oMenu.onclick = function(e) {
	var e = e || window.event;
	e.cancelBubble = true;
	this.style.display = "none";
	oBird.style.display = "block";
	oDuckWrap.style.display = "block";
	oHead.style.display = "none";
	//柱子移动
	ductMove();
	//小鸟移动
	birdMove();
}

function ductMove() {
	//每三秒创建一个柱子
	ductMoveTimer = setInterval(function() {
		var ductSmallDiv = document.createElement("div");
		ductSmallDiv.setAttribute("class", "ductSmall");
		createDuctChild(ductSmallDiv);
		oDuckWrap.appendChild(ductSmallDiv);

		//自定义属性,记录柱子距离左侧的位置
		ductSmallDiv.theLeft = 300;
		ductSmallDiv.style.left = ductSmallDiv.theLeft + "px";
		ductSmallDiv.add = true; //只让分数加一次
		ductSmallDiv.timer = setInterval(function() {

			ductSmallDiv.theLeft -= 2;

			//当柱子移动到屏幕左侧外时,移除元素和本身的定时器
			if(ductSmallDiv.theLeft <= -62) {
				clearInterval(ductSmallDiv.timer);
				oDuckWrap.removeChild(ductSmallDiv);

			} else if(ductSmallDiv.theLeft < -32) {
				if(ductSmallDiv.add) {
					changeScore();
					ductSmallDiv.add = false;
				}
			}

			ductSmallDiv.style.left = ductSmallDiv.theLeft + "px";

		}, 30);

	}, 3000);
}

//每次改变分数
function changeScore() {
	scoreNum++;
	oScore.innerHTML = "";
	var scoreStr = String(scoreNum);
	for(var i = 0; i < scoreStr.length; i++) {
		//遍历字符串
		var theImg = new Image();
		theImg.src = "img/" + scoreStr[i] + ".jpg";
		oScore.appendChild(theImg);
	}
}

function createDuctChild(ductSmallDiv) {
	//随机上面柱子的高度所占的百分比
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

	ductSmallDiv.appendChild(oDuctUp);
	ductSmallDiv.appendChild(oDuctDown);

}

function getRandom(min, max) {
	return Math.floor(Math.random() * (max - min + 1) + min);
}

function birdMove() {
	oBird.speed = 0; //鸟的初始速度

	birdTimer = setInterval(function() {
		oBird.speed += 0.5;
		if(oBird.speed >= 6) {
			oBird.speed = 6;
		}

		if(oBird.speed < 0) {
			oBird.src = "img/up_bird0.png";
		} else {
			oBird.src = "img/down_bird0.png";
		}

		//上下边距的碰撞检测
		if(Math.abs(0 - oBird.offsetTop) < Math.abs(oBird.speed)) {
			clearTimer();
			alert("游戏结束");
		} else if(Math.abs(422 - 29 - oBird.offsetTop) < Math.abs(oBird.speed)) {
			clearTimer();
			alert("游戏结束");
		} else {
			oBird.style.top = oBird.offsetTop + oBird.speed + "px";
		}
		
		//鸟和柱子的碰撞检测
		//所有的柱子
		var ductSmalls = oDuckWrap.children;
		for (var i = 0; i < ductSmalls.length; i++) {
			for (var j = 0; j < ductSmalls[i].children.length;j++) {
				
				//upOrDown 每个柱子的子元素 即上面或者下面的柱子
				var upOrDown = ductSmalls[i].children[j];
				var theTouch = isTouch(oBird,upOrDown);
				
				if (theTouch) {
					clearTimer();
					alert("游戏结束");
				} 
				
			}
		}

	}, 30);
}


function isTouch(fixObj,moveObj){
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
	
	var leftType = moveL + moveW > fixL;
	var topType = moveT + moveH > fixT;
	var rightType = fixW + fixL > moveL;
	var bottomType = fixH + fixT > moveT;
	return leftType && rightType && topType && bottomType;
	
}

//清除定时器:共6个,按添加次序1~6,清除前5
function clearTimer() {
	var timer = setTimeout(function() {
		for(var i = 1; i < timer; i++) {
			clearInterval(i);
		}
	}, 10);
}

document.onclick = function() {
	oBird.speed = -7;
}