
<!-- subheader -->
        <section id="subheader" class="s2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-middle">
                        <h1>Register</h1>
                    </div>

                    <div class="col-md-6 text-middle">
                        <ul class="crumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="sep"></li>
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h3>Don't have an account? Register now.</h3>
                            <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> -->
                            <form action="<?php echo site_url('home/save_registration')?>" method="post" class="form" >
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="firstname" placeholder="First Name" type="text"
                        required autofocus />
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="email" placeholder="Email" type="text"
                        required autofocus />
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="contact" placeholder="Contact" type="text" required />
                    </div>
                </div>

                <label for=""> Birth Date</label>
                <div class="row">
                    <div class="col-xs-4 col-md-1">
                        <input class="form-control" name="day" placeholder="DD" type="text"
                        required autofocus />

                    </div>
                    <div class="col-xs-4 col-md-1">

                        <input class="form-control" name="month" placeholder="MM" type="text"
                        required autofocus />
                    </div>
                    <div class="col-xs-4 col-md-2">

                        <input class="form-control" name="year" placeholder="YYYY" type="text"
                        required autofocus />

                    </div>
                </div>
                <label class="radio-inline">
                    <input type="radio" name="gender" id="inlineCheckbox1" value="male" />
                    Male </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" id="inlineCheckbox2" value="female" />
                    Female </label>
                <br />
                <br />

                <div class="row">

                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="designation" placeholder="Designation" type="text"
                        required autofocus />
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-xs-6 col-md-6">
                        <select name="user_type" class="form-control" >
                            
                            <option value=""> --- Register As --- </option>
                            <option value="1">Instructor</option>
                            <option value="2">Student</option>
                            
                            
                        </select>
                    </div>
                </div>

                
                        
                <div class="row">
                    
                    
                    <div class="col-xs-6 col-md-6">
                                <input class="form-control" name="username" placeholder="Username" type="text"
                                                required autofocus />
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" type="password" name="password" placeholder="Password"
                                                required autofocus 
                
                    </div>
                </div>
                <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
                    Sign up
                </button>
            </form>
                        </div>

                    </div>
                </div>

            </section>
            <!-- section close -->

        </div>

<!--<script>
    $(document).ready(function () {
        $('username').change(function () {
            var username = $('#username').val();
            if (username != ''){
                $.ajax("<?php //echo base_url()?>Home/check_username_availability");
                method:"POST",
                    data:{username:username},
                success:function(data) {
                    $('#username_result').html(data);
                }
            }
        });
    });

</script>-->