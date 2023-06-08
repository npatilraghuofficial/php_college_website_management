function validation() 
{
    var fname = document.getElementById('fn').value;
    
    var mn = document.getElementById('ema').value;

    var correct_way=/^[A-Za-z]+$/;


//studentname
        if (fname == "") 
             {
             document.getElementById('fname').innerHTML = "<br>**please fill name";
             return false;
             }  
                  
            if(!isNaN(fname))
            {
                document.getElementById('fname').innerHTML ="<br>**please enter only alphabets";
                return false;
            }

           if(fname.match(correct_way))
           true;
           else
           {
            document.getElementById('fname').innerHTML ="<br>**please enter only string value";
            return false;
           }

                          
         if((fname.length <= 2) || (fname.length > 30))
            {
                document.getElementById('sname').innerHTML="<br>**name length must be between 2-30";
                return false;
            }
        }