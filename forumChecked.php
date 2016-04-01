				<div class="top_column">
                    <!-- display a bar with topic title -->
                    <div class="title_bar">
                        <h3>Welcome to the forum!</h3>
                    </div>
                    <div class="content">
                      <table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                      <tr>
                      <td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
                      <td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
                      <td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
                      </tr>

                      <?php
                      while($rows=mysql_fetch_array($result)){ // Start looping table row
                      ?>

                      <tr>
                      <td align="center" bgcolor="#FFFFFF"><?php echo $rows["id"]; ?></td>
                      <td align="center" bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
                      <td align="center" align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
                      </tr>

                      <?php
                      // Exit looping and close connection
                      }
                      mysql_close();
                      ?>
                      <tr>
                      <td colspan="5" align="right" bgcolor="#E6E6E6"><a href="add_topic_form.php"><strong>Create New Topic</strong> </a></td>
                      </tr>
                      </table>
                    </div> <!-- end of class content_box -->
                </div> <!-- end of class row_top -->