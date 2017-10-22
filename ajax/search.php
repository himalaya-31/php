<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <script type="text/javascript">
      function findmatch(){
        if (window.XMLHttpRequest) {
          xmlhttp = new XMLHttpRequest();
        }
        else {
          xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }

        xmlhttp.onreadystatechange = function(){
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('results').innerHTML = xmlhttp.responseText;
          }
        }
        xmlhttp.open('GET', 'search.inc.php?search_text=' + document.search.search_text.value, true);
        xmlhttp.send();
      }
    </script>
  </head>
  <body>
    <form class="" id="search" name="search">
      Type a Name:<br>
      <input type="text" name="search_text" onkeyup="findmatch();" value="">
    </form>

    <div class="" id="results">

    </div>
  </body>
</html>
