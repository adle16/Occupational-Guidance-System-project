<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    <style>
        /* Add your CSS styles here */
        a{
            display:none;
        }
    </style>
</head>
<?php include 'headers.php'?>
<body>
    <h1>Quiz Result</h1>
   <center> <h2>You are best fitted for...</h2></center><br>
   
    <div id="result"></div><br>
   <center> <h2><a id="science" href="./science.php">SCIENCE</a></h2></center>
    <center><h2><a id="commerce" href="./commerce.php">COMMERCE</a></h2></center>
   <center> <h2><a id="arts" href="./arts.php">ARTS</a></h2></center>
   <center> <h2>Click Above to know more about the field !! </h2></center>
    <script>

        // Get the result from the query parameter
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const result = urlParams.get('result');
        const links = {
    Science: "science.php",
    Commerce: "commerce.php",
    Arts:"arts.php"
};


        // Display the result on the page
        const resultElement = document.getElementById('result');
        // if("${result}"==="Science"){
        //     // window.location.href="science.php";
        //     // alert("hi");
            
        // }
        // else if("${result}"=="Commerce"){
        //     // window.location.href="commerce.php";
        //     document.getElementById("commerce").style.display = "block";
        // }
        // else if("${result}"=="Arts"){
        //     // window.location.href="arts.php";
        //     document.getElementById("arts").style.display = "block";
        // }
       // resultElement.textContent = `Based on your answers, you are best suited for the ${result} field. click here <a href="${links[result]}">Science Field</a>`;
        
        if(result =="Science"){
           document.getElementById("science").style.display = "block";
        }else if(result =="Commerce"){
            document.getElementById("commerce").style.display = "block";
        }else if(result =="Arts"){
            document.getElementById("arts").style.display = "block";
        }


    </script>
</body>
</html>
    