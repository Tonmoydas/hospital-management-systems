 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pdo connection
    </title>
  </head>
  <body>
    <?php
    try{
    $dsn='mysql:host=localhost;dbname=tonmoy;charset=utf8;port=3306';
    $username='root';
    $password='';
    $error=[PDO::ERRMODE_EXCEPTION];
    $conn=new PDO($dsn,$username,$password,$error);
    $sqlquery='SELECT * FROM emp ';
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $result=$conn->query($sqlquery);
    while($data=$result->fetch(PDO::FETCH_ASSOC)){
    echo "EMPNO:".$data['EMPNO']."<br/>";
    echo "ENAME:".$data['ENAME']."<br/>";
    echo "JOB:".$data['JOB']."<br/>";
    echo "MGR:".$data['MGR']."<br/>";
    echo "<br/>";
    }
  }
  catch(PDOException $e){
    echo "error in database connection:".$e->getmessage();
  }
  ?>
  </body>
</html>
