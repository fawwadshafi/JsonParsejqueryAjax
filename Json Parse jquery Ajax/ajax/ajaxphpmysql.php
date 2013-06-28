<!---------------------------------------------------------------------------
Example client script for JQUERY:AJAX -> PHP:MYSQL example
---------------------------------------------------------------------------->

<html>
<head>
    <script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
</head>
<body>

<!-------------------------------------------------------------------------
1) Create some html content that can be accessed by jquery
-------------------------------------------------------------------------->
<h2> Client example </h2>
<h3>Output: </h3>
<div id="output"><a href="#" onclick="get()">Get Data</a> </div>

<script id="source" language="javascript" type="text/javascript">

    function get(){


    $(function ()
    {
        //-----------------------------------------------------------------------
        // 2) Send a http request with AJAX http://api.jquery.com/jQuery.ajax/
        //-----------------------------------------------------------------------
        $.ajax({
            url: 'api.php',                  //the script to call to get data
            //type:'post,'
            data: "",                        //you can insert url argumnets here to pass to api.php
            //for example "id=5&parent=6"
            dataType: 'json',                //data format
            success: function(data)          //on recieve of reply
            {
                //var a=json.parseJSON(data)
                //alert(data);
                var id = data[0][0];              //get id
                var vname = data[0][1];           //get name
                var pass = data[0][3];           //get password
                //--------------------------------------------------------------------
                // 3) Update html content
                //--------------------------------------------------------------------
                $('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname+"<b> pass: </b>"+pass); //Set output element html
                //recommend reading up on jquery selectors they are awesome
                // http://api.jquery.com/category/selectors/
            }
        });
    });
    }

</script>
</body>
</html>