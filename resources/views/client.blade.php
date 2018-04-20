<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client</title>
    <link rel="stylesheet" href="/css/main.css">
    <script src="{{ asset('js/validate.js') }}" type="text/javascript"></script>
</head>
<body>
    <form action="storeUserDetails" method="post">
        <div class="heading" id="div_one">Step 1: Your details</div>
        <div class="content" id="details_one">
            <div class="element_container">
                <label for="firstName">First Name</label>
                <input type="text" name="fname" id="firstName" required>
            </div>
            <div class="element_container">
                <label for="lastName">Surname</label>
                <input type="text" name="lname" id="lastName" required>
            </div>
            <label for="emailAdd">Email Address</label>
            <input type="email" name="email" id="emailAdd" required>
            <div class="next" id="d1_next">Next ></div>
        </div>
        <div class="heading" id="div_two">Step 2: More comments</div>
        <div class="content" id="details_two">
            <div class="element_container">
                <label for="mobileNo">Mobile:</label>
                <input type="tel" name="mobile" id="mobileNo" required>
            </div>
            <div class="element_container">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" required>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
            <label for="dob">Date of Birth:</label>
            <input type="text" name="dob" id="dob" placeholder="DD/MM/YYYY" required>
            <div class="next" id="d2_next">Next ></div>
        </div>
        <div class="heading" id="div_three">Step 3: Final comments</div>
        <div class="content" id="details_three">
            <div class="element_container">
                <label for="comments">Additional Comments:</label><br>
                <textarea name="comments" id="commentsID" cols="30" rows="8" required></textarea>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</body>
</html>