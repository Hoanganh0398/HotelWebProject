





//timer
let counter1=-1,counter2 = 0,counter3=0,counter4=0,counter5=0;
setInterval(function(){
  if  ( document.getElementById('radio1').checked==false && document.getElementById('radio2').checked==false && document.getElementById('radio3').checked==false && document.getElementById('radio4').checked==false &&document.getElementById('radio5').checked==false ){
    console.log("Check1");
    document.getElementById('radio1').checked=true;
    counter1 = 0;
    counter2 = 0;
    counter3 = 0;
    counter4 = 0;
    counter5 = 0;
  }


  if  ( document.getElementById('radio1').checked==true){
    console.log("Bodem1");
    counter1 +=1;
    counter2 = 0;
    counter3 = 0;
    counter4 = 0;
    counter5 = 0;
  }
  if  ( counter1 ==5){
    console.log("Check2");
    document.getElementById('radio2').checked=true;
    counter1 = 0;
    
  }  
  if  ( document.getElementById('radio2').checked==true){
    console.log("Bodem2");
    counter2 +=1;
    counter1 = 0;
    counter3 = 0;
    counter4 = 0;
    counter5 = 0;
  }
  if(counter2 == 5){
    console.log("Check3");
    document.getElementById('radio3').checked=true;
    counter2 = 0;
    
  }
  if  ( document.getElementById('radio3').checked==true){
    console.log("Bodem3");
    counter3 +=1;
    counter1 = 0;
    counter2 = 0;
    counter4 = 0;
    counter5 = 0;
  }
  if(counter3 == 5){
    console.log("Check4");
    document.getElementById('radio4').checked=true;
    counter3 = 0;
  }

  if  ( document.getElementById('radio4').checked==true){
    console.log("Bodem4");
    counter4 +=1;
    counter1 = 0;
    counter2 = 0;
    counter3 = 0;
    counter5 = 0;
  }
  if(counter4 == 5){
    console.log("Check5");
    document.getElementById('radio5').checked=true;
    counter4 = 0;
  }
  if  ( document.getElementById('radio5').checked==true){
    console.log("Bodem5");
    counter5 +=1;
    counter1 = 0;
    counter2 = 0;
    counter3 = 0;
    counter4 = 0;
  }
  if(counter5 == 5){
    console.log("Check1");
    document.getElementById('radio1').checked=true;
    counter5 = 0;
  }

},2000); 

   