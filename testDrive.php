<?php
require_once('./app/DB.php');
DB::setPlayerParam('kirill', 'health', 15);
DB::setMobsParam('Ork', 'health', 15);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Insert title here</title>



</head>
<body>
            <form action="index.php" method="POST">
                <input type="submit" value="restart">
            </form>
</body>
</html>




