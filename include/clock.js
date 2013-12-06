// JavaScript Document

	var mywidth = 80;
	var my12_hour = 1;

	var dn = ""; var old = "";

	function show_clock() {

		if (old == "die") { return; }

		var Digital = new Date();
		var hours = Digital.getHours();
		var minutes = Digital.getMinutes();
		var seconds = Digital.getSeconds();
		var date = Digital.getDate();
		var day = Digital.getDay();
		var month = Digital.getMonth();
		var year = Digital.getFullYear();


		if (my12_hour) {
			dn = "am";
			if (hours > 12) { dn = "pm"; hours = hours - 12; }
			if (hours == 0) { hours = 12; }
		} else {
			dn = "";
		}
		if (minutes <= 9) { minutes = "0"+minutes; }
		if (seconds <= 9) { seconds = "0"+seconds; }
		
			
		switch(day){
			case 0: day="Sunday"; break;
			case 1: day="Monday"; break;
			case 2: day="Tuesday"; break;
			case 3: day="Wednesday"; break;
			case 4: day="Thursday"; break;
			case 5: day="Friday"; break;
			case 6: day="Saturday"; break;
		}
		
		switch(month){
			case 0: month="January"; break;
			case 1: month="Febuary"; break;
			case 2: month="March"; break;
			case 3: month="April"; break;
			case 4: month="May"; break;
			case 5: month="June"; break;
			case 6: month="July"; break;
			case 7: month="August"; break;
			case 8: month="Sepetember"; break;
			case 9: month="October"; break;
			case 10: month="November"; break;
			case 11: month="December"; break;
		}

		myclock = '';
		myclock += hours+':'+minutes+':'+seconds+' '+dn;
		myclock += '<br />'+day +', '+ date +' ' +month+', '+year;

		if (old == "true") {
			document.write(myclock);
			old = "die"; return;
		}

		if (document.layers) {
			clockpos = document.ClockPosNS;
			liveclock = clockpos.document.LiveClockNS;
			liveclock.document.write(myclock);
			liveclock.document.close();
		} else if (document.all) {
			document.getElementById("time").innerHTML = myclock;
		} else if (document.getElementById) {
			document.getElementById("time").innerHTML = myclock;
		}

		setTimeout("show_clock()",1000);
}
