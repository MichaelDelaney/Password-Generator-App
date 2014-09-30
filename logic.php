<?php

#Execute only is User types in a value	
if (isset($_POST['WordAmount']))    
{      
	#Declaring my word list array
	$WordAmount=$_POST["WordAmount"];
	$word_list = array("team", "biological", "cloud", "developer", "riot", "calendar", "maze", 
					   "vitamin", "food", "stock", "mobile", "yellow", "book", "lizard", "designed",
					   "forecast", "projected", "audit", "enriched", "park", "telephone", "moving", 
					   "milk", "juice", "more", "hot", "baby", "shoe", "thanks", "clothes", "coat");
					
	#Yes, the User wants a symbol
	if(isset($_POST['AddASymbol']) && 
		$_POST['AddASymbol'] == 'Yes') 
	{
				#Yes, the User wants a Number
				if(isset($_POST['AddANumber']) && 
					$_POST['AddANumber'] == 'Yes') 
				{		
						$symbols = "!@#$%&?";
						$selectedSymbol = $symbols[rand(0, strlen($symbols)-1)];
						for ($i = 0; $i < $WordAmount; $i++) {
						echo $word_list[rand(1, 30)].'-';
						} echo $selectedSymbol.rand(1,50);
				}
				#No, the User does not want a Number
				else
				{
						$symbols = "!@#$%&?";
						$selectedSymbol = $symbols[rand(0, strlen($symbols)-1)];
						for ($i = 0; $i < $WordAmount; $i++) {
						echo $word_list[rand(1, 30)].'-';
						} echo $selectedSymbol;
				}  		
	}
	#No, the User does not want a symbol
	else
	{			
				#Yes, the User wants a Number
				if(isset($_POST['AddANumber']) && 
					$_POST['AddANumber'] == 'Yes') 
				{		
						for ($i = 0; $i < $WordAmount; $i++) {
						echo $word_list[rand(1, 30)].'-';
						} echo rand(1,50);
				}
				#No, the User does not want a Number
				else
				{
						for ($i = 0; $i < ($WordAmount-1); $i++) {
						echo $word_list[rand(1, 30)].'-';
						} if($WordAmount>=1){echo $word_list[rand(1, 30)];}
				}    
	}    
}  