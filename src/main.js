$("#throwAwaysFolder").hide();
$("#music-folder").hide();
$("#musicVideosFolder").hide();
$("#dates-text").hide();
$("#cool-shit-folder").hide();

$(document).ready(function()
{

  $("#closeFolderThrowAways").click(function(){ $("#throwAwaysFolder").hide(); });
  $("#close-folder-music").click(function(){ $("#music-folder").hide(); });
  $("#close-folder-dates").click(function(){ $("#dates-text").hide(); });
  $("#closeFolderMusicVideos").click(function(){ $("#musicVideosFolder").hide(); });
  $("#close-folder-cool-shit").click(function(){ $("#cool-shit-folder").hide(); });

  $("#throw-aways").click(function(){
    $("#throwAwaysFolder").show();
  });

  $("#music").click(function(){
    $("#music-folder").show();
  });

  $("#dates").click(function(){
    $("#dates-text").show();
  });

  $("#music-videos").click(function(){
    $("#musicVideosFolder").show();
  });

  $("#cool-shit").click(function(){
    $("#cool-shit-folder").show();
  });

  $(".open-folder").draggable({containment: "body"});

});
