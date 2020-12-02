<!Doctype html>
<HTML>
<BODY>
    
    <p id="new_a" >click to show</p>
    
    <button id="btn_text" onclick="abc()">show</button>
    <script>
        function abc()
    {
        var a=document.getElementById("btn_text").innerHTML;
        
        if(a === "show")
            {
				
                document.getElementById("new_a").style.display="block";
                document.getElementById("btn_text").innerHTML="hide";
            }
        else
            {
               document.getElementById("new_a").style.display="none";
                document.getElementById("btn_text").innerHTML="show";
            }
    }
    </script>
    
    </BODY>
</HTML>