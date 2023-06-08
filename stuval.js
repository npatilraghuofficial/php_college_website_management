function validation2() 
{
    var stname = document.getElementById('studentname').value;
    var studentid = document.getElementById('sid').value;
    var faname = document.getElementById('faname').value;
    var mname = document.getElementById('mname').value;

    var foccupation = document.getElementById('fo').value;
    var moincome = document.getElementById('moi').value;
    var scaste = document.getElementById('stcaste').value;
    var padd = document.getElementById('padd').value;
    var pincod = document.getElementById('pinc').value;\
    

    var emaili = document.getElementById('emailid').value;
    var mobilenum = document.getElementById('mnum').value;

    var correct_way=/^[A-Za-z]+$/;


//studentname
        if (stname == "") 
             {
             document.getElementById('sname').innerHTML = "<br>**please fill name";
             return false;
             }  
                  
            if(!isNaN(stname))
            {
                document.getElementById('sname').innerHTML ="<br>**please enter only alphabets";
                return false;
            }

           if(stname.match(correct_way))
           true;
           else
           {
            document.getElementById('sname').innerHTML ="<br>**please enter only string value";
            return false;
           }

                          
         if((stname.length <= 2) || (stname.length > 30))
            {
                document.getElementById('sname').innerHTML="<br>**name length must be between 2-30";
                return false;
            }
             
 //student id
        if (studentid == "") 
          {
        document.getElementById('stid').innerHTML = "<br>**please fill correct student id";
        return false;
         }

       if((studentid.length <= 5) || (studentid.length > 10))
         {
           document.getElementById('stid').innerHTML="<br>**name length must be between 5-10";
           return false;
         }
 //father name            
     
       if (faname == "") 
        {
        document.getElementById('fathername').innerHTML = "<br>**please enter father name";
        return false;
         }

         if(!isNaN(faname))
         {
             document.getElementById('fathername').innerHTML ="<br>**please enter only alphabets";
             return false;
         }
         if(faname.match(correct_way))
           true;
           else
           {
            document.getElementById('fathername').innerHTML ="<br>**please enter only string value";
            return false;
           }

       if((faname.length <= 2) || (faname.length > 30))
         {
           document.getElementById('fathername').innerHTML="<br>**name length must be between 2-30";
           return false;
         }
       
//MOTHer name    


       if (mname == "") 
          {
        document.getElementById('mothername').innerHTML = "<br>**please enter mother name";
        return false;
         }
         if(!isNaN(mname))
         {
             document.getElementById('mothername').innerHTML ="<br>**please enter only alphabets";
             return false;
         }
         if(mname.match(correct_way))
         true;
         else
         {
          document.getElementById('mothername').innerHTML ="<br>**please enter only string value";
          return false;
         }

         
       if((mname.length <= 2) || (mname.length > 30))
         {
           document.getElementById('mothername').innerHTML="<br>**name length must be between 2-30";
           return false;
         }
            
//FATHER OCCUPATION   

        if (foccupation == "") 
        {
        document.getElementById('father-occupation').innerHTML = "<br>**please enter correct father ocuupation details";
        return false;
         }
         if(!isNaN(foccupation))
         {
             document.getElementById('father-occupation').innerHTML ="<br>**please enter only alphabets";
             return false;
         }
         if(foccupation.match(correct_way))
         true;
         else
         {
          document.getElementById('father-occupation').innerHTML ="<br>**please enter only string value";
          return false;
         }

       if((foccupation.length <= 5) || (foccupation.length > 30))
         {
           document.getElementById('father-occupation').innerHTML="<br>**name length must be between 5-30";
           return false;
         }
            
//MONTHLY INCOME
       if (moincome == "") 
       {
       document.getElementById('monthly-income').innerHTML = "<br>**please enter correct monthly- income details";
       return false;
        }
        
     if(isNaN(moincome))
     {
         document.getElementById('monthly-income').innerHTML ="<br>**please enter numbers only not alpha characters";
         return false;
     }

      if((moincome.length <= 4) || (moincome.length > 10))
       {
          document.getElementById('monthly-income').innerHTML="<br>**name length must be between 4-10";
          return false;
       }
//CASTE
      if (scaste == "") 
       {
      document.getElementById('student-caste').innerHTML = "<br>**please enter caste details";
      return false;
       }
       if(!isNaN(scaste))
       {
           document.getElementById('student-caste').innerHTML ="<br>**please enter only alphabets";
           return false;
       }
       if(scaste.match(correct_way))
       true;
       else
       {
        document.getElementById('student-caste').innerHTML ="<br>**please enter only string value";
        return false;
       }

     if((scaste.length <= 5) || (scaste.length > 15))
       {
         document.getElementById('student-caste').innerHTML="<br>**name length must be between 5-15";
         return false;
       }
//ADDRESS
     if (padd == "") 
       {
      document.getElementById('parmanent-address').innerHTML = "<br>**please enter permanent details";
      return false;
       }
     if((padd.length <= 6) || (padd.length > 40))
      {
         document.getElementById('parmanent-address').innerHTML="<br>**name length must be between 6-40";
         return false;
       }

//PINCODE
     if (pincod == "") 
     {
     document.getElementById('pincode').innerHTML = "<br>**please enter pincode number";
     return false;
     }

     if(isNaN(pincod))
     {
         document.getElementById('pincode').innerHTML ="<br>**please enter numbers only not alpha characters";
         return false;
     }
    if(pincod.length <6)
    {
        document.getElementById('pincode').innerHTML="<br>**name length must be 6";
        return false;
    }
//email
    if (emaili == "") 
    {
    document.getElementById('emaili').innerHTML = "<br>**please enter email id followed by @";
    return false;
    }
    
    if(emaili.indexOf('@') <= 0)
    {
        document.getElementById('emaili').innerHTML = "<br>**please enter valid email id followed by @";
    return false;
    }


 //mobile num
   if (mobilenum == "") 
    {
   document.getElementById('mobnum').innerHTML = "<br>**please enter mobile number";
   return false;
   }
   
   if(isNaN(mobilenum))
   {
       document.getElementById('mobnum').innerHTML ="<br>**please enter numbers only not alpha characters";
       return false;
   }
   if(mobilenum.length <= 10) 
   {
       document.getElementById('mobnum').innerHTML="<br>**name length must be 10 digits number";
       return false;
   }

       

    
}
