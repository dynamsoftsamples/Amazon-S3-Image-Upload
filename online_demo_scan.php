﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head  runat="server">
    <title>Dynamic Web TWAIN Online Demo</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="Content-Language" content="en-us"/>
    <meta http-equiv="X-UA-Compatible" content="requiresActiveX=true" />
    <meta name="description" content="Dynamic Web TWAIN is a TWAIN scanning SDK specifically optimized for web applications. You can control any TWAIN compatible device drivers - scanner, digital camera or capture card - in a web page to acquire images, edit and then upload to web servers using the TWAIN control." />
    <meta name="keyword" content="Dynamsoft, TWAIN, Scanners, SDK, Scanning"/>
    <link href="Styles/style.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" language="javascript" src="Scripts/kissy-min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

</head>

<body>
<div class="D-dailog" id="J_waiting">
    <div id = "InstallBody">       
    </div>
</div>

    
<div id="container" class="body_Broad_width" style="margin:0 auto;">

<div class="DWTHeader">
   <div class="body_Broad_width" style="background-image:url(Images/adtopbackground.gif); height:88px; width:987px; ">
    <div style="float:left; padding-top:15px; width:525px; margin-left:25px;">
        <span>
            <a href="http://www.dynamsoft.com/"><img src="Images/logo.gif" alt="Dynamsoft: provider of version control solution and TWAIN SDK" style="padding: 12px 0 0;" name="logo" border="0" align="left" id="logo" title="Dynamsoft: provider of version control solution and TWAIN SDK" /></a>
        </span>
        <span style="border-left:1px solid #CCC;margin: 0 0 0 10px;padding: 40px 0 0 10px;">
            <a href="http://www.dynamsoft.com/Products/WebTWAIN_Overview.aspx"> <img alt = "DynamicWebTWAIN logo" style="border:none; " src="Images/DWT icon logo.png"/></a>
        </span>
    </div>
   </div>
   <div id="menu">
   <ul>
   <li style="float:left; width:30px; height:40px; line-height:40px; color:#FFF;"></li>
   <li class="D_menu_item" style="width:280px">
   <div class="menubar_split" ></div>
   <div class="menubar_split_last"></div>
   <a class="nohref" href="http://www.dynamsoft.com/demo/DWT/online_demo_scan.aspx">Dynamic Web TWAIN Demo</a>
   </li>
   <li style="float:left; width:420px;color:#FFF;"></li>
   <li class="D_menu_item" style="width:220px;" title="Includes Source Code of Current Page">
   <div class="menubar_split" ></div>
   <div class="menubar_split_last"></div>
   <a class="nohref" href="https://www.dynamsoft.com/Secure/Register_ClientInfo.aspx?productName=WebTWAIN&from=FromDownload"> Download Free Trial</a>
   </li>
   </ul>
   </div>
</div>

<div id="DWTcontainer" class="body_Broad_width" style="background-color:#ffffff; height:800px; border:0;">

<div id="dwtcontrolContainer" style="width:580px"></div>
<div id="DWTNonInstallContainerID" style="width:580px"></div>
<div id="DWTemessageContainer" style="margin-left:50px;width:580px"></div>

