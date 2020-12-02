<!Doctype html>
<HTML>
<Body>
   
    <p id="new1">Hello hero Ratnesh</p>
    
    <input type="text" id="new3" value="Enter text">
    <button id="mybutton2">change text</button>
    <button id="mybutton">Show</button>
    <p id="new2">I am good</p>
    
     
    <script type = "text/javascript">
        var b;
    
     
        document.getElementById("mybutton").onclick=abc;
           
            
            function abc()
        {
            document.getElementById('new1').innerHTML="Click to show";
           b=  document.getElementById('mybutton').innerHTML="hide";
            
        }
         
        
        
        
        
        
           
        document.getElementById("mybutton2").onclick=bcd;
         
        
        function bcd()
        {
            var a;
          a=  document.getElementById("new3").value;
            document.getElementById("new2").innerHTML=a;
            
        }
        
    </script>
    
    
    </Body>

</HTML>