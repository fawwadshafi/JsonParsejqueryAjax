<html>
<head>
    <script type="text/javascript">

        function ajaxFunction(){
            var ajaxRequest;  // The variable that makes Ajax possible!

            try{
                // Opera 8.0+, Firefox, Safari
                ajaxRequest = new XMLHttpRequest();
            } catch (e){
                // Internet Explorer Browsers
                try{
                    ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                    try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                    }
                }
            }

            ajaxRequest.onreadystatechange=function(){
                if(ajaxRequest.readyState==4){
                    document.myForm.time.value = ajaxRequest.responseText;
                }
            }
            ajaxRequest.open('GET','serverTime.php','True');
            ajaxRequest.send(null);
        }

    </script>
</head>
<body>
<form name='myForm'>
    Name: <input type='text' onChange="ajaxFunction();" name='username' /> <br />
    Time: <input type='text' name='time' />
</form>
</body>
</html>