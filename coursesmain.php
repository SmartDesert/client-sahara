<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SAHARA</title>
	<link rel="stylesheet" type="text/css" href="css/courses.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/xss" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
    $("#myBtn").click(function(){
    $("#myModal").modal({backdrop: "static"});
      });
  });
  </script>
  <?php
                        include_once('coursesedit.php');
                        $query="select * from courses where id='0'";
                        $result=mysqli_query($con,$query);
                         
                        ?>
</head>

<body>
 <div class="abcd">
  <section>
  
  <div class="container">
    <a href="index.html">
                <span class="left"></span>
            </a>  
      
       <div class="row">
                    <div class="col-xl-12 text-center mb-4">
                        <div class="courses-title">
                            <p style="color: #008080; font-size: 4.3em; margin-top: 0px;">Courses we provide</p>
                        
                        </div>

                    </div>

        </div>

      
  <main class="grid">
    
    <article>
      <img src="https://picsum.photos/600/400?image=1083" alt="Sample photo">
      <div class="text">
        <h2 style="color: orange;">HTML AND CSS</h2>
        <p style="color: #7F171F; font-size: 1.3em;">Collaboratively administrate empowered markets via plug-and-play networks.</p>
        
        <div class="container">
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-outline-primary" id="myBtn" data-toggle="modal" data-target="#myModal">
    Read More
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 750px; margin:auto;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="color: gray;">Outcome of the course</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <ul class="list" style="color: #FC766AFF; text-align: justify;">
            
             <?php
                            while($rows=mysqli_fetch_assoc($result))
                            {
                              ?>
                              <tr>
                                
                                <td><?php echo $rows['des']; ?></td>
                              </tr>
                              <?php
                            }
                            ?>
           
          </ul>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-bottom: -42px;">Close</button>
          <button class="btn btn-success" style="margin-right: 600px; color: white;"><a href="contact.html" style="color: #FFFFFF;
          ">Enquire Us</a></button>
        </div> 
      </div>
    </div>
  </div>
  
        </div>
        </div>
    </article>


    <article>
      <img src="https://picsum.photos/600/400?image=1063" alt="Sample photo">
      <div class="text">
        <h2 style="color: orange;">Completely Synergize</h2>
        <p style="color: #7F171F; font-size: 1.3em;">Dramatically engage seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing.</p>
        <div class="container">
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-outline-primary" id="myBtn" data-toggle="modal" data-target="#myModal">
    Read More
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="color: gray;">Outcome of the course</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="color: #FC766AFF;">
        <ul class="list" style="color: #FC766AFF; text-align: justify;">
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-bottom: -42px;">Close</button>
          <button type="button" class="btn btn-success" style="margin-right: 600px;">Enquire Us</button>
        </div> 
      </div>
    </div>
  </div>
  
        </div>
      </div>
    </article>


    <article>
      <img src="https://picsum.photos/600/400?image=1056" alt="Sample photo">
      <div class="text">
        <h2 style="color: orange;">Dynamically Procrastinate</h2>
        <p style="color: #7F171F; font-size: 1.3em;">Completely synergize resource taxing relationships via premier niche markets.</p>
        <div class="container">
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-outline-primary" id="myBtn" data-toggle="modal" data-target="#myModal">
    Read More
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 750px; margin:auto;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="color: gray;">Outcome of the course</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="color: #FC766AFF;">
          <ul class="list" style="color: #FC766AFF; text-align: justify;">
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-bottom: -42px;">Close</button>
          <button type="button" class="btn btn-success" style="margin-right: 600px;">Enquire Us</button>
        </div> 
      </div>
    </div>
  </div>
  
        </div>
      </div>
    </article>


    <article>
      <img src="https://picsum.photos/600/400?image=1050" alt="Sample photo">
      <div class="text">
        <h2 style="color: orange;">Best in class</h2>
        <p style="color: #7F171F; font-size: 1.3em;">Imagine jumping into that boat, and just letting it sail wherever the wind takes you...</p>
        <div class="container">
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-outline-primary" id="myBtn" data-toggle="modal" data-target="#myModal">
    Read More
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 750px; margin:auto;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="color: gray;">Outcome of the course</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="color: #FC766AFF;">
          <ul class="list" style="color: #FC766AFF; text-align: justify;">
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-bottom: -42px;">Close</button>
          <button type="button" class="btn btn-success" style="margin-right: 600px;">Enquire Us</button>
        </div> 
      </div>
    </div>
  </div>
  
        </div>
      </div>
    </article>


    <article>
      <img src="https://picsum.photos/600/400?image=1041" alt="Sample photo">
      <div class="text">
        <h2 style="color: orange;">Dynamically innovate supply chains</h2>
        <p style="color: #7F171F; font-size: 1.3em;">Holisticly predominate extensible testing procedures for reliable supply chains.</p>
        <div class="container">
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-outline-primary" id="myBtn" data-toggle="modal" data-target="#myModal">
    Read More
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 750px; margin:auto;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="color: gray;">Outcome of the course</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="color: #FC766AFF;">
          <ul class="list" style="color: #FC766AFF; text-align: justify;">
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-bottom: -42px;">Close</button>
          <button type="button" class="btn btn-success" style="margin-right: 600px;">Enquire Us</button>
        </div> 
      </div>
    </div>
  </div>
  
        </div>
      </div>
    </article>


    <article>
      <img src="https://picsum.photos/600/400?image=1015" alt="Sample photo">
      <div class="text">
        <h2 style="color: orange;">Sanity check</h2>
        <p style="color: #7F171F; font-size: 1.3em;">Objectively innovate empowered manufactured products whereas parallel platforms.</p>
        <div class="container">
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-outline-primary" id="myBtn" data-toggle="modal" data-target="#myModal">
    Read More
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 750px; margin:auto;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="color: gray;">Outcome of the course</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="color: #FC766AFF;">
          <ul class="list" style="color: #FC766AFF; text-align: justify;">
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-bottom: -42px;">Close</button>
          <button type="button" class="btn btn-success" style="margin-right: 600px;">Enquire Us</button>
        </div> 
      </div>
    </div>
  </div>
  
        </div>
      </div>
    </article>
  </main>
</div>
</section>

    <div class="button-1">
    <center><button class="pull-right btn button"><a style="color:black;" href="index.html">Back to Home</a></button></center>
    </div>  
</div>
</body>
</html>
