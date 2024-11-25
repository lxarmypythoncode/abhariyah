<?php include 'header.php'; ?>
<section id="kontak">
    <h2>Kontak Kami</h2>
    <form action="contact_form_handler.php" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Pesan:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Kirim</button>
    </form>
</section>
<?php include 'footer.php'; ?>
