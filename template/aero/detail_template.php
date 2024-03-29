<?php
// biblio/record detail
// output the buffer
ob_start(); /* <- DONT REMOVE THIS COMMAND */
?>
     <script type="text/javascript" src="js/jquery.js"></script>
     <?php include ('menu.inc.php') ?>
     <div id="detile-content">
      <div class="cover">{image}
       <div id="detail-xml">
        <a target="_blank" href="index.php?p=show_detail&inXML=true&id=<?php echo $_GET['id'];?>" >X M L</a>
       </div>
      </div>
     <div id="detail-book">
     <div class="section-detail">
      <div class="tagline">
       Book's Detail
      </div>
      <div class="collections-list-detile">
       <div class="collection-detail">
        <table id="review" width="100%">
         <tr>
          <th colspan="2" class="titledetile">
          {title}
          </th>
         </tr>
         <tr>
          <td class="abstract" colspan="2">
          <p><i>&nbsp;&nbsp;&nbsp;{notes}</i></p>
          </td>
         </tr>
         <tr>
          <td class="key"><?php print __('Author(s)'); ?></td>
          <td class="value">{authors}</td>
         </tr>
         <tr>
          <td class="key"><?php print __('Edition'); ?></td>
          <td class="value">{edition}</td>
         </tr>
         <tr>
          <td class="key"><?php print __('Call Number'); ?></td>
          <td class="value">{call_number}</td>
         </tr>
         <tr class="isbn">
          <td class="key"><?php print __('ISBN/ISSN'); ?></td>
          <td class="value">{isbn_issn}</td>
         </tr>
         <tr>
          <td class="key"><?php print __('Subject(s)'); ?></td>
          <td class="value">{subjects}</td>
         </tr>
         <tr>
          <td class="key"><?php print __('Classification'); ?></td>
          <td class="value">{classification}</td>
         </tr>
         <tr>
          <td class="key"><?php print __('Series Title'); ?></td>
          <td class="value">{series_title}</td>
         </tr>
         <tr>
          <td class="key"><?php print __('GMD'); ?></td>
          <td class="value">{gmd_name}</td>
         </tr>
         <tr>
          <td class="key"><?php print __('Language'); ?></td>
          <td class="value">{language_name}</td>
         </tr>
         <tr>
          <td class="key"><?php print __('Publisher'); ?></td>
          <td class="value">{publisher_name}</td>
         </tr>
         <tr>
          <td class="key"><?php print __('Publishing Year'); ?></td>
          <td class="value">{publish_year}</td>
         </tr>
         <tr>
          <td class="key"><?php print __('Publishing Place'); ?></td>
          <td class="value">{publish_place}</td>
         </tr>
         <tr>
          <td class="key"><?php print __('Collation'); ?></td>
          <td class="value">{collation}</td>
         </tr>
         <tr>
          <td class="key"><?php print __('Specific Detail Info'); ?></td>
          <td class="value">{spec_detail_info}</td>
         </tr>
         <tr>
          <td class="key"><?php print __('File Attachment'); ?></td>
          <td class="value">{file_att}</td>
         </tr>
         <tr>
          <td class="key"><?php print __('Availability'); ?></td>
          <td class="value">{availability}</td>
         </tr>
       </table>
       </div>
       <div class="clear">&nbsp;</div>
      </div>
     </div>
     </div>
     </div>
<?php
// put the buffer to template var
$detail_template = ob_get_clean();
