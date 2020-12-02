<!Doctype html>
<HTML>
<BODY>
    
    <p id="new_a" >click to show</p>
    
    <button id="new_b" >show</button>
    <script>
    document.getElementById("new_b").onclick=abc;
        function abc()
    {
        var a=document.getElementById("new_b").innerHTML;
        
        if(a == "show")
            {
                document.getElementById("new_a").style.display="block";
                document.getElementById("new_b").innerHTML="hide";
            }
        else
            {
               document.getElementById("new_a").style.display="none";
                document.getElementById("new_b").innerHTML="show";
            }
    }
    </script>
    
    </BODY>
</HTML>