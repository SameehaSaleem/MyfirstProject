<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
       
    </head>
    <body>
          
    <p> <br/> </p> 
    <div class="container"  >   
        <div class="row">

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="page-header" style="margin-top: 10px;">
                            <h3>Login Form</h3>
                        </div>

                        <form class="form-horizontal" method="POST" action="checkUser.php">
                            <form action="index.php" action="post" onsubmit="return MyValidation()">
                            <div class="form-group">
                                <label for="userName" class="col-sm-2 control-label">UserName</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm chat-input" id="userName" placeholder="UserName" name="userName">
                                   
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control input-sm chat-input" id="inputPassword" placeholder="Password" name="inputPassword">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" id="submit"class="btn btn-primary btn-md"><span class="glyphicon-log-in"></span>LogIn</button>
                               
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
        
        
    
    
    
   
    </body>
</html>
