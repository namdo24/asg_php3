<header id="tg-header" class="tg-header tg-haslayout">
    <div class="tg-topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-leftbox" style="margin-top: 8px;">
                        Chúc bạn ngày mới tốt lành
                    </div>
                    <div class="tg-rightbox">
                        <ul class="tg-socialicons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <ul>
                            <li class="dropdown tg-themedropdown">
                                <button class="tg-btndropdown" id="tg-logindropdown" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">đăng
                                    nhập</button>
                                <div class="tg-dropdownbox" aria-labelledby="tg-logindropdown">
                                    <form class="tg-formtheme tg-formlogin">
                                        <fieldset>
                                            <h2>Welcome, Login to Your Account</h2>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Enter your Email">
                                            </div>
                                            <div class="form-group">
                                                <div class="tg-inputicon">
                                                    <input type="password" name="password"
                                                        class="form-control tg-password"
                                                        placeholder="Your Password">
                                                    <i class="tg-btnshowpassword"></i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <span class="tg-checkbox">
                                                    <input type="checkbox" value="yes" id="tg-remember">
                                                    <label for="tg-remember">Remember Me</label>
                                                </span>
                                                <a class="tg-btnforgot" href="#">Forgot Password?</a>
                                            </div>
                                            <div class="form-group">
                                                <button class="tg-btn" type="submit">Login</button>
                                            </div>
                                            <div class="tg-notebox">
                                                <p>Don’t Have Account? <a href="#">Create New Account</a>
                                                </p>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                            <li class="dropdown tg-themedropdown">
                                <button class="tg-btndropdown" id="tg-registerdropdown" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">đăng
                                    ký</button>
                                <div class="tg-dropdownbox" aria-labelledby="tg-registerdropdown">
                                    <form class="tg-formtheme tg-formlogin">
                                        <fieldset>
                                            <h2>Create New Account</h2>
                                            <div class="form-group">
                                                <input type="text" name="fullname" class="form-control"
                                                    placeholder="Full Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Email* (Your email address will not be published.)">
                                            </div>
                                            <div class="form-group">
                                                <div class="tg-inputicon">
                                                    <input type="password" name="password"
                                                        class="form-control tg-password"
                                                        placeholder="Your Password">
                                                    <i class="tg-btnshowpassword"></i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="tg-btn" type="submit">Register Now</button>
                                            </div>
                                            <div class="tg-notebox">
                                                <p>Already Have Account? <a href="#">Login Now</a></p>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="" style="display: flex; align-items: center;">
                    <strong class="tg-logo"><a href="{{url('/')}}"><img src="/layout/images/logo.png"
                                alt="logo"></a></strong>
                    <form action="{{url('timkiem')}}" style="display: flex; align-items: center;">
                        <input
                            style="margin-left: 200px; border-radius: 10px 0 0 10px ; margin-top: 20px; width: 500px; height: 40px;"
                            type="text" name="keyword" id=""
                            placeholder="nhập nội dung muốn tìm ">
                        <button type="submit"
                            style="margin-top: 20px;border-radius:0 10px  10px 0; width: 80px; height: 40px; display: flex; align-items: center; background-color: bisque;"><i
                                class="lnr lnr-magnifier">Tìm kiếm</i></button>
                    </form>
                </div>
                <div class="tg-navigationarea">
                    <nav id="tg-nav" class="tg-nav">
                        <div  class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#tg-navigation" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                            <ul>
                                @foreach ($danhmuc as $dm)
                                <li>
                                    <a style="text-decoration: none" href="{{url('tintheoloai',$dm->id)}}"><b>{{$dm->name}}</b></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</header>