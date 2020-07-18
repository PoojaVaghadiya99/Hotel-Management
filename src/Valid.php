function validate()
{ 
  	 if( document.Registration.name1.value == "" )
  	 {
  		   alert( "Please provide your First Name !" );
   		  document.Registration.name1.focus() ;
  	  	 return false;
  	 }
     
     
     if( document.Registration.name2.value == "" )
  	 {
  		   alert( "Please provide your Last Name !" );
   		  document.Registration. name2.focus() ;
  	  	 return false;
  	 }
     
     if ( (Registration.Gender[0].checked == false ) && (Registration.Gender[1].checked == false ) && (Registration.Gender[2].checked == false) )
  	 {
  		 alert ( "Please choose your Gender " );
  		 return false;
   	}
    
    if( document.Registration.bdate.value == "" )
  	 {
  		   alert( "Please provide your Birth Date !" );
   		  document.Registration. bdate.focus() ;
  	  	 return false;
  	 }
      if( document.Registration.add.value == "" )
  	 {
  		   alert( "Please provide your Street Name!" );
   		  document.Registration. add.focus() ;
  	  	 return false;
  	 }
	 
	 if( document.Registration.pincode.value == "" ||
           	isNaN( document.Registration.pincode.value) ||
           	document.Registration.pincode.value.length != 6 )
  	 {
     		alert( "Please provide a Pincode in 6 Digit." );
    		document.Registration.pincode.focus() ;
    		return false;
   	}
     
      if( document.Registration.city.value == "" )
  	 {
  		   alert( "Please provide your city !" );
   		  document.Registration. city.focus() ;
  	  	 return false;
  	 }
      
      
      if( document.Registration.state.value == "" )
  	 {
  		   alert( "Please provide your State !" );
   		  document.Registration. state.focus() ;
  	  	 return false;
  	 }
      if( document.Registration.country.value == "" )
  	 {
  		   alert( "Please provide your Country !" );
   		  document.Registration. country.focus() ;
  	  	 return false;
  	 }
     
   
	 var email = document.Registration.mail_id.value;
 	 atpos = email.indexOf("@");
 	 dotpos = email.lastIndexOf(".");
 	if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 	{
 		   alert("Please enter correct email ID")
		   document.Registration.mail_id.focus() ;
  		   return false;
	}

	if( document.Registration.mo_no.value == "" ||
           	isNaN( document.Registration.mo_no.value) ||
           	document.Registration.mo_no.value.length != 10 )
  	 {
     		alert( "Please provide a Mobile No in 10 Digit." );
    		document.Registration.mo_no.focus() ;
    		return false;
   	}
   
    
     if( document.Registration.check_in.value == "" )
  	 {
  		   alert( "Please provide Check In Date !" );
   		  document.Registration.check_in.focus() ;
  	  	 return false;
  	 }

 	 
     if( document.Registration.check_out.value == "" )
  	 {
  		   alert( "Please provide Check Out Date !" );
   		  document.Registration.check_out.focus() ;
  	  	 return false;
  	 }
	 
	  if( document.Registration.noroom.value == "" || isNaN( document.Registration.noroom.value) )
  	 {
  		   alert( "Please Give Information About How Many Rooms Are Book !" );
   		  document.Registration.noroom.focus() ;
  	  	 return false;
  	 }
	 
	  if( document.Registration.noperson.value == "" || isNaN( document.Registration.noperson.value))
  	 {
  		   alert( "Please Give Information About How Many Person !" );
   		  document.Registration.noperson.focus() ;
  	  	 return false;
  	 }  

  	 return( true );
}

function myFunction() {
  var table = document.getElementById("myTable");
  var row = table.insertRow(0);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  var cell8 = row.insertCell(7);
  var cell9 = row.insertCell(8);
  var cell10 = row.insertCell(9);
  var cell11 = row.insertCell(10);
  var cell12 = row.insertCell(11);
  var cell13 = row.insertCell(12);
  var cell14 = row.insertCell(13);
  var cell15 = row.insertCell(14);
  var cell16 = row.insertCell(15);
}

