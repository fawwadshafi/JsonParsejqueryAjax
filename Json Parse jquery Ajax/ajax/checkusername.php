<html>
<head>
<script src="jquery-1.8.0.min.js" ></script>
<script>
    $(document).ready(function() {

        $('#result1').hide();
        //the min chars for username
        var min_chars = 3;

        //result texts
        var characters_error = 'Minimum amount of chars is 3';
        var checking_html = 'Checking...';

        //when button is clicked
        $('#check').click(function(){
            if($('#username').val().length==0){
                $('#result1').show();
                setTimeout(function(){
                    $('#result1').hide();
                    $('#result').html("Empty");
                },3000);
            }
            else if($('#username').val().length<min_chars){
                $('#result1').show();
                setTimeout(function(){
                    $('#result1').hide();
                    $('#result').html(characters_error)},3000);
                }


            else{
                //$('#result').html(checking_html);
                $('#result1').show();
                //$('#result').html("ok")
                setTimeout(function(){
                    $('#result1').hide();
                    check_availability()
                },3000);
            }
        });

    });

    function check_availability(){
        var username=$('#username').val();
        $.post("user_name.php",{username: username},function(result){
            if(result==1){
                $('#result').fadeIn('slow').html(username + " is available");
            }
            else{
                $('#result').html(username + " is not available");
            }

        });
    }


</script>
</head>
<body>

<input type='text' id='username'> <input type='button' id='check' value='Check Availability'>
<div id='result'></div>
<br/>
<div id='result1'><img src="loader.gif" alt=""></div>

</body>
</html>