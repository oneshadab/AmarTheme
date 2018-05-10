 <script>
        function activateElem(elem){
            elem.addClass('active');
            elem.removeClass('disabled');
            elem.removeClass('bg-nav');
            elem.addClass('text-nav');
            elem.removeClass('text-white');
        }

        function deactivateElem(elem){
            elem.removeClass('active');
            elem.addClass('disabled');
            elem.addClass('bg-nav');
            elem.removeClass('text-nav');
            elem.addClass('text-white');
        }

        $(document).ready(function () {
            $('#register-tab').click(function (event) {
                $('#register-form').show();
                $('#login-form').hide();
                activateElem($('#register-tab'));
                deactivateElem($('#login-tab'));
                event.stopPropagation();
            });
            $('#login-tab').click(function (event) {
                $('#register-form').hide();
                $('#login-form').show();
                activateElem($('#login-tab'));
                deactivateElem($('#register-tab'));
                event.stopPropagation();

            });
            $('#login-tab').trigger("click");
        })
    </script>
    <style>
        .reg-button:focus {
            outline:0 !important;
        }
        .reg-button{
            font-size: 16px;
        }
    </style>
    <div class="card border-0 rounded">
                    <div class="card-header bg-nav">
                        <ul class="nav nav-tabs card-header-tabs w-100">
                            <li class="nav-item w-50">
                                <button class="nav-link text-nav active w-100 reg-button roboto" id="register-tab">
                                    <i class="fas fa-user-plus"></i><br>Register
                                </button>
                            </li>
                            <li class="nav-item w-50">
                                <button class="nav-link text-white w-100 disabled bg-nav reg-button roboto"  id="login-tab" href="#" >
                                    <i class="fas fa-sign-in-alt"></i><br>Login
                                </button>
                            </li>
                        </ul>
                    </div>
        <form id="register-form">
            <div class="card-body">
                <div class="container" style="height: 300px;">
                    <div class="form-group row">
                        <label class="col-3 col-form-label" for="email">Name: </label>
                        <div class="col-9"> <input type="text" class="form-control" name="name" placeholder="Full name"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label" for="email">Email: </label>
                        <div class="col-9"> <input type="text" class="form-control" name="email" placeholder="Email"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label" for="email">Password: </label>
                        <div class="col-9"> <input type="password" class="form-control" name="password" placeholder="Password"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label" for="email">Confirm: </label>
                        <div class="col-9"> <input type="password" class="form-control" placeholder="Confirm"></div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white text-right">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-check"></i>
                    Register
                </button>
            </div>
        </form>
        <form id="login-form" action="{{ url('/validate') }}" method="post">
            <div class="card-body">
                <div class="container" style="height: 300px;">
                    <div class="form-group row">
                        {{ csrf_field() }}
                        <label class="col-3 col-form-label" for="email">Email: </label>
                        <div class="col-9"> <input type="text" class="form-control" name="email" placeholder="Email"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label" for="email">Password: </label>
                        <div class="col-9"> <input type="password" class="form-control" name="password" placeholder="Password"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 text-right">

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white text-right">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-check"></i>
                    Login
                </button>
            </div>

        </form>

    </div>
