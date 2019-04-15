<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>

<script type="text/javascript">
	function f1()
	{
		t=[1,2,3,3,3,3,4,4];
		while(console.log(t.indexOf(1)));
	}
	
	function countOccurences(tab){
		var result = {};
		tab.forEach(function(elem){
			if(elem in result){
				result[elem] = ++result[elem];
			}
			else{
				result[elem] = 1;
			}
		});
	console.log(result);
}

	
</script>

</head>

<body>
<input type="button" value="F1" onclick="countOccurences([1,2,3,3,3,3,4,4])" />
</body>
</html>