<div id="ScanWrapper">
<div id="divScanner" class="divinput">
    <ul class="PCollapse">
        <li>
        <div class="divType"><div class="mark_arrow expanded"></div>Custom Scan</div>
            <div id="div_ScanImage" class="divTableStyle">
                <ul id="ulScaneImageHIDE" >
                    <li style="padding-left: 15px;">
                        <label for="source">Select Source:</label>
                        <select size="1" id="source" style="position:relative;width: 220px;" onchange="source_onchange()">
                            <option value = ""></option>    
                        </select></li>
                         <li style="display:none;" id="pNoScanner">
                            <a href="javascript: void(0)" class="ShowtblLoadImage" style="font-size: 11px; background-color:#f0f0f0; position:relative" id="aNoScanner"><b>What if I don't have a scanner/webcam connected?</b>
                        </a></li>
                        <li id="divProductDetail"></li>
                    <li style="text-align:center;">
                        <input id="btnScan" class="bigbutton" style="color:#C0C0C0;" disabled="disabled" type="button" value="Scan" onclick ="acquireImage();"/></li>
                </ul>
            </div>
        </li>  
        <li>
        <div class="divType"><div class="mark_arrow collapsed"></div>Load the Sample Images</div>
        <div id="div_SampleImage" style="display: none" class="divTableStyle">
            <ul>
                <li><b>Samples:</b></li>
                <li style="text-align: center;">
                    <table style="border-spacing: 2px; width: 100%;">
                        <tr>
                             <td style="width: 33%">
                                <input name="SampleImage3" type="image" src="Images/icon_associate3.png" style="width: 50px;
                                    height: 50px" onclick="loadSampleImage(3);" onmouseover="Over_Out_DemoImage(this,'Images/icon_associate3.png');"
                                    onmouseout="Over_Out_DemoImage(this,'Images/icon_associate3.png');" />
                            </td>
                            <td style="width: 33%">
                                <input name="SampleImage2" type="image" src="Images/icon_associate2.png" style="width: 50px;
                                    height: 50px" onclick="loadSampleImage(2);" onmouseover="Over_Out_DemoImage(this,'Images/icon_associate2.png');"
                                    onmouseout="Over_Out_DemoImage(this,'Images/icon_associate2.png');" />
                            </td>
                            <td style="width: 33%">
                                <input name="SampleImage1" type="image" src="Images/icon_associate1.png" style="width: 50px;
                                    height: 50px" onclick="loadSampleImage(1);" onmouseover="Over_Out_DemoImage(this,'Images/icon_associate1.png');"
                                    onmouseout="Over_Out_DemoImage(this,'Images/icon_associate1.png');" />
                            </td>
                           
                        </tr>
                        <tr>
                            <td>
                                B&W Image
                            </td>
                            <td>
                                Grey Image
                            </td>
                             <td>
                                Color Image
                            </td>                         
                        </tr>
                    </table>                 
                </li>
            </ul>
        </div>
    </li>
    <li>
        <div class="divType"><div class="mark_arrow collapsed"></div>Load a Local Image</div>
        <div id="div_LoadLocalImage" style="display: none" class="divTableStyle">
            <ul>
                <li style="text-align: center; height:35px; padding-top:8px;">
                    <input type="button" value="Load Image" style="width: 130px; height:30px; font-size:medium;" onclick="return btnLoad_onclick()" />
                </li>
            </ul>
        </div>
    </li>
   
    </ul>

</div>

<div id="divBlank" style="height:20px">
<ul>
    <li></li>
</ul>
</div>

<div id="tblLoadImage" style="visibility:hidden;height:80px">
<ul>
    <li><b>You can:</b><a href="javascript: void(0)" style="text-decoration:none; padding-left:200px" class="ClosetblLoadImage">X</a></li>
</ul>
<div id="notformac1" style="background-color:#f0f0f0; padding:5px;">
<ul>
    <li><img alt="arrow" src="Images/arrow.gif" width="9" height="12"/><b>Install a Virtual Scanner:</b></li>
    <li style="text-align:center;"><a id="samplesource32bit" href="http://www.dynamsoft.com/demo/DWT/Sources/twainds.win32.installer.2.1.3.msi">32-bit Sample Source</a>
        <a id="samplesource64bit" style="display:none;" href="http://www.dynamsoft.com/demo/DWT/Sources/twainds.win64.installer.2.1.3.msi">64-bit Sample Source</a>
        from <a href="http://www.twain.org">TWG</a></li>
</ul>
</div>
</div>

