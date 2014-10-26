<div class="modal fade hide" id="contact-form">
  <div class="modal-header">
    <p class="lead pull-left">Send A Message</p>
    <button class="close" data-dismiss="modal">&times;</button>&nbsp;

  </div>
  <div class="modal-body">
   <form id="contact-form" method="post">

        <div class="roooow">
            <div class="pan3"><label for="name">Enter your name:</label>
            <input type="text" name="name" value="" title="please enter your name here" placeholder="Name" class="user-name default-text"></div>
            <div class="pan3"><label for="email">Your Email:</label>
            <input type="text" name="email" value="" title="your email here!" placeholder="Email" class="user-email default-text"></div>
        </div>

        <label for="user-message">Enter Message:</label>
        <textarea name="user-message" cols="" rows="15" class="default-text span6"></textarea>
  </div>

  <div class="modal-footer">
    <input type="submit" value="Send my Message!" name="submit" class= "btn btn-success pull-right">
    </form>
  </div>

</div>

<script>
    var script = document.createElement('script'); 
    script.type = 'text/javascript'; 
    script.src = '/js/contact.js';
    document.body.append(script);
</script>

<!--  -->