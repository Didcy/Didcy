<?php
 
  declare(strict_types=1);
 
  include_once("_it.php");
  
  define("PLUGIN", "plugin", false);
  
  use IT\ITrack;
  
  $ITrackImport = JsonDecoder($_POST[PLUGIN]);

  $iTrack = new ITrack($ITrackImport[0], $ITrackImport[1], $ITrackImport[2], 
  $ITrackImport[3], $ITrackImport[4], $ITrackImport[5], $ITrackImport[6], 
  $ITrackImport[7]);
  
  echo json_encode($iTrack->ITrackWrapper(0, $_POST["user"], $_POST["userID"]));

?>