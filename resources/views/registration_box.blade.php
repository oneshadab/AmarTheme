<script>
    $(document).ready(function () {
        $('#register-tab').click(function () {
            $('#register-form').show();
            $('#login-form').hide();
            $('#register-tab').addClass('active');
            $('#login-tab').removeClass('active');
        });
        $('#login-tab').click(function () {
            $('#register-form').hide();
            $('#login-form').show();
            $('#login-tab').addClass('active');
            $('#register-tab').removeClass('active');
        });
        $('#register-tab').trigger("click");
    })
</script>
<div class="container p-0" >
    <div class="row">
        <div class="col-12">
            <div class="card p-0">
                <div class="card-body pb-0">
                    <form >
                        <div class="container p-0">
                            <div class="row">
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group col-12">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <a class="btn btn-primary btn-block text-white" href="{{route('registration')}}">
                                        <i class="fas fa-user-plus"></i>
                                        Register
                                    </a>
                                </div>
                                <div class="form-group col-6">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fas fa-sign-in-alt"></i>
                                        Login
                                    </button>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>