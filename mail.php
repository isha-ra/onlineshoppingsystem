



<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form method="post" action="mail_try.php">
          <div class="container-fluid">
            <div class="box">
                <h3 class="header">
                    Send mail
                </h3><hr>
                <label>To:</label><br>
               
        <input type="email" size="50" required  name="mail_to" autocomplete="off" placeholder="email address" > <br/>
<br>

<label>Subject:</label>

      <input type="text" name="mail_sub" size="50" required autocomplete="off" value="Email from Localhost" >
       <br/>

<label>Message:</label>

         <input type="text" autocomplete="off" name="mail_msg" style="height:200px; width: 200px">
        <br/>


<tr>
                  

            <td colspan="2" align="center"><input type="submit" value="Send Email" ></td>
          </tr>
               </div>
                </div>
                
        </form>



</body>
</html>

