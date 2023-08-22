<!DOCTYPE html>
<html>
<head>
    <title>Personal Site Detail Form</title>
</head>
<body>
    <form action="{{ route('personal_site_detail.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Site Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="about">About:</label><br>
        <textarea id="about" name="about"></textarea><br>

        <label for="photo">Photo:</label><br>
        <input type="file" id="photo" name="photo"><br>

        <label for="cover_photo">Cover Photo:</label><br>
        <input type="file" id="cover_photo" name="cover_photo"><br>

        <label for="facebook_link">Facebook Link:</label><br>
        <input type="text" id="facebook_link" name="facebook_link"><br>

        <label for="instagram_link">Instagram Link:</label><br>
        <input type="text" id="instagram_link" name="instagram_link"><br>

        <label for="twitter_link">Twitter Link:</label><br>
        <input type="text" id="twitter_link" name="twitter_link"><br>

        <label for="youtube_link">Youtube Link:</label><br>
        <input type="text" id="youtube_link" name="youtube_link"><br>

        <label for="customer_testimonial">Customer Testimonial:</label><br>
        <textarea id="customer_testimonial" name="customer_testimonial"></textarea><br>

        <label for="customer_testimonial_photo">Customer Testimonial Photo:</label><br>
        <input type="file" id="customer_testimonial_photo" name="customer_testimonial_photo"><br>

        <label for="customer_testimonial_name">Customer Testimonial Name:</label><br>
        <input type="text" id="customer_testimonial_name" name="customer_testimonial_name"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

