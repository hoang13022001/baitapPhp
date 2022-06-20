<?php  
include "includes/database.php";
include "includes/categories.php";

$database = new database();
$db = $database->connect();
$contact = new contact ($db);

if($_SERVER['REQUEST_METHOD']=='POST'){

    // Create category
    if($_POST['form_name']=='add_contact'){
        $fullname= $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message= $_POST['message '];
        $id = $_POST['contact_id'];

        // Bind Params
        $contact->n_contact_id = $id;
        $contact->v_fullname = $id;
        $contact->v_email = $id;
        $contact->v_phone = $id;
        $contact->v_message = $id;
        $contact->d_date_created = date("Y/m/d",time());
        $contact->d_time_created = date("h:i:s",time());
        if($contact->update()){
            $flag = "Edit contact successful!";

        }
        
    }

    // Update category
    if($_POST['form_name']=='edit_contact'){
        $fullname= $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message= $_POST['message '];
        $id = $_POST['contact_id'];

        // Bind Params
        $contact->n_contact_id = $id;
        $contact->v_fullname = $id;
        $contact->v_email = $id;
        $contact->v_phone = $id;
        $contact->v_message = $id;
        $contact->d_date_created = date("Y/m/d",time());
        $contact->d_time_created = date("h:i:s",time());
        if($contact->update()){
            $flag = "Edit contact successful!";
        }
        
    }

    // Delete category
    if($_POST['form_name']=='delete_contact'){
        $id = $_POST['contact_id'];

        // Bind Params
        $contact->n_contact_id = $id;
        if($contact->delete()){
            $flag = "Delete contact successful!";
        }
        
        
    }


}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vinhs blog</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <?php  
            include "header.php";
        ?>
        <!--/. NAV TOP  -->
        <?php  
            include "sidebar.php";
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Blog Contact
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <?php 
                    if(isset($flag)){

                ?>
                    <div class="alert alert-success">
                        <strong><?php echo $flag ?></strong>
                    </div>                        
                <?php 
                    }
                ?>

<section class="s-content">

<div class="row">
    <div class="column large-12">

        <article class="s-content__entry">

            <div class="s-content__media">
                <img src="images/thumbs/contact/contact-1050.jpg" 
                        srcset="images/thumbs/contact/contact-2100.jpg 2100w, 
                                images/thumbs/contact/contact-1050.jpg 1050w, 
                                images/thumbs/contact/contact-525.jpg 525w" sizes="(max-width: 2100px) 100vw, 2100px" alt="">
            </div> <!-- end s-content__media -->

            <div class="s-content__entry-header">
                <h1 class="s-content__title">Get In Touch With Us.</h1>
            </div> <!-- end s-content__entry-header -->

            <div class="s-content__primary">

                <div class="s-content__page-content">

                    <p class="lead">
                    Lorem ipsum Deserunt est dolore Ut Excepteur nulla occaecat magna occaecat Excepteur nisi esse veniam 
                    dolor consectetur minim qui nisi esse deserunt commodo ea enim ullamco non voluptate consectetur minim 
                    aliquip Ut incididunt amet ut cupidatat.
                    </p> 

                    <p>
                    Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit 
                    nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam 
                    dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum 
                    sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco 
                    ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat 
                    occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                    </p>

                    <br>

                    <div class="row block-large-1-2 block-tab-full s-content__blocks">
                        <div class="column">
                            <h4>Where to Find Us</h4>
                            <p>
                            1600 Amphitheatre Parkway<br>
                            Mountain View, CA<br>
                            94043 US
                            </p>
                        </div>

                        <div class="column">
                            <h4>Contact Info</h4>
                            <p>
                            someone@yourdomain.com<br>
                            info@yourdomain.com <br>
                            Phone: (+63) 555 1212
                            </p> 
                        </div>
                    </div> <!-- end s-content__blocks -->

                    <form name="cForm" id="cForm" class="s-content__form" method="post" action="">
                        <fieldset>

                            <div class="form-field">
                                <input name="cName" type="text" id="cName" class="h-full-width h-remove-bottom" placeholder="Your Name" value="" >
                            </div>

                            <div class="form-field">
                                <input name="cEmail" type="text" id="cEmail" class="h-full-width h-remove-bottom" placeholder="Your Email" value="">
                            </div>

                            <div class="form-field">
                                <input name="cWebsite" type="text" id="cWebsite" class="h-full-width h-remove-bottom" placeholder="Website"  value="">
                            </div>

                            <div class="message form-field">
                                <textarea name="cMessage" id="cMessage" class="h-full-width" placeholder="Your Message" ></textarea>
                            </div>

                            
                            <button type="submit" class="submit btn btn--primary h-full-width">Submit</button>

                        </fieldset>
                    </form>
                    <br> <!-- end form -->

                </div> <!-- end s-entry__page-content -->

            </div> <!-- end s-content__primary -->
        </article> <!-- end entry -->

    </div> <!-- end column -->
</div> <!-- end row -->

</section>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                All Contact
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Meta Title</th>
                                                <th>Path</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>                                        
                                        <tbody>
                                            <?php  
                                            $result = $contact->read();
                                            $num = $result->rowCount();
                                            if($num>0){
                                                while($rows = $result->fetch()){                             
                                            ?>
                                            <tr>
                                                <td><?php echo $rows['n_contact_id'] ?></td>
                                                <td><?php echo $rows['v_fullname'] ?></td>
                                                <td><?php echo $rows['v_email'] ?></td>
                                                <td><?php echo $rows['v_phone'] ?></td>
                                                <td><?php echo $rows['v_message'] ?></td>

                                                <td>
                                                <button class="popup-button">View</button>
                                                <button data-toggle="modal" data-toggle="modal" data-target="#edit_contact<?php echo $rows['n_contact_id']?>">Edit</button>
                                                <button data-toggle="modal" data-toggle="modal" data-target="#delete_contact<?php echo $rows['n_contact_id']?>">Delete</button>

                                                <div class="modal fade" id="edit_contact<?php echo $rows['n_contact_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="myModalLabel">Edit Contact</h4>
                                                            </div>
                                                            <form role="form" name="frm_edit" method="POST" action="">
                                                            <div class="modal-body">                                                           
                                       
                                                                    <div class="form-group">
                                                                        <label>Category Title</label>
                                                                        <input name="v_fullname" class="form-control" placeholder="Enter category" value="<?php echo $rows['v_fullname'] ?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Category Meta Title</label>
                                                                        <input name="v_email" class="form-control" placeholder="Enter meta category" value="<?php echo $rows['v_email'] ?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Category Path</label>
                                                                        <input name="v_phone" class="form-control" placeholder="Enter path category" value="<?php echo $rows['v_phone'] ?>">
                                                                    </div>        
                                                                    
                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="hidden" name="form_name" value="edit_contact">
                                                                <input type="hidden" name="contact_id" value="<?php echo $rows['contact_id'] ?>">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save changes</button>                                                                
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="delete_contact<?php echo $rows['n_contact_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <form method="POST" action="">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="myModalLabel">Delete Category</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure that you want to delete this category?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="hidden" name="form_name" value="delete_contact">
                                                                <input type="hidden" name="contact_id" value="<?php echo $rows['n_contact_id']; ?>">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Delete</button>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr> 
                                            <?php  
                                                }        
                                            }
                                            ?>                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel -->
                    </div>
                </div>
                <!-- /. ROW  -->
                
				<footer><p>&copy;2022</p></footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>