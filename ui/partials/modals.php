<div class="modal fade login-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
        <div class="login-button-container">
            <a href="../#" data-section="login"><i class="fa fa-user"></i></a>
            <a href="../#" data-section="sign-in"><i class="fa fa-pencil-square-o"></i></a>
            <a href="../#" data-section="recovery"><i class="fa fa-lock"></i></a>
            <a href="../#" data-section="setting"><i class="fa fa-cog"></i></a>
        </div>
        <!-- ./login-button-container -->
        <div class="form-container">
            <form method="post" action="#">
                <div id="login" class="box">
                    <h2 class="title">Login in to your account</h2>
                    <h3 class="sub-title">It is a breach of our terms and conditions to provide username and password details to unauthorised third parties. Unauthorised use may lead to suspension or termination.</h3>
                    <div class="field">
                        <input id="user-log" name="user-log" class="form-control" type="text" placeholder="Username or email">
                        <i class="fa fa-user user"></i>
                    </div>
                    <div class="field">
                        <input id="password-log" name="password-log" class="form-control" type="password" placeholder="Password">
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                    <div class="field footer-form text-right">
                        <span class="remember"><input class="labelauty" type="checkbox" data-labelauty="Keep me signed in" checked /></span>
                        <button type="button" class="btn btn-reverse button-form">Reset</button>
                        <button type="button" class="btn btn-default button-form">Login</button>
                    </div>
                </div>
                <!-- ./login -->
                <div id="sign-in" class="box">
                    <h2 class="title">Sign In</h2>
                    <h3 class="sub-title">Create a Free account and discover how you can centralize all communication around a transaction, connect with clients, market your listings, and more. </h3>
                    <div class="form-inline">
                        <div class="form-group">
                            <input id="user-sign" name="user-sign" class="form-control input-inline margin-right" type="text" placeholder="Username">
                            <i class="fa fa-user user"></i>
                        </div>
                        <div class="form-group">
                            <input id="email-sign" class="form-control input-inline" type="text" name="email-sign" placeholder="Email">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                    </div>
                    <div class="field">
                        <input id="password-sign" class="form-control" type="password" name="password-sign" placeholder="Password">
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                    <div class="field">
                        <input id="re-password-sign" class="form-control" type="password" name="re-password-sign" placeholder="Repeat password">
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                    <div class="field footer-form text-right">
                        <span class="remember"><input class="labelauty" type="checkbox" data-labelauty="I have read the privacy policy." checked /></span>
                        <button type="button" class="btn btn-default button-form">Sign in</button>
                    </div>
                </div>
                <!-- ./sign-in -->
                <div id="setting" class="box">
                    <h2 class="title">Setting profile</h2>
                    <h3 class="sub-title">Please note: You won't be able to change your name within the next 60 days. Make sure that you don't add any unusual capitalisation, punctuation, characters or random words. <a href="../#">Learn more</a>.</h3>
                    <div class="field">
                        <input id="username-block" class="form-control" type="text" name="username-block" value="John Doe" disabled>
                        <i class="fa fa-user user"></i>
                    </div>
                    <div class="field">
                        <input id="email-setting" class="form-control" type="text" name="email-setting" value="administrator@prohome.com">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="field">
                        <input id="update-pass" class="form-control" type="password" name="update-pass" placeholder="New password">
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                    <div class="field">
                        <input id="update-repass" class="form-control" type="password" name="update-repass" placeholder="Repeat password">
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                    <div class="field footer-form text-right">
                        <button type="button" class="btn btn-reverse button-form">Cancel</button>
                        <button type="button" class="btn btn-default button-form">Update</button>
                    </div>
                </div>
                <!-- ./recovery -->
                <div id="recovery" class="box">
                    <h2 class="title">Need a new password?</h2>
                    <h3 class="sub-title">Enter your email address, and we’ll email you instructions to reset your password.</h3>
                    <div class="field">
                        <input id="recovery-email" class="form-control" type="text" name="recovery-email" placeholder="Your email">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="field footer-form text-right">
                        <button type="button" class="btn btn-default button-form">Recovery</button>
                    </div>
                </div>
                <!-- ./recovery -->
            </form>
            <!-- ./form-container -->
        </div>
        <!-- ./login-button-container -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->