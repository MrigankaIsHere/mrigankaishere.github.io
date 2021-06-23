      var j=0;
      function render()
      {
        var x= document.getElementById("myimg")
        if(j<=100){
          // alert(i.toString()+"%")
          x.style.opacity= j.toString()+"%";
          j=j+1
          window.setTimeout(render, 45);
        }

      }
      function colourizer(){
          if (screen.width<700){
              document.getElementById("variable").style.backgroundColor= "white";
              document.getElementById("variable").style.paddingBottom= "10px";
              document.getElementById("variable").style.marginLeft= "5px";
              document.getElementById("variable").style.marginRight= "5px";
              document.getElementById("a").style.backgroundColor= "rgba(0,0,0,0.8)";
          }
          typeWriter();
      }
      var i = 0;
      var txt = 'Hi there. My name is Mriganka Shekhar Chakravarty. Quite a mouthfull! Since you have arrived at my page, I assume you took at the least, the minimal interest in me. Here is a brief intro to my non-academic history: <br><br> I was born on the 10th of October in the year 1996.<br>My home is situated in Kolkata. These days, I am virually living all over the world. I am good at playing Cricket and Table Tennis. If you ever meet me somewhere near a table tennis board, trust me, we will have an awesome time.<br>I am a big admirer of stand up Comedy. Russel Peters and Louis CK are my kind of comedians. Daniel Fernandes and Zakir Khan are my favorite indigenous comedians.'; /* The text */
      var speed = 5; /* The speed/duration of the effect in milliseconds */
      function typeWriter() {
        if (screen.width> 700 && i < txt.length) {
          if(txt[i]=='/' && txt[i+1]=='n'){
            document.getElementById("printer").innerHTML += "<br>";  
            i=i+2;
          }
          else{
            document.getElementById("printer").innerHTML += txt.charAt(i);
            i=i+1;  
          }
          setTimeout(typeWriter, speed);
        }
        else if(screen.width<=700) {
	  txt= 'Hi there. My name is Mriganka Shekhar Chakravarty. Quite a mouthfull! Since you have arrived at my page, I assume you took at the least, the minimal interest in me. Here is a brief intro to my non-academic history: <br><br> I was born on the 10th of October in the year 1996.<br>My home is situated in Kolkata. These days, I am virually living all over the world. I am good at playing Cricket and Table Tennis. If you ever meet me somewhere near a table tennis board, trust me, we will have an awesome time.<br>I am a big admirer of stand up Comedy. Russel Peters and Louis CK are my kind of comedians. Daniel Fernandes and Zakir Khan are my favorite indigenous comedians.'; /* The text */

          document.getElementById("printer").innerHTML += txt;
        }
        
      }