






//匀速运动
function linearMove(obj, attr, speed, iTarget) {
	clearInterval(obj.timer);
	obj.timer = setInterval(function() {
		var attrValue = parseInt(getStyle(obj, attr));
		if(Math.abs(iTarget - attrValue) < Math.abs(speed)) {
			obj.style[attr] = iTarget + "px";
		} else {
			obj.style[attr] = attrValue + speed + "px";
		}

	}, 20);
}
//缓冲运动 opacity
function easeMove(obj, attr, speed, iTarget) {
	clearInterval(obj.timer);
	obj.timer = setInterval(function() {
		var attrValue = getStyle(obj, attr);
		//三目运算
		attrValue = attr == "opacity" ? attrValue * 100 : parseInt(attrValue);
		var speedEnd = (iTarget - attrValue) / speed;
		speedEnd = speedEnd > 0 ? Math.ceil(speedEnd) : Math.floor(speedEnd);
		if(attrValue == iTarget) {
			clearInterval(obj.timer);
		} else {
			if(attr == "opacity") {

				obj.style.opacity = (attrValue + speedEnd) / 100;
			} else {
				obj.style[attr] = attrValue + speedEnd + "px";
			}
		}
	}, 20);
}
//获取样式
function getStyle(obj, attr) {
	if(obj.currentStyle) {
		return obj.currentStyle[attr]; //针对IE
	} else {
		return getComputedStyle(obj)[attr];
	}
}

//获取随机数
function getRandom(max, min) {
	return Math.floor(Math.random() * (max - min + 1) + min);
}
//获取随机的颜色
function getRandomColor() {
	var r = getRandom(255, 0);
	var g = getRandom(255, 0);
	var b = getRandom(255, 0);
	var colorString = "rgb(" + r + ", " + g + ", " + b + ")";
	return colorString;
}

//滚轮事件

function mouseWheel(obj, fn) {
	var isFireFox = window.navigator.userAgent.indexOf("FireFox") > 0;

	if(isFireFox) {
		//火狐浏览器绑定滚轮事件
		obj.addEventListener("DOMMouseScroll", progreess, false);
	} else {
		obj.onmousewheel = progreess;
	}

	function progreess(e) {
		var e = e || window.event;
		var down = true; //记录滚轮的方向,默认true向上;

		//e.detail 火狐获取浏览器滚轮滚动系数
		if(e.detail) {
			//小于0 页面向下 改变down记录的状态
			if(e.detail < 0) {
				down = false;
			}
		} else {
			//非火狐  大于0 页面向下
			if(e.wheelDelta > 0) {
				down = false;
			}
		}
		fn(obj, down);
	}
}

function changeStyle(obj, down) {
	if(down) {

		obj.style.width = obj.offsetWidth + 1 + "px";
		obj.style.height = obj.offsetHeight + 1 + "px";
	} else {
		obj.style.width = obj.offsetWidth - 1 + "px";
		obj.style.height = obj.offsetHeight - 1 + "px";
	}
}

//fixObj  固定不动的元素
//move   移动的元素
//碰撞检测函数
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