
function abc()
{
    
    var a=document.getElementById("para_b").innerHTML;
    if(a=="Babu is Pyara"){
        document.getElementById("para_b").style.backgroundColor="white";
    document.getElementById("para_b").innerHTML="Babu";
    document.getElementById("para_b").style.color="blue";
        document.getElementById("myimg").src = "bcet1.jpg";
    }
    else
        {
            document.getElementById("para_b").style.backgroundColor="black";
            document.getElementById("para_b").innerHTML="Babu is Pyara";
    document.getElementById("para_b").style.color="white";
             document.getElementById("myimg").src = "bectimg.jpg";
            
        }
}
