"use strict";

  var $next_dir = 0, $_dirs = [], $__nextDir = "";
  var $tmp_dir = "", $drop_dir = '';
  var dropRegion = null;

var paths_big_container = [], paths_small_container = [];

var pbc = 0, psc = 0, fileClicked = 0;

function PushAllDirectories(path, is, fileData, file, filename){
   var form = new FormData();
   
	let $drop_folder = "";
	var $drop_link = [dropRegion.id + '/' + filename, dropRegion.id + '/' + path];		
	
	if($drop_dir == "plugins/"+__$__49393_492_Page_acc_usr.toString() && $tmp_dir == "plugins/"+__$__49393_492_Page_acc_usr.toString()){
	  $drop_folder = $drop_dir + '/' + dropRegion.id;
	}else{
	  if($drop_dir == "plugins/"+__$__49393_492_Page_acc_usr.toString() && $tmp_dir == ''){
		$drop_folder = $drop_dir + '/' + dropRegion.id;//"294740328402188/" +
      }else{  
		$drop_folder = $drop_dir +  $tmp_dir + '/' + dropRegion.id;//"294740328402188/" + 
	  }
	}   
	
	switch(dropRegion.id){
	   case "css":
	     if(is == 0){
			return AlertBoxInModal("No Directories allowed here!"); 
		 }/* else{
			if($drop_link[0] != $drop_link[1]){
				return AlertBoxInModal("No path in file link!");
			}
		 } */
	   break;
	   case "html":
	     if(is == 0){
			return AlertBoxInModal("No Directories allowed here!"); 
		 }/* else{
			if($drop_link[0] != $drop_link[1]){
				return AlertBoxInModal("No path in file link!");
			}
		 }	     */
	   break;	   
	   case "images":
	     if(is == 0){
			return AlertBoxInModal("No Directories allowed here!"); 
		 }/* else{
			if($drop_link[0] != $drop_link[1]){
				return AlertBoxInModal("No path in file link!");
			}
		 } */	   
	   break;	   
	   case "program":
	     if(is == 0){
			return AlertBoxInModal("No Directories allowed here!"); 
		 }/* else{
			if($drop_link[0] != $drop_link[1]){
				return AlertBoxInModal("No path in file link!");
			}
		 }	   */ 
	   break;
	   case "server":
	     if(is == 0){
			return AlertBoxInModal("No Directories allowed here!"); 
		 }/* else{
			if($drop_link[0] != $drop_link[1]){
				return AlertBoxInModal("No path in file link!");
			}
		 }	   */ 
	   break;
	   case "mp3":
	     $drop_link[0] = "media/" + dropRegion.id + '/' + filename;
	     $drop_link[1] = "media/" + dropRegion.id + '/' + path;
	     if(is == 0){
			return AlertBoxInModal("No Directories allowed here!"); 
		 }/* else{
			if($drop_link[0] != $drop_link[1]){
				return AlertBoxInModal("No path in file link!");
			}
		 }	 */   
	   break;
	   case "mp4":
	     $drop_link[0] = "media/" + dropRegion.id + '/' + filename;
	     $drop_link[1] = "media/" + dropRegion.id + '/' + path;
	     if(is == 0){
			return AlertBoxInModal("No Directories allowed here!"); 
		 }/* else{
			if($drop_link[0] != $drop_link[1]){
				return AlertBoxInModal("No path in file link!");
			}
		 } */	   
	   break;
	}
   
   form.append("files-path", $drop_folder+path);
   form.append("site-id", is);
   form.append("file", fileData);
   form.append("file-size", file);
   form.append("dropRegion", dropRegion.id);
   form.append("filename", filename);
   $.ajax({
     type: "post",
	 url: "dirs.php", 
	 cache: false, 
	 contentType: false,
	 data: form,
	 processData: false,
	 success: function(result){
	     //window.console.log(result);
	     var data_returned = JSON.parse(result);
		 var file = data_returned.file;
		 if(data_returned.state == 0){
		 
		 }else if(data_returned.state == -1){
			return AlertBoxInModal(file+" not a css file!");
		 }else if(data_returned.state == -2){
			return AlertBoxInModal(file+" not an html/htm/xhtm/xhtml file!"); 
		 }else if(data_returned.state == -3){
			return AlertBoxInModal(file+" not a image file!"); 
		 }else if(data_returned.state == -4){
			return AlertBoxInModal(file+" not a program file!"); 
		 }else if(data_returned.state == -5){
			return AlertBoxInModal(file+" not a server file!"); 
		 }else if(data_returned.state == -6){
			return AlertBoxInModal(file+" not a mp3 file!"); 
		 }else if(data_returned.state == -7){
			return AlertBoxInModal(file+" not an mp4 file!"); 
		 }else{
		 
		 }
	 },
	 error: function(){}
   });   
}

  // https://gist.github.com/tiff/3076863
  var traverseFileTree = function self(item, path) {
    path = path || "";
    if (item.isFile) {
      // Get file
			item.file(function(file) {
        //var li = document.createElement('li');
        //li.innerText = path + file.name;
        //filelist.appendChild(li);
			let fileReader = new FileReader();
			var fileData = null;
			fileReader.onload = () => {
				let fileURL = fileReader.result;
				fileData = fileURL;
				 paths_big_container[pbc] = [item.isFile, item.fullPath, file.name, fileURL];
				 pbc++;
				 PushAllDirectories(item.fullPath, 1, fileData, file.size, file.name);
			}
			fileReader.readAsDataURL(file);		
      });
	  
    } else if (item.isDirectory) {
      // Get folder contents
	  ////window.console.log(item.fullPath);
	  PushAllDirectories(item.fullPath, 0, null, null, item.name);
      var dirReader = item.createReader();
      dirReader.readEntries(function(entries) {
        for (var i = 0; i < entries.length; i++) {
          self(entries[i], path + item.name + "/");
		  
        }
      });
    }
  };
  
