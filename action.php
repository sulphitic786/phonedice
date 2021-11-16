<?php
            if (isset($_POST["action"])) {
               if ($_POST["action"] =="fetch") {
                 $folder = array_filter(glob('*'), 'is_dir');
              $output = '
                 <table class="table">
              <thead>
                <tr>
                  <th scope="col">Category Name</th>
                  <th scope="col">Total Files</th>
                  <th scope="col">Update</th>
                  <th scope="col">View Files</th>
                </tr>
              </thead>
              ';
                 if (count($folder) > 0) 
                 {
                   foreach ($folder as $name => $value) 
                   {
    $output .= '
    <tbody>
    <tr>
      <th scope="row">'.$name.'</th>
      <td>' .(count(scandir($name)) - 2). '</td>
      <td><button type="button" name="update" data-name="'.$name.'" class="btn btn-warning">Update</button></td>
      <td><button type="button" name="update" data-name="'.$name.'" class="btn btn-danger">Delete</button></td>
      <td><button type="button" name="upload" data-name="'.$name.'" class="btn btn-success">Upload</button></td>
      <td><button type="button" name="view" data-name="'.$name.'" class="btn btn-info">View Files</button></td>
    </tr>
    

     ';
                     
           }

                 }
                 else{
                 $output .='
                  <tr class="text-danger"><th>No Categories You Have</th></tr> ';
                 }
                 $output .= '</tboday></table>';
                 echo $output;
               }

              if($_POST["actio"] == "create")
              {
                if(!file_exists($_POST["folder_name"]))
                {
                  mkdir($_POST["folder_name"], 0777, true);
                  echo 'Category Created';
                }
                else
                  {
                    echo 'Category Already Created';
                  }
              }
            }

           ?>