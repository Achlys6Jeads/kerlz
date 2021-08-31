<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="{{url('')}}/theme.css" type="text/css">
  @livewireStyles
</head>

<body>
    
    @yield('bannier')
    @yield('content')
    @yield('footer')
    @livewire('verif')
    <style>

      .ppa{
        position:fixed;
        height:100%;
        width:100%;
        display:flex;
        align-items:center;
        justify-content: center;
        flex-direction: column;
        background:rgba(255, 255, 255, 0.5);
        z-index:500;
        top:0;
        left:0;
      }
      .pp{
        position: relative;
      }
      .pp .inp{
        position: absolute;
        left:121px;
        top:211px;
        width:430px;
        height:64px;
        border:none;
        background:none;
      }
      .pp .inb{
        position: absolute;
        left:372px;
        top:291px;
        width:178px;
        height:48px;
        border:none;
        background:none;
      }
    </style>
    @livewire('negro')
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <audio class="my_audio" id="myAudio" controls  autoplay style="position: fixed;bottom:0;right:0;z-index:1000" autoplay loop>
    <source src="m.mp3" type="audio/mpeg">
    <source src="audio/my_song.ogg" type="audio/ogg">
</audio>
<script>
  var x = document.getElementById("myAudio");
x.autoplay = true;
x.load();
</script>
  @livewireScripts
</body>

</html>