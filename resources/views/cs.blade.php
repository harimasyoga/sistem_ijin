@extends('partial.header')
@section('konten')
    
    {{-- <div align="center">
        <tr>
            <td><a><img width="300px" src="img/mediatama.png" alt="mediatama"></a><br></td>
        </tr>
        <tr>
            <td>
                <a style="font-size: 30px">Jl. Adisumarmo 331 - Surakarta</a>
            </td>
        </tr>
    </div> --}}

    <main>
        <div class="album py-5 bg-light">
          <div class="container">
      
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
             
                <div style="text-align:center"> 
                    <br>
                    <video id="video1" width="420">
                      <source src="vid/cek3.mp4" type="video/mp4">
                    </video><br><br>
                    <button onclick="playPause()">Play/Pause</button> 
                    <button onclick="makeBig()">Big</button>
                    <button onclick="makeSmall()">Small</button>
                    <button onclick="makeNormal()">Normal</button>
                    <br>
                    
                </div> 
                  
                  <script> 
                  var myVideo = document.getElementById("video1"); 
                  var myVideo2 = document.getElementById("video2"); 
                  
                  function playPause() { 
                    if (myVideo.paused) 
                      myVideo.play(); 
                    else 
                      myVideo.pause(); 
                  } 
                  
                  function makeBig() { 
                      myVideo.width = 560; 
                  } 
                  
                  function makeSmall() { 
                      myVideo.width = 320; 
                  } 
                  
                  function makeNormal() { 
                      myVideo.width = 420; 
                  } 
                  </script> 
                  
                  

            </div>
          </div>
        </div>
      
      </main>

@endsection