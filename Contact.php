<?php include 'includes/header.php'; ?>

<h1 class="d-flex justify-content-center mt-4">
    &#x1F600; WHERE TO FIND US...&#x1F600;
</h1>      
<div class="container-fluid d-flex justify-content-center mt-4">
    <div class="row ">
        <div class="col-md-2">
        <a class="contact" href="https://www.linkedin.com/in/arjeta-allamani-861594194/"><i class="bi bi-linkedin"></i></a>
        </div>
        <div class="col-md-2">
        <a class="contact" href="https://github.com/arjeta97"> <i class="bi bi-github"></i> </a>
        </div>
        <div class="col-md-2">
        <a class="contact" href="https://letterboxd.com/arjeta/"><i class="bi bi-mailbox"></i></a>
        </div>
        <div class="col-md-2">
        <a class="contact" href="https://www.facebook.com/arjeta.allamani.5/"><i class="bi bi-facebook"></i></a>
        </div>
        <div class="col-md-2">
        <a class="contact" href="https://www.instagram.com/arjet._.a/"><i class="bi bi-instagram"></i></a> 
        </div>
    </div>
</div>
    <style>
         a{
          text-decoration:none ;
          color:rgb(253, 194, 54);
        }
    </style>


     <form>

         <div class="d-flex justify-content-center m-4">
            <label>DROP A MESSAGE IF YOU FEELING FRIENDLY &#128515;</label>
         </div>
         <div class="d-flex justify-content-center m-4">
          <input type="email" placeholder="Write your email">   
         </div>
         <div class="d-flex justify-content-center m-4">
            <textarea placeholder="Write your message" name="message" id="message" cols="50" rows="10"></textarea>
         </div>

    </form>
    <style>
        input{
            background-color: transparent;
            border-bottom: 2px solid rgb(253, 194, 54);
            color:rgb(253, 194, 54);
            border-top: none;
            border-left: none;
            border-right: none;
        }
        textarea{
            background-color: transparent;
            border: 2px solid rgb(253, 194, 54);
            color:rgb(253, 194, 54);
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-outline-warning justify-center">Sent message</button>
            </div>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>
</body>
</html>