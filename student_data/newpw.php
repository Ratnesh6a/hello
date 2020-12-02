<!Doctype html>
<HTML>
<BODY>
    <p>What is codeWord</p>
    <p id="new_a" >Click to change</p>

    <p><button id="new_b">Enter</button></p>
    <script>
    document.getElementById("checkcodeword").onclick=abc;
        function abc()
    {
        var a=document.getElementById("new_b").innerHTML;
        if( a == "show" )
            {
                document.getElementById("here").innerHTML="click to show";
                document.getElementById("checkcodeword").innerHTML="hide";
            }
        else
            {
               document.getElementById("here").innerHTML="click to hide";
                document.getElementById("checkcodeword").innerHTML="show";
            }
    }
    </script>
    
    </BODY>
</HTML>