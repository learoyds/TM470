// JavaScript Document


function Output(outPut){
    var output = outPut;
	
	window.alert("Your annual output is estimated as " + output + "KW per KWp.");
	var fit = 0.433;
    var input = window.prompt("Please enter your system size in KW. \n Currently showing a 4KW system... \n [To move on click 'OK']","4");
	    while (input > 4 || input < 1)
		    {window.alert("Please enter a valid system size up to 4KW");
			 input = window.prompt("Please enter your system size in KW. \n Currently showing a 4KW system... \n [To move on click 'OK']","4");}
 
		var totalHours = (input * output);
		totalHours = totalHours.toFixed(0);
		/*{window.alert("You will create " + totalHours + "KWh " + "per annum.");*/
		var cash = totalHours * fit;
		cash = (cash.toFixed(2));
		cash1 = parseFloat(cash);
		/* window.alert("This will pay you £" + cash + " cash per annum.");*/
		 var usage = parseFloat(window.prompt("How much will you use as a percentage? \n Currently showing 50% \n [To move on click 'OK']","50"));
		 while (usage < 0 || usage > 100)
		     {window.alert("Please enter a valid percentage between 0 and 100.");
			  usage = parseFloat(window.prompt("How much will you use; as a percentage? \n Currently showing 50% \n [To move on click 'OK']","50"));
			 }
		 var savings = parseFloat((totalHours * 0.13) / 100 * usage);
		 savings = (savings.toFixed(2));
		 savings1 = parseFloat(savings);
		 /*window.alert("You will save £" + savings + " per annum.");*/
		 var threes = parseFloat(totalHours * 0.03) / 100 *(100 - usage);
		 threes = threes.toFixed(2);
		 threes1 = parseFloat(threes);
		 /*window.alert("All extra 3p's will pay you £" + threes + " per annum.");*/
		 var totalSavings = parseFloat(cash1 + savings1 + threes1);
		 totalSavings = totalSavings.toFixed(2);
		 /*window.alert("Giving you a total annual saving of £" + totalSavings);*/
		 var cost = parseFloat(input * 2300);
	     var price = parseFloat(cost + 4000); 
		 systemCost = parseFloat(window.prompt("Please enter the cost of your system in pounds. \n The price shown is an average... \n [To move on click 'OK']",price));
		 while (systemCost < 1 || systemCost > 25000)
		     { window.alert("Please enter a valid cost.");
			  systemCost = parseFloat(window.prompt("Please enter the cost of your system in pounds. \n The price shown is an average... \n [To move on click 'OK']",price));
			 }
		 paybackTime = systemCost / totalSavings;
		 paybackTime = paybackTime.toFixed(0);
		 /*window.alert("Your system will have paid for itself in " + paybackTime + " years.");*/
		 var percReturn = (totalSavings / (systemCost / 100));
		 percReturn = percReturn.toFixed(1);
		 var quarterly = parseFloat((cash1 + threes1)/4);
		 quarterly = quarterly.toFixed(2);
		 var yearly = (cash1 + threes1);
		 yearly = yearly.toFixed(2);
		 kwh = (output * input);
		 kwh = kwh.toFixed(0);
		 document.write("<link rel=\"stylesheet\" type=\"text/css\" href=\"css/output.css\"><div>" + "<center>" + "<h1>" + "A " + input + "KW system, in your area, will generate approximately:" + "</h1>" + "<br>" 
		                 + "<h2>" + "£" + cash + " in 'Feed in Tariff' "  
						 + "plus " + "£" + threes + " in 'sell-back', in the first year (£" + yearly + ")." + "<br>" +"<br>"
						 + "Meaning you will receive a quarterly payment of £" + quarterly + "," + "<br>"
						 + "AND save £" + savings + " off your yearly electricity bill." + "<br>" + "<br>"
						 + "This makes a total saving of £" + totalSavings + ", index linked, per annum!" + "<br>"
						 + "Your system will have paid for itself in " + paybackTime + " years." + "<br>" + "<br>"
						 + "This adds up to an annual return of " + percReturn + "%." + "</h2>" + "</center>" + "<br>"
						 + "<center>" + "<h3>" + "Assuming an output from your panels of " + kwh + "KWh per year." + "<br>"
						 + "<em>" + "(All regional outputs on this site are calculated from professional climate data.)" + "</em>"
						 + "<br>" + "<a href='index.html'>Back to Home page</a>" + "</h3>" + "</center>" + "</div>");
			 		 
		}
		       
	



