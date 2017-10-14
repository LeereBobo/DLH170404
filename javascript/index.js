//1.匀速运动函数完美封装
function linearMove(obj, attr, speed, iTarget) {
	clearInterval(obj.timer);
	obj.timer = setInterval(function() {
		var attrValue = parseInt(getStyle(obj, attr));
		if(Math.abs(iTarget - attrValue) <= Math.abs(speed)) {
			obj.style[attr] = iTarget + "px";
			clearInterval(obj.timer);
		} else {
			obj.style[attr] = attrValue + speed + "px";
		}

	}, 20);
}

//适配于所有浏览器
function getStyle(obj, attr) {

	if(obj.currentStyle) {
		return obj.currentStyle[attr]; //针对IE
	} else {
		return getComputedStyle(obj)[attr];
	}

}

//2.缓冲函数封装
function easeMove(obj, attr, speed, iTarget) {
	clearInterval(obj.timer);
	obj.timer = setInterval(function() {

		var attrValue = getStyle(obj, attr)
			/*if (attr == "opcacity") {
				attrValue *= 100;
			} else {
				attrValue = parseInt(attrValue);
			}*/
		attrValue = attr == "opacity" ? attrValue * 100 : parseInt(attrValue);
		var speedEnd = (iTarget - attrValue) / speed;
		speedEnd = speedEnd > 0 ? Math.ceil(speedEnd) : Math.floor(speedEnd);
		if(attrValue == iTarget) {
			clearInterval(obj.timer);
		} else {
			if(attr == "opacity") {
				obj.style[attr] = (attrValue + speedEnd) / 100;
			} else {
				obj.style[attr] = attrValue + speedEnd + "px";
			}
		}
	}, 30);
}

//获取属性
function getStyle(obj, attr) {
	//获取当前的样式
	if(obj.currentStyle) {
		return obj.currentStyle[attr]; //针对IE 			
	} else {
		return getComputedStyle(obj)[attr];
	}
}

//3.multi 多个值运动
function multiMove(obj, attrJson, speed) {
	clearInterval(obj.timer);
	obj.timer = setInterval(function() {
		//定时器每走一次 三个属性值都有变化
		//attr是json中的key key代表的是要变化的属性
		//当三个属性值都不变的时候(到达目标值时)的时候 停止定时器

		var isStop = true; //标记定时器是否可以停止,默认停止
		for(var attr in attrJson) {

			//当前属性的目标值
			var iTarget = attrJson[attr];
			//获取当前属性的样式值
			var attrValue = getStyle(obj, attr);
			attrValue = attr == "opacity" ? attrValue * 100 : parseInt(attrValue);

			var speedEnd = (iTarget - attrValue) / speed;
			speedEnd = speedEnd > 0 ? Math.ceil(speedEnd) : Math.floor(speedEnd);

			//如果每次都没进来此if判断  说明可以停止定时器
			if(iTarget != attrValue) {

				isStop = false; //没达到目标值,不能停止定时器
				obj.style[attr] = attr == "opacity" ? (attrValue + speedEnd) / 100 : (attrValue + speedEnd + "px");
			}
		}

		//判断是否三个都达到目标
		if(isStop) {
			clearInterval(obj.timer);
		}

	}, 30);
}

//4.随机数
function ran(max, min) {
	return Math.floor(Math.random() * (max - min + 1) + min);
}

//5.随机颜色

function ranColor() {
	var r = ran(0, 255);
	var g = ran(0, 255);
	var b = ran(0, 255);
	return "rgb(" + r + ", " + g + "," + b + ")";
}

//6.滚轮事件封装
//滚轮事件要做的事
function changeStyle(obj, down) {
	if(down) {
		obj.style.width = oDiv1.offsetWidth + 5 + "px";
		obj.style.height = oDiv1.offsetHeight + 5 + "px";
	} else {
		obj.style.width = oDiv1.offsetWidth - 5 + "px";
		obj.style.height = oDiv1.offsetHeight - 5 + "px";
	}
}

//判断是否是火狐浏览器
function mouseWheel(obj, fn) {

	var isFireFox = window.navigator.userAgent.indexOf("FireFox") > 0;

	//绑定相同的响应事件(函数)
	if(isFireFox) {

		//火狐浏览器绑定滚轮
		obj.addEventListener("DOMMouseScroll", progress, false);

	} else {
		obj.onmousewheel = progress;
	}

	//判断往上还是往下动
	function progress(e) {
		var e = e || window.event;
		var down = true; //记录滚轮方向  默认向上

		//e.detail 火狐获取滚轮滚动系数
		if(e.detail) {
			//小于0  页面向下 改变down记录的状态
			if(e.detail < 0) {
				down = false;
			}
		} else {
			//非火狐 大于0 页面向下
			if(e.wheelDelta > 0) {
				down = false;
			}
		}
		fn(obj, down);

	}
}

//7.事件绑定函数
function addEvent(obj, theEvent, fn) {
	if(obj.attachEvent) {
		//IE678
		obj.attachEvent("on" + theEvent, fn, false);
	} else {
		obj.addEventListener(theEvent, fn, false);
	}
}

//8.碰撞检测函数
function isTouch(fixObj,moveObj){
	//moveObj的宽高
	var moveW = moveObj.offsetWidth;
	var moveH = moveObj.offsetHeight;
	
	//moveObj的位置
	var moveL = moveObj.offsetLeft;
	var moveT = moveObj.offsetTop;
	
	//fixObj的宽高
	var fixW = fixObj.offsetWidth;
	var fixH = fixObj.offsetHeight;
	
	//fixObj的位置
	var fixL = fixObj.offsetLeft;
	var fixT = fixObj.offsetTop;
	
	var leftType = moveL + moveW >= fixL;
	var topType = moveT + moveH >= fixT;
	var rightType = fixW + fixL >= moveL;
	var bottomType = fixH + fixT >= moveT;
	return leftType && rightType && topType && bottomType;
	
}