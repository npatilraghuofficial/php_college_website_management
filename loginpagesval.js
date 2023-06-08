function val() 
{
    var username = document.getElementById('uname').value;
    var pass= document.getElementById('pwd').value;
    var number = document.getElementById('faname').value;
    
    var correct_way=/^[A-Za-z]+$/;


//studentname
        if (username == "") 
             {
             document.getElementById('sname').innerHTML = "<br>**please fill name";
             return false;
             }  
                  
          
           if(username.match(correct_way))
           true;
           else
           {
            document.getElementById('username').innerHTML ="<br>**please enter only string and digit without special characters";
            return false;
           }

                          
         if((username.length <= 3) || (username.length >15))
            {
                document.getElementById('sname').innerHTML="<br>**name length must be between 4-15";
                return false;
            }
             
        }