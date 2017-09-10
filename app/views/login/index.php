<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form id="login" action="<?php echo URL ?>Login/isUser" method="post" class="well" style="padding-left:40%;padding-top:10%"> 
                    <div class="form-group">
                        <label>User Name</label>
                        <input style="width:70%" type="text" name="username" class="form-control" placeholder="Enter User Name">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input style="width:70%" type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button style="width:50%" type="submit" class="contact-button">Login</button>
                </form>
            </div>

            <div class="col-lg-6" style="border-left: 2px solid #343a40;"">
                <form id="login" action="<?php echo URL ?>Login/isUser" method="post" class="well" style="padding-left:10%">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="form-group">
                            <label>Email*</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label>Password*</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label style="font-size:0.95em">Re-Enter Password*</label>
                            <input type="password" name="repassword" class="form-control" placeholder="Re-Password">
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                    <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter User Name">
                        </div>
                     <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form-control" placeholder="Enter First Name">
                        </div>
                     <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name">
                        </div>
                    </div>
                </div>
                    <button style="width:50%" type="submit" class="contact-button">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>