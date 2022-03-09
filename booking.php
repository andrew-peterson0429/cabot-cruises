<?php $ptitle= 'Booking Page'; include '_header.php'; ?>


        <h1>Book a Cruise</h1>

        <form method="get" action="thanks.html">
            <fieldset>
                <legend>Customer Information</legend>
                <label class="top">Full Name<input type="text" name="fname" required></label>
                <label class="top">Address Line<input type="text" name="address" placeholder="1235556789" required></label>
                <label class="top">City<input type="text" name="city" placeholder="someone@gmail.com"></label>
                <label class="top">State
                    <select name="state">
                        <option value="">Please Select &#9662;</option>
                        <option value="red">Red</option>
                        <option value="blue">Blue</option>
                        <option value="green">Green</option>
                        <option value="yellow">Yellow</option>
                        <option value="purple">Purple</option>
                        <option value="pink">Pink</option>
                    </select>
                </label>
                <label class="top">Zipcode<input type="text" name="fname" required></label>
                <label class="top">Phone Number<input type="text" name="phone" placeholder="1235556789" required></label>
                <label class="top">Email Address<input type="text" name="email" required></label>
                <label class="top">Cruise Selection
                    <select name="cruise">
                        <option value="">Please Select &#9662;</option>
                        <option value="red">Red</option>
                        <option value="blue">Blue</option>
                        <option value="green">Green</option>
                        <option value="yellow">Yellow</option>
                        <option value="purple">Purple</option>
                        <option value="pink">Pink</option>
                    </select>
                </label>
            </fieldset>
    
            <input class="submitBtn" type="submit" value="Book My Cruise">
        </form>
    

        <?php include '_footer.php'; ?>