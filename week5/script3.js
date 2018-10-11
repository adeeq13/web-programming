	function skrrrra(){
		const key = 1;
		var s = document.querySelector('#name').value;
		if (s == "") {
			document.querySelector('#name').classList.add("error");
			key = 0;
		}
		else{
			document.querySelector('#name').classList.remove("error");
		}
		var ss = document.querySelector("#surname").value;
		if (ss == "") {
			document.querySelector('#surname').classList.add("error");
			key = 0;
		}
		else{
			document.querySelector('#surname').classList.remove("error");
		}
		var sss = document.querySelector("#faculty").value;
		if (sss == '-1') {
			document.querySelector('#faculty').classList.add("error");
			key = 0;
		}
		else{
			document.querySelector('#faculty').classList.remove("error");
		}
		if (key) {
			tableadd();
		}
		// body...
	}


	function tableadd(){
    	var x = document.querySelector("#name").value;
    	var y = document.querySelector("#surname").value;
   		var z = document.querySelector("#faculty").value;

    	var table = document.querySelector("#students");

   		var row = table.insertRow(-1);

    	var n1 = row.insertCell(0);
    	var s2 = row.insertCell(1);
    	var f3 = row.insertCell(2);

    	n1.innerHTML = x;
    	s2.innerHTML = y;
    	f3.innerHTML = z;
    	document.querySelector("#name").value = " ";
    	document.querySelector("#surname").value = " ";
    	document.querySelector("#faculty").value = " ";
}
	document.querySelector("#addStudent").addEventListener('click',skrrrra);