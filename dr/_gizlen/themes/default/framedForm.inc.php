<style type="text/css">
   /* Make room for the mini-form */
   html body { margin-top: 60px; }
   
   /* Reset all styles */
   #include * {
      text-align: left;
      border: 0; padding: 0; margin: 0;
      font: 12px Verdana,Arial,Tahoma;
      color: #eee;
      font-weight: normal;
      background: transparent;
      text-decoration: none;
      display: inline;
   }
   #include p {
      margin: 4px 0 0 10px;
      display: block;
   }
   #include b {
      font-weight: bold;
   }
   #include script {
      display:none;
   }
   
   /* Style the mini-form div */
   #include {
      border-top: 3px solid #ce6c1c;
      border-bottom: 3px solid #ce6c1c;
      background: #0b1933;
      position: absolute;
      top:0; left:0;
      width: 100%;
      height: 50px;
      z-index: 100000;
   }
   
   /* Mini-form elements */
   #include a {
      color: #ce6c1c;
   }
   #include a:hover {
      color: #ccc;
   }
   #include .url-input {
      padding: 2px;
      background: #eee;
      color: #111;
      border: 1px solid #ccc;
   }
   #include .url-input:focus {
      background: #fff;
      border: 1px solid #ce6c1c;
   }
   #include .url-button {
      font-weight: bold;
      border-style: outset;
      font-size: 11px;
      line-height: 10px;
   }
</style>
<div id="include">
<?php
// Print form using variables (saves repeatedly opening/closing PHP tags)
// Edit as if normal HTML but escape any dollar signs
echo <<<OUT
   <form action="{$proxy}/includes/process.php?action=update" target="_top" method="post" onsubmit="return updateLocation(this);">

      <p>
         
         <b>Website Adresi:</b>
         <input type="text" name="u" size="40" value="{$url}" class="url-input" style="width:50%;" />
         <input type="submit" value="Git" class="url-input url-button" />
         
         [<a href="{$proxy}/index.php" target="_top">Anasayfa</a>]
         [<a href="{$proxy}/includes/process.php?action=clear-cookies&return={$return}" target="_top">Kayitlari Sil</a>]
         
      </p>

      <p>
         <b>Ayarlar:</b>
OUT;

// Loop through the options and print with appropriate checkedness
foreach($toShow as $details) { 
   echo <<<OUT
         <input type="checkbox" name="{$details['name']}" id="{$details['name']}"{$details['checked']} />
         <label for="{$details['name']}">{$details['title']}</label>

OUT;
}
?>  
<script type="text/javascript"><!--
google_ad_client = "ca-pub-6963315907881230";
/* 468x15, oluşturulma 08.06.2010 */
google_ad_slot = "0682146717";
google_ad_width = 468;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>      
      </p>
      
   </form>

</div>

<!--[proxified]-->