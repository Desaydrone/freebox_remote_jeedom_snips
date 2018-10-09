//Permet de revenir à la mire d'accueil de la freebox
function Home(){
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=home";
  file_get_contents($url);
  sleep(1);
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=home";
  file_get_contents($url);
  sleep(3);
}

function Television(){
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=ok";
  file_get_contents($url);
}

function LongSoundDown(){
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=vol_dec&long=true";
  file_get_contents($url);
}

function LongSoundUp(){
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=vol_inc&long=true";
  file_get_contents($url);
}

// Permet d'aller sur l'application twitch sur les stream suivis
function Twitch(){
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=left";
  file_get_contents($url);
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=left";
  file_get_contents($url);
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=up";
  file_get_contents($url);
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=up";
  file_get_contents($url);
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=ok";
  file_get_contents($url);
  sleep(1);
    for ($i=0; $i=3; $i++ )
    {
      $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=down";
      file_get_contents($url);
    }
  //$url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=down";
  //file_get_contents($url);
  //$url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=down";
  //file_get_contents($url);
  //$url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=down";
  //file_get_contents($url);
}

function ProgrammeTv(){
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=ok";
  file_get_contents($url);
  sleep(7);
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=green";
  file_get_contents($url);
  sleep(1);
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=down";
  file_get_contents($url);
  sleep(1);
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=ok";
  file_get_contents($url);
  sleep(1);
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=ok";
  file_get_contents($url);
}

function SortProgrammeTv(){
  $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=red";
  file_get_contents($url);
}

function ChaineTV(){
  $TvChannel=str_split($TvChannel);
  for ($i=0; $i<count($TvChannel); $i++ )
  {
    $url="http://hd1.freebox.fr/pub/remote_control?code=$FreeRemoteCode&key=$TvChannel[$i]";
    file_get_contents($url);
  }
}
