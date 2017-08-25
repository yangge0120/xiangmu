function Ajax(type,url,fnSuc,data){
	var xhr = XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
	var str = "";
	for(var attr in data){
		str += attr + "=" + data[attr] + "&";
	}
	str = str.replace(/&$/,"");
	type = type.toUpperCase();
	if(type == "GET"){
		xhr.open("GET",url+"?",true);
		xhr.send();
	}
	if(type == "POST"){
		xhr.open("POST",url,true);
		xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
		xhr.send();
	}
	xhr.onreadystatechange = function(){
		if(xhr.readystate == 4 && xhr.status == 200){
			var data = xhr.responseText;
			fnSuc(data);
		}
	}
}