/*   async sleepIn(){
	  await sleep(2000);
  } */
  
  function CreateTable(dirs){
        var table = document.createElement("table");
	    table.setAttribute("class", "dirs-tb");
	    table.setAttribute("id", "dirs-tb");
	          
		var tr = document.createElement("tr");
	    tr.setAttribute("class", "tr-h");
	    tr.setAttribute("id", "tr-h");
	    table.append(tr);
		
		var tx = document.createTextNode("FileName");
	   
        var th = document.createElement("th");
	    th.setAttribute("class", "filename");
	    th.setAttribute("id", "filename");
		th.append(tx);
	    tr.append(th);
		
		tx = document.createTextNode("Filesize");

		th = document.createElement("th");
	    th.setAttribute("class", "filesize");
	    th.setAttribute("id", "filesize");
		th.append(tx);
	    tr.append(th);
		
		tx = document.createTextNode("ID");

		th = document.createElement("th");
	    th.setAttribute("class", "fs");
	    th.setAttribute("id", "fs");
		th.append(tx);
	    tr.append(th);

       for(var dir_count = 0;dir_count < dirs.filenames.length;dir_count++){
	        if(dirs.filenames[dir_count] == false){
			   break;
			}
			tr = document.createElement("tr");
			tr.setAttribute("class", "tr-d");
			tr.setAttribute("id", "tr-d");
			table.append(tr);
			
			var tx = document.createTextNode(dirs["filenames"][dir_count]);
			
		    var td = document.createElement("td");
		    td.setAttribute("class", dirs["filenames"][dir_count]+" td-f");
		    td.setAttribute("id", dirs["filenames"][dir_count]);
			td.append(tx);
		    tr.append(td);
			
			var tmp_td = td;
            
			tx = document.createTextNode(dirs["filesize"][dir_count]);
			
		    td = document.createElement("td");
		    td.setAttribute("class", dirs["filesize"][dir_count]+" td-f");
		    td.setAttribute("id", dirs["filesize"][dir_count]);
			td.append(tx);
		    tr.append(td);

            tx = document.createTextNode(dirs["ds"][dir_count]);

		    td = document.createElement("td");
		    td.setAttribute("class", dirs["ds"][dir_count]+" td-f");
		    td.setAttribute("id", dirs["ds"][dir_count]);
			td.append(tx);
		    tr.append(td);
			
			if(dirs["ds"][dir_count] == "D"){
			   tmp_td.setAttribute("class", dirs["filenames"][dir_count] + " dir-color td-f");
			}
			if(dirs["ds"][dir_count] == "F"){
			   tmp_td.addEventListener("click", FEditor(tmp_td));
			   //tmp_td.addEventListener("keypress", GetKeyType(tmp_td, dirs["filelocation"][dir_count], 1));
			   GetKeyType(tmp_td, dirs["filelocation"][dir_count], 1);
			}
			
			
			if(dirs["filenames"][dir_count] == "."){
			  
			}
			else if(dirs["filenames"][dir_count] == ".."){
			   tmp_td.addEventListener("click", OpenSub(tmp_td, table, dirs["filenames"][dir_count], 1));
			}else{
			   if(dirs["ds"][dir_count] == "D"){
			      tmp_td.addEventListener("click", OpenSub(tmp_td, table, dirs["filenames"][dir_count], 1));
			      //tmp_td.addEventListener("keypressed", GetKeyType(tmp_td, dirs["filelocation"][dir_count], 1));
			   
				   tmp_td.addEventListener("dragover", (event) => {
						event.preventDefault();
						tmp_td.classList.add("active");
				   });
				   
					tmp_td.addEventListener("dragleave", () => {
						tmp_td.classList.remove("active");
						//dragText.textContent = "Drag & Drop to Upload file";
					});

			       (function(tmp_td){
					tmp_td.addEventListener("drop", (event) => {
					    dropRegion = tmp_td;
						event.preventDefault();
						//var file = event.dataTransfer.files[0];
						//showFile(event, file, tmp_td);
						var e = event;
						var length = e.dataTransfer.items.length;
						for (var i = 0; i < length; i++) {
						  // recursive director search
						  traverseFileTree(e.dataTransfer.items[i].webkitGetAsEntry());
						}
						
						//dropzone.classList.remove('hover');
						e.stopPropagation();
						e.preventDefault();
						return false;
					});
				  })(tmp_td);
			   }
			}
	   }
	   document.getElementsByClassName("dirs")[0].append(table);
	   if($next_dir == 0){
	      $_dirs[$next_dir] = "plugins/"+__$__49393_492_Page_acc_usr.toString();
	      $tmp_dir = "plugins/"+__$__49393_492_Page_acc_usr.toString();
	      $drop_dir = "plugins/"+__$__49393_492_Page_acc_usr.toString();
		  $next_dir++;
	   }
  }
  
  function GetKeyType(tmp_td, filelocation, fileDirection){
	//window.console.log('keylogger1');
/* 	tmp_td.onkeypress = function(event){
		 if(fileClicked == 1){
				switch(event.keyCode){
					case 'D':
					case 'd':
					case 68:
					case 100:
					{
						//window.console.log('keylogger');
						DeleteFile(filelocation, fileDirection);
					}
					break;
				} 
		 }
	}
 */
	tmp_td.addEventListener("keypress", function(event){
		//window.console.log('keylogger---');
		 if(fileClicked == 1){
				switch(event.keyCode){
					case 'D':
					case 'd':
					case 68:
					case 100:
					{
						//window.console.log('keylogger');
						DeleteFile(filelocation, fileDirection);
					}
					break;
				} 
		 }
	});
  }
  
  function DeleteFile(filelocation, fileDirection){
	  var form = new FormData();
	  form.append("filelocatioin", filelocation);
	  form.append("fileDirection", fileDirection);
	  form.append("site-id", 2);
	   $.ajax({
		 type: "post",
		 url: "dirs.php", 
		 cache: false, 
		 contentType: false,
		 data: form,
		 processData: false,
		 success: function(result){
			 //window.console.log(result);
			 var data_returned = JSON.parse(result);
			 //var file = data_returned.file;
			 if(data_returned.state == 0){
			 
			 }else{
			   fileClicked = 0;
			 }
		 },
		 error: function(){}
	   });	  
  }
  
  function FEditor(tmp_td){
	tmp_td.onclick = function(){
		if(fileClicked == 1){
			tmp_td.style.backgroundColor = "white";
			fileClicked = 0;
		}else{
		   fileClicked = 1;
		   tmp_td.style.backgroundColor = "blue";
		}
		
    }
  }
  
  function OpenSub(tmp_td, table, filename, read_id){
         tmp_td.onclick = function(){
			// if(doubleClick == 1){
				// sleepIn();
				// doubleClick = 0;
				// return;
			// }else if(doubleClick == 2){
				// doubleClick = 0;
			// }
		    if(filename == ".."){
			   $next_dir--;
			   if($next_dir <= 0){
			      $next_dir = 0;
			   }else{
			      $_dirs.pop();
			   }
			   //window.alert(filename);
			}
		    if($next_dir > 0){
			   if(filename != ".."){
			      $_dirs[$next_dir] = filename;
			   }
				for(var dir_serve = 1;dir_serve < $_dirs.length;dir_serve++){
				   if(dir_serve == $_dirs.length){break;}
				   $__nextDir += '/' + $_dirs[dir_serve];
				}
				if(filename != ".."){
			        $next_dir++;
				}
			}else{
			    $next_dir = 0;
			}
			document.getElementsByClassName("dirs")[0].removeChild(table);
			if($next_dir == 0){read_id = 0;}
			Directories(read_id, $__nextDir);
		}
  }
  
  
  function Directories(read_id = 0, dirSelect = ""){
     var form = new FormData();
	 form.append("dump_id", "plugins/"+__$__49393_492_Page_acc_usr.toString());
	 form.append("read_id", read_id);
	 if(read_id == 1){
	    form.append("dir-select", dirSelect);
	 }
	 $tmp_dir = $__nextDir;
	 $__nextDir = "";
	 $.ajax({
	    type: "post",
		url: "fetch.dirs.php",
		contentType: false, 
		cache: false, 
		processData: false,
		data: form,
		success: function(result){
			 //window.console.log(result);
		      let data_returned = JSON.parse(result);
			  if(data_returned.state == 0){
			     //window.console.log(data_returned);
			  }else{
				 CreateTable(data_returned["dirs"]);
			  }
		},
		error: function(){}
	 });
  }

