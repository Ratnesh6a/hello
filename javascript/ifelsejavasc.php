<!Doctype html>
<HTML>
<BODY>
    <p>What is codeWord</p>
    <p id="here"></p>
    <p><button id="a">show</button></p>
    <script>
    document.getElementById("a").onclick=abc;
        function abc()
    {
        var a=document.getElementById("a").innerHTML;
        
        if(a == "show" )
            {
                document.getElementById("here").innerHTML="click to show";
                document.getElementById("a").innerHTML="hide";
            }
        else
            {
               document.getElementById("here").innerHTML="click to hide";
                document.getElementById("a").innerHTML="show";
            }
    }
    </script>
    
    </BODY>
</HTML>