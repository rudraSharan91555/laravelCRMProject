<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title> Login </title>
      @vite(['resources/css/app.css', 'resources/js/app.js'])

   </head>
   <body>
      <div class="bg-img">
         <div class="content">
            <header>Sign In</header>
            @if(session()->has('error'))
            <div>{{session()->get('error')}}</div>
            @endif
            <form action="{{ route('login.submit') }}" method="post">
               @csrf
               <div class="field">
                   <span class="fa fa-user"></span>
                   <input type="email" name="email" required placeholder="User">
                   @error('email')
                       <small class="text-danger">{{ $message }}</small>
                   @enderror
               </div>
               <div class="field space">
                   <span class="fa fa-lock"></span>
                   <input type="password" class="pass-key" name="password" required placeholder="Password">
                   @error('password')
                       <small class="text-danger">{{ $message }}</small>
                   @enderror
                   <span class="show">SHOW</span>
               </div>
               <div class="pass">
                   <a href="#">Forgot Password?</a>
               </div>
               <div>
                   <button type="submit" name="submit" value="submit">Sign In</button>
               </div>
           </form>
           
            <div class="login">
               Or login with
            </div>
            <div class="links">
               <div class="facebook">
                  <i class="fab fa-facebook-f"><span>Facebook</span></i>
               </div>
               <div class="instagram">
                  <i class="fab fa-instagram"><span>Instagram</span></i>
               </div>
            </div>
            <div class="signup">
               Don't have account?
               <a href="#">Signup Now</a>
            </div>
         </div>
      </div>
     
   </body>
</html>