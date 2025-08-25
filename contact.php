<?php include 'header.php'; ?>
<section class="page">
  <h1>Contact Us</h1>
  <form action="contact_process.php" method="POST" class="contact-form">
    <label>Name:</label>
    <input type="text" name="name" required>
    
    <label>Email:</label>
    <input type="email" name="email" required>
    
    <label>Message:</label>
    <textarea name="message" rows="5" required></textarea>
    
    <button type="submit">Send Message</button>
  </form>
</section>
<?php include 'footer.php'; ?>
