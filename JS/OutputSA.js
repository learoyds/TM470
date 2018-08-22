// JavaScript Document

function OutputSA(outPut){
	
	var output = outPut;
	
	var numBulb = parseFloat(document.Form.numberBulbs.value);
	var timBulb = parseFloat(document.Form.timeBulbs.value);
	var bulbWeek = (numBulb * 0.02) * timBulb;
	
	
	
	var wma = 0;
	var friGen = 56;
	var wmaTime = parseFloat(document.Form.timeWasher.value);
	var wmaWeek = wmaTime * 2;
	if (document.Form.washBox.checked){	friGen = friGen - wmaTime;
	                                    wma = wmaTime; 
	                                    wmaWeek = 0;  }
    var genTime1 = parseFloat(document.Form.genTime.value);
		
	var friNum = parseFloat(document.Form.numberFridge.value);
	friGen = friGen - genTime1;
	
	var friWeek = (friNum * 0.25) * friGen;

	genTime1 = genTime1 + wma;
	
	
	var tvTime = parseFloat(document.Form.timeTv.value);
	var tvWeek = tvTime * 0.2;
	
	var itWatts1 = parseFloat(document.Form.watts1.value);
	var itTime1 = parseFloat(document.Form.time1.value);
	var itWeek1 = (itWatts1 / 1000) * itTime1;
	
	var itWatts2 = parseFloat(document.Form.watts2.value);
	var itTime2 = parseFloat(document.Form.time2.value);
	var itWeek2 = (itWatts2 / 1000) * itTime2;
	
	var itWatts3 = parseFloat(document.Form.watts3.value);
	var itTime3 = parseFloat(document.Form.time3.value);
	var itWeek3 = (itWatts3 / 1000) * itTime3;
	
	var itWatts4 = parseFloat(document.Form.watts4.value);
	var itTime4 = parseFloat(document.Form.time4.value);
	var itWeek4 = (itWatts4 / 1000) * itTime4;
	
	var itWatts5 = parseFloat(document.Form.watts5.value);
	var itTime5 = parseFloat(document.Form.time5.value);
	var itWeek5 = (itWatts5 / 1000) * itTime5;
	
			
    
	var totalWeek = bulbWeek + friWeek + wmaWeek + tvWeek + itWeek1 + itWeek2 + itWeek3 + itWeek4 + itWeek5;
	totalWeek = totalWeek.toFixed(2);
	
	var dcVolts = 24;
	if (totalWeek < 3){dcVolts = 12;}
	
	var battery = (totalWeek * 1000) / dcVolts;
	battery = battery.toFixed(0);
	
	
	 
	var genAmps = (0.1 * battery);
	
	if(genAmps > 35){
		genAmps = 35;}
		 
	var genWatts = 	genTime1 * genAmps * dcVolts;
	genWatts = genWatts / 1000;
	genWatts = genWatts.toFixed(0);
	
	
	
	var panels = ((totalWeek - genWatts)* 1300) / (output / 52);
	panels = panels.toFixed(0);
	if (totalWeek == 0){
		                window.alert("With this consumption you do not need any solar panels." +
						             "Please try again...");}
	else{								 
	   if (panels > 3999){
		                   window.alert("Your usage is too large for a panel only stand alone solar power system; \n" +
						                "Please reduce your usage, and / or add generator hours, and try again \n" +
										"or contact us for either a site survey or chat \n" +
										"and we will discuss a hybrid system and ways to reduce usage.");
	   }
	   else{ if(panels<50){
                            
		                    window.alert("Your total weekly wattage is estimated at " + totalWeek + " KWh.\n" +
	                                     "and you need a " + battery + " Ah battery bank. \n" +
										 "At this level of usage / generator use you don't need any solar panels to run \n" +
							             "your equipment: \n" +
										 "Please reduce the generator usage to balance your system."); }
										 
	           else{         window.alert("Your total weekly wattage is estimated at " + totalWeek + " KWh.\n" +
	                                      "You will need " + panels + " watts of solar panels, \n" + 
	                                      "and you need a " + battery + " Ah battery bank." );
}}}}