function Rollout(){
      document.getElementById("dev-rollout").style.transform = "scale(1)";
      //document.getElementById("dev-rollout").style.display = "flex";
      document.getElementById("dev-rollout").style.display = "block";
      //document.getElementById("dev-rollout").style.height = "400px";//"200px";
/*       document.getElementsByClassName("upload-programs")[0].style.display = "block";
      document.getElementsByClassName("upload-programs")[0].style.transform = "scale(1)";
      document.getElementsByClassName("upload-links")[0].style.display = "block";
      document.getElementsByClassName("upload-links")[0].style.transform = "scale(1)"; */
      document.getElementsByClassName("close-rollout")[0].style.display = "block";
      Directories();
}

function DeveloperResponse(){
      document.getElementById("developer-response").style.transform = "scale(1.8)";
      document.getElementById("developer-response").style.display = "flex";
      document.getElementById("developer-response").style.height = "200px";
	  let devp = document.getElementsByClassName("response-i");
	  const dev_p = devp.length;
	  for(var devP = 0;devP < dev_p;devP++){
		  devp[devP].style.transform = "scale(1)";
	  }
}

function DevFilesContainer(devFileID = 0){
      document.getElementById("dev-files-container").style.transform = "scale(1.8)";
      document.getElementById("dev-files-container").style.display = "flex";
      document.getElementById("dev-files-container").style.height = "200px";
	  if(devFileID == 0){
        document.getElementsByClassName("developer-program-files-container-form")[0].style.display = "block";
        document.getElementsByClassName("developer-program-files-container-form")[0].style.transform = "scale(1)";
	    document.getElementsByClassName("developer-link-files-container-form")[0].style.display = "none";
	    document.getElementsByClassName("developer-link-files-container-form")[0].style.transform = "scale(1)";
	  }else{
        document.getElementsByClassName("developer-program-files-container-form")[0].style.display = "none";
        document.getElementsByClassName("developer-program-files-container-form")[0].style.transform = "scale(1)"; 
        document.getElementsByClassName("developer-link-files-container-form")[0].style.display = "block";
        document.getElementsByClassName("developer-link-files-container-form")[0].style.transform = "scale(1)";
	  }
      document.getElementsByClassName("close-dev-files-container")[0].style.display = "block";
}

