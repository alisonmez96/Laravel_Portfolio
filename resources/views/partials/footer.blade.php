<footer class="footer">

<div class="footerleft">
    <h2>Get in touch_</h2>
  <div class="infofooter">
    <p>PHONE: 0486.81.78.69</p>
    <p>EMAIL: ali.sonmez@outlook.com</p>
    <p>SKYPE: alisnmz</p>
  </div>

  <div class="mediafooter">
    <a href="https://www.facebook.com/Asnmz7" target="_blank"><p>Facebook</p></a>
    <a href="https://twitter.com/1907_snmez" target="_blank"><p>Twitter</p></a>
    <a href="https://www.linkedin.com/in/ali-s%C3%B6nmez-14175b140/" target="_blank"><p>Linkedin</p></a>
  </div>
</div>

<div class="footerright">

  <div class="container">
    <h5>Or just write me a letter here_</h5>
      <form method="post" action="{{route('contact.sendMessage')}}">

          <div class="form-group">
              <input type="text" class="input" name="name" placeholder="Your name">
          </div>
    <!--      @if($errors->has('name'))
            <small class="form-text invalid-feedback">{{$errors->first('name')}}</small>
          @endif
        -->

          <div class="form-group">
              <input type="text" class="input" name="email" placeholder="Your email">
          </div>
    <!--      @if($errors->has('email'))
              <small class="form-text invalid-feedback">{{$errors->first('email')}}</small>
          @endif
        -->

          <div class="form-group">
              <textarea name="message" class="input" placeholder="Type the message here"></textarea>
          </div>
      <!--    @if($errors->has('message'))
              <small class="form-text invalid-feedback">{{$errors->first('message')}}</small>
          @endif
        -->

          <button class="btnsend">Send</button>

            @csrf
      </form>
  </div>

</div>
<div class="copyright">
  <p>&copy; 2019 Ali Sönmez - All Rights Reserved<p>

</div>
</footer>