<div id ="divEdit" class="divinput" style="position:relative">
<ul>
    <li><img alt="arrow" src="Images/arrow.gif" width="9" height="12"/><b>Edit Image</b></li>
    <li style="padding-left:9px;"><img src="Images/ShowEditor.png" title= "Show Image Editor" alt="Show Image Editor" id="btnEditor" onclick="btnShowImageEditor_onclick()"/>
    <img src="Images/RotateLeft.png" title="Rotate Left" alt="Rotate Left" id="btnRotateL"  onclick="btnRotateLeft_onclick()"/>
    <img src="Images/RotateRight.png" title="Rotate Right" alt="Rotate Right" id="btnRotateR"  onclick="btnRotateRight_onclick()"/>
    <img src="Images/Mirror.png" title="Mirror" alt="Mirror" id="btnMirror"  onclick="btnMirror_onclick()"/>
    <img src="Images/Flip.png" title="Flip" alt="Flip" id="btnFlip" onclick="btnFlip_onclick()"/>
    <img src="Images/Crop.png" title="Crop" alt="Crop" id="btnCrop" onclick="btnCrop_onclick();"/>
    <img src="Images/ChangeSize.png" title="Change Image Size" alt="Change Image Size" id="btnChangeImageSize" onclick="btnChangeImageSize_onclick();"/></li>
</ul>

</div>

<div id="divSave" class="divinput" style="position:relative">
<ul>
    <li><img alt="arrow" src="Images/arrow.gif" width="9" height="12"/><b>Save Image</b></li>
    <li style="padding-left:15px;">
        <label for="txt_fileNameforSave">File Name: <input type="text" size="20" id="txt_fileNameforSave"/></label></li>
    <li style="padding-left:12px;">
        <label for="imgTypebmp">
            <input type="radio" value="bmp" name="imgType_save" id="imgTypebmp" onclick ="rdsave_onclick();"/>BMP</label>
	    <label for="imgTypejpeg">
		    <input type="radio" value="jpg" name="imgType_save" id="imgTypejpeg" onclick ="rdsave_onclick();"/>JPEG</label>
	    <label for="imgTypetiff">
		    <input type="radio" value="tif" name="imgType_save" id="imgTypetiff" onclick ="rdTIFFsave_onclick();"/>TIFF</label>
	    <label for="imgTypepng">
		    <input type="radio" value="png" name="imgType_save" id="imgTypepng" onclick ="rdsave_onclick();"/>PNG</label>
	    <label for="imgTypepdf">
		    <input type="radio" value="pdf" name="imgType_save" id="imgTypepdf" onclick ="rdPDFsave_onclick();"/>PDF</label></li>
    <li style="padding-left:12px;">
        <label for="MultiPageTIFF_save"><input type="checkbox" id="MultiPageTIFF_save"/>Multi-Page TIFF</label>
        <label for="MultiPagePDF_save"><input type="checkbox" id="MultiPagePDF_save"/>Multi-Page PDF </label></li>
    <li style="text-align: center">
        <input id="btnSave" type="button" value="Save Image" onclick ="btnSave_onclick()"/></li>
</ul>
</div>

<div id="divUpload" class="divinput" style="position:relative">

<ul>
    <li><img alt="arrow" src="Images/arrow.gif" width="9" height="12"/><b>Upload Image</b></li>
    <li style="padding-left:9px;">
        <label for="txt_fileName">File Name: <input type="text" size="20" id="txt_fileName" /></label></li>
    <li style="padding-left:9px;">
	    <label for="imgTypejpeg2">
		    <input type="radio" value="jpg" name="ImageType" id="imgTypejpeg2" onclick ="rd_onclick();"/>JPEG</label>
	    <label for="imgTypetiff2">
		    <input type="radio" value="tif" name="ImageType" id="imgTypetiff2" onclick ="rdTIFF_onclick();"/>TIFF</label>
	    <label for="imgTypepng2">
		    <input type="radio" value="png" name="ImageType" id="imgTypepng2" onclick ="rd_onclick();"/>PNG</label>
	    <label for="imgTypepdf2">
		    <input type="radio" value="pdf" name="ImageType" id="imgTypepdf2" onclick ="rdPDF_onclick();"/>PDF</label></li>
    <li style="padding-left:9px;">
        <label for="MultiPageTIFF"><input type="checkbox" id="MultiPageTIFF"/>Multi-Page TIFF</label>
        <label for="MultiPagePDF"><input type="checkbox" id="MultiPagePDF"/>Multi-Page PDF </label></li>
    <li style="text-align: center">
        <input id="btnUpload" type="button" value="Upload Image" onclick ="btnUpload_onclick()"/></li>


<!-- ***************************  Amazon S3 *************************** -->

