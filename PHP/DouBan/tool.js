/**
 * Created by dllo on 17/7/19.
 */
//ajax_get 请求
function ajax_get(url,callback) {
    var xhr = null;
    if(window.XMLHttpRequest){
        xhr = new XMLHttpRequest();
    }else{
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhr.open("get",url,true);
    xhr.send();
    xhr.onreadystatechange = function () {
        if(xhr.readyState == 4){
            if(xhr.status == 200){
                callback(xhr.responseText);
            }
        }
    }
}

//ajax_post  请求
function ajax_post(url,args,callback) {
    var xhr = null;
    if(window.XMLHttpRequest){
        xhr = new XMLHttpRequest();
    }else{
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhr.open("post",url,true);
//        setRequestHeader 请求头  设置请求头
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
//        post请求参数包
    xhr.send(args);
    xhr.onreadystatechange = function () {
        if(xhr.readyState == 4 && xhr.status == 200){
            callback(xhr.responseText);
        }
    }
}