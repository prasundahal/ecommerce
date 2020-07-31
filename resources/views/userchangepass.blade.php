@extends('includes.head')

@section('content')

<div class="home-wrapper">
    <!-- Starting of Account Dashboard area -->
    <div class="section-padding dashboard-account-wrapper wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    @include('includes.usermenu')
                </div>



                
                <section id="contact-us" class="contact-us section">
                    <div class="container">
                            <div class="contact-head">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-head">
                                            
                                   
                <div class="col-md-7">
                    <div class="dashboard-content">
                        <div id="account-information-tab">
                            
                            <div class="edit-account-info-div">
                                <h3>Change Password</h3>
                                <br>
                                @if(Session::has('message'))
                                    <div class="alert alert-success alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        {{ Session::get('message') }}
                                    </div>
                                @endif
                                <p><span>*</span> required field</p>
                                <form action="{{ action('UserProfileController@passchange',['id' => $user->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-17 form-group">
                                            <label for="dash_password">current password <span>*</span></label>
                                            <input class="form-control" type="password" name="cpass" id="dash_password" placeholder="01234567" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-17 form-group">
                                            <label for="new_password">new password <span>*</span></label>
                                            <input class="form-control" type="password" name="newpass" id="new_password" placeholder="01234567" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-17 form-group">
                                            <label for="change_password">change password <span>*</span></label>
                                            <input class="form-control" type="password" name="renewpass" id="change_password" placeholder="01234567" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-17 form-group">
                                            <input class="btn btn-md save-btn" type="submit" value="change password">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div></div>
                                    </div>
                                </div>
                            </div></div>
            </div>
        </div>
    </div>
    <!-- Ending of Account Dashboard area -->
</div>
</div>
@stop

@section('footer')

@stop