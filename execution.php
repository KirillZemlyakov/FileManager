<?php 
	$rootFolder ="rootfolder";
	if ((strpos($folder,$rootFolder)!=0)||(strpos($folder,"..")!=False)){
		exit;
	}

	function delfiles($fld){
		$hdl=opendir($fld);
		while ($file = readdir($hdl))
		 {
		  if (($file!=".")&&($file!=".."))
		   {
		    if (is_dir($fld."/".$file)==True)
		     {
		      delfiles ($fld."/".$file);
		      rmdir ($fld."/".$file);
		     }
		     else
		     {
		      unlink ($fld."/".$file);
		     }
		   }
		 }
		closedir($hdl);
	}

	if (isset($_POST['delete'])){
		/*if(isset($fl) && is_array($fl)) foreach ($fl as $i){*/
			$flname=$_POST[$full];
   			if (is_dir("/www/rootfolder/".$flname)==True){
   				delfiles ("/www/rootfolder/".$flname);
   				rmdir ("/www/rootfolder/".$flname);
    		} else{
    			unlink ("/www/rootfolder/".$flname);
    		}
    	}
    

    if (isset($_POST['createnew'])){
    	$newname=strtr($_POST['newname'], " []{},/\!@#$%^&*", "____________________");
    	if (!file_exists($newname)){
    	mkdir("rootfolder/$folder".$newname, 0777);
    	}
    }
	Header ("Location: filemanager.php?fold=$folder");
?>
