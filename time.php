<html>

<body>
<div id="MyClockDisplay"></div>
    <script type="text/javascript">
    function showTime()
    {
      var date=new Date();
      var h=date.getHours();
      var h=date.getMinutes();
      var h=date.getSeconds();

      var time= h + ":" + m + ":" + s;
      document.getElementById("MyClockDisplay").innerText = time;
      document.getElementById("MyClockDisplay").innerContex = time;
    }
    showTime();
  </script>
  </body>
  </html>