<?php
$bucket = "";
$accesskey = ""; 
$secret = ""; 

$policy = json_encode(array(
	'expiration' => '2018-08-06T12:00:00.000Z',
	'conditions' => array(
		array(
			'bucket' => $bucket
		),
		array(
			'starts-with',
			'$key',
			'Events/'
		),
		array(
			'acl' => 'public-read'
		)
	)
));
$base64Policy = base64_encode($policy);
$signature = base64_encode(hash_hmac("sha1", $base64Policy, $secret, $raw_output = true));
?>

    <input type="hidden" name="AWSAccessKeyId" value="<?php echo $accesskey; ?>">
    <input type="hidden" name="policy" value="<?php echo $base64Policy; ?>">
    <input type="hidden" name="signature" value="<?php echo $signature; ?>">

    <li style="text-align: center">
        <input id="btnUploadS3" type="button" value="Upload Image To S3" onclick ="btnUploadS3_onclick()"/></li>

<!-- ***************************  Amazon S3 *************************** -->

</ul>
</div>

<div id="divUpgrade">
</div>

</div>

</div>

 <div class="DWTTail">
    <script src="Scripts/DWT_PageTail.js"></script>
</div>



</div>

<div id="ImgSizeEditor" style="visibility:hidden; text-align:left;">	
<ul>
    <li><label for="img_height"><b>New Height :</b>
        <input type="text" id="img_height" style="width:50%;" size="10"/>pixel</label></li>
    <li><label for="img_width"><b>New Width :</b>&nbsp;
        <input type="text" id="img_width" style="width:50%;" size="10"/>pixel</label></li>
    <li>Interpolation method:
        <select size="1" id="InterpolationMethod"><option value = ""></option></select></li>
    <li style="text-align:center;">
        <input type="button" value="   OK   " id="btnChangeImageSizeOK" onclick ="btnChangeImageSizeOK_onclick();"/>
        <input type="button" value=" Cancel " id="btnCancelChange" onclick ="btnCancelChange_onclick();"/></li>
</ul>
</div>
<div id="Crop" style="visibility:hidden ;">	
<div style="width:50%; height:100%; float:left; text-align:left;">
<ul>
    <li><label for="img_left"><b>left: </b>
        <input type="text" id="img_left" style="width:50%;" size="4"/></label></li>
    <li><label for="img_top"><b>top: </b>
        <input type="text" id="img_top" style="width:50%;" size="4"/></label></li>
    <li style="text-align:center;">
        <input type="button" value="  OK  " id="btnCropOK" onclick ="btnCropOK_onclick()"/></li>
</ul>
</div>
<div style="width:50%; height:100%; float:left; text-align:right;">
<ul>
    <li><label for="img_right"><b>right : </b>
        <input type="text" id="img_right" style="width:50%;" size="4"/></label></li>
    <li><label for="img_bottom"><b>bottom:</b>
        <input type="text" id="img_bottom" style="width:50%;" size="4"/></label></li>
    <li style=" text-align:center;">
        <input type="button" value="Cancel" id="cancelcrop" onclick ="btnCropCancel_onclick()"/></li>
</ul>
</div>
</div>
<script type="text/javascript" language="javascript" src="Scripts/dynamsoft.webtwain.initiate.js"></script>
<script type="text/javascript" language="javascript" src="Scripts/online_demo_operation.js"></script>
<script type="text/javascript" language="javascript" src="Scripts/online_demo_initpage.js"></script>
<script type="text/javascript" language="javascript" src="Scripts/jquery.js"></script>
<script type="text/javascript">
    $("ul.PCollapse li>div").click(function() {
        if ($(this).next().css("display") == "none") {
            $(".divType").next().hide("normal");
            $(".divType").children(".mark_arrow").removeClass("expanded");
            $(".divType").children(".mark_arrow").addClass("collapsed");
            $(this).next().show("normal");
            $(this).children(".mark_arrow").removeClass("collapsed");
            $(this).children(".mark_arrow").addClass("expanded");
        }
    });
</script>
<script type="text/javascript" language="javascript">
    // Assign the page onload fucntion.

    S.ready(function() {
        pageonload();
    });

</script>
</body>
</html>

