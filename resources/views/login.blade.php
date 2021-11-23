
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    {{-- style --}}
    <link rel="stylesheet" href="/css/style.css">

   

    <script type="text/javascript" src="js/script.js"></script>  
   
    <title>Mediatama || {{ $title }} </title>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">
    
    
      // alert({{ $cek }});
      if ({{ $cek }} ===1){
           alert('User Salah, Cek Lagi !');
        } 
            
    </script>


    <div align="center" class="mt-5">
        <tr>
            <td><a><img width="150px" src="img/mediatama.png" alt="mediatama"></a><br>
            </td>    
        </tr>
    </div>

    <main class="form-signin container">
        <form action="/" method="post">
            @csrf
         <h1 class="h3 mb-3 fw-normal" align="center">Silahkan Login</h1>
      
          <div class="form-floating">
            <input type="text" name="user" id="user" class="form-control" Placeholder="USER" >
            <label style="color: grey"> Username </label>
          </div>
          
      
          <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
          <p class="mt-5 mb-3 text-muted"> </p>
        </form>
      </main>

      
  </body>
  </html>
