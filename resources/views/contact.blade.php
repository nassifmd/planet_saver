@extends('layouts.app1')
@include('inc.navbar')

@section('content')

<div class="backx">
        <div class="container">
        <div class="section">
    
            <div class="row">
            <div class="col s12 m12">
                <div class="icon-block">
                <h2 class="new-blue-text center" style="margin-top: 100px;">Contact Us</h2>
    
                <p class="new-blue-text center">Say hello and lets connect</p>
                </div>
            </div>
            </div>
    
        </div>
        </div>
  </div>

  <div class="container">
    <div class="row">
        <form style="padding: 50px;" class="col s12 m6" action="sendmail.php" method="post">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input name="name" id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">First Name</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input name="email" id="icon_email" type="email" class="validate">
              <label for="icon_email">Email</label>
            </div>
            <div class="input-field col s12">
                <textarea name="message" id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Say Hello to us</label>
              </div>
          </div>
          <a class="waves-effect new-blue waves-light btn-large" type="submit" name="send">Send</a>
        </form>
        <div style="padding: 20px;" class="col s12 m6">
          <div class="row">
            <h4 class="new-blue-text">AgricConnect International</h4>
            <p><i class="material-icons" style="margin-left: 50px; padding-right: 20px;">add_location</i>53 Hammersly Blvd,Markham Ontario Canada</p>
            <p><i class="material-icons" style="margin-left: 50px;padding-right: 20px;">contact_phone</i>+1(617)9015851</p>
            <p><i class="material-icons" style="margin-left: 50px;padding-right: 20px;">email</i>info@agricconnect.org</p>
          </div>
        </div>
        <div style="padding: 1px 80px ;" class="col s12 m6">
          <div class="row">
            <h4 class="new-blue-text">AgricConnect Ghana</h4>
            <p><i class="material-icons" style="margin-left: 50px; padding-right: 20px;">add_location</i>Kumasi Lake Road</p>
            <p><i class="material-icons" style="margin-left: 50px;padding-right: 20px;">contact_phone</i>+233501382536</p>
          </div>
        </div>
    </div>
  </div>


@endsection