<?php
       
       session_start();
       if(!isset($_SESSION['session_id']))
          header("Location:admin_login.php");
       
?>
<?php
       $id=$_GET['id'];
       include_once'connectivity.php';
                         try{
                              $database=new Connection();
                              $db=$database->openConnection();
                              $stm=$db->prepare("DELETE FROM customer_info WHERE email_id=?");
                              $stm->execute(array($id));
                              header("Location:dashboard.php");
                                                          
                            }
                         catch(PDOExecption $e)
                            {
                              echo "there is some problem in connection";
                            }
?>