function CloseRollout(){
	document.getElementById("dev-rollout").style.transform = "scale(0)";
	//document.getElementById("dev-rollout").style.height = "0px";
    $next_dir = 0, $_dirs = [], $__nextDir = "";
    $tmp_dir = "", $drop_dir = '';
    dropRegion = null;

    paths_big_container = [], paths_small_container = [];

    pbc = 0, psc = 0;	
	document.getElementsByClassName("dirs")[0].removeChild(
	document.getElementById("dirs-tb"));
	//document.getElementById("dev-rollout").style.display = "none";
}

function CloseDeveloperResponse(){
	document.getElementById("developer-response").style.transform = "scale(0)";
	document.getElementById("developer-response").style.height = "0px";
	//document.getElementById("dev-rollout").style.display = "none";
}

function CloseDevFilesContainer(){
	document.getElementById("dev-files-container").style.transform = "scale(0)";
	document.getElementById("dev-files-container").style.height = "0px";
	//document.getElementById("dev-rollout").style.display = "none";
}

document.getElementById("rollout").addEventListener("click", function(){
      Rollout();
});

document.getElementById("close-rollout").addEventListener("click", function(){
      CloseRollout();
});

document.getElementById("close-developer-response").addEventListener("click", function(){
      CloseDeveloperResponse();
});

document.getElementById("close-dev-files-container").addEventListener("click", function(){
      CloseDevFilesContainer();
});

document.getElementsByClassName("upload-programs")[0].addEventListener("click", function(){
      DevFilesContainer(0);
});

document.getElementsByClassName("upload-links")[0].addEventListener("click", function(){
      DevFilesContainer(1);
});
