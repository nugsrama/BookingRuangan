<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PGN ROOM </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
</head>
<>

<div class="container">
    <div class="box">
   <div class="row contentform">
     <div class="col-sm-13 col-md-6 col-lg-6">
         <img data-aos="fade-in" data-aos-duration="2500"
         data-aos-easing="ease-in-out" src="/image/logopgn.png" width="400px" class="img-fluid">
     </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                        
                    @endforeach
                </ul>
        </div>
        @endif
            <div class="col-sm-12 col-md-6 col-lg-6">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('message' )}}
                </div>
                @endif
            <form action="" method="POST">
               
            @csrf
            <h4 class="text-center"> REGISTRASI </h4>
            <br>
            <div class="mb-3 ">
                <label for="username" class="form-label" >Username</label>
                <input placeholder="Masukan Username Anda" name="username" id="username" class="form-control" aria-describedby="UsernameHelp" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input placeholder="Masukan Password Anda" name="password" id="password" class="form-control" required>
                  <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                  <span id="mybutton" onclick="change()">

                    <!-- icon mata bawaan bootstrap  -->
                    
                </span>
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input placeholder="Masukan Email Anda" name="email" id="email" class="form-control" required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary form-control">Daftar</button>

            </div>
                
            <div class="text-center">
               Sudah punya akun? <a href="login">Login</a>
            </div>
                
        </form>
            </div>
            <script>
                // membuat fungsi change
                function change() {
        
                    // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
                    var x = document.getElementById('password').type;
        
                    //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
                    if (x == 'password') {
        
                        //ubah form input password menjadi text
                        document.getElementById('password').type = 'text';
                        
                        //ubah icon mata terbuka menjadi tertutup
                        document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                                        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                                        </svg>`;
                    }
                    else {
        
                        //ubah form input password menjadi text
                        document.getElementById('password').type = 'password';
        
                        //ubah icon mata terbuka menjadi tertutup
                        document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                        </svg>`;
                    }
                }
            </script>
            
            
    </div>
          </div>
    </div>
    </div>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script> AOS.init();</script>
</body>
</html>





























