@extends('index.layouts.app')
@section('content')
    


<style>
    .login-register-address-container {
        grid-area: main;
    }
</style>


<div class="container-row">
    <div class="login-register-address-container">

        <!-- breadcrumb start -->
        <div class="breadcrumb">
            <a href="">Home</a>
            <i class="fa fa-greater-than"></i>
            <a href="">Login Register Address</a>
        </div>
        <!-- breadcrumb end -->

        <div>
            Your account details
        </div>
        <div>
            If you are already registered, please login here
        </div>
        <div class="login">
            <form action="">
                <div>
                    <input type="text" name="username" placeholder="Username">
                    <div><a href="">Forgot your username?</a></div>
                </div>
                <div>
                    <input type="password" name="password" placeholder="••••••••">
                    <div><a href="">Forgot your password?</a></div>
                </div>
                <input type="submit" value="login">
                <div>
                    <label for="">Remember me</label>
                    <input type="checkbox" name="remember_me" id="">
                </div>

            </form>
        </div>

        <hr>

        <div>
            <form action="">
                <div>Register</div>
                <div>Shopper Information</div>
                <hr>
                <div><label for="">E-Mail *</label><input type="text"></div>
                <div><label for="">Username</label><input type="text"></div>
                <div><label for="">Displayed Name</label><input type="text"></div>
                <div><label for="">Password *</label><input type="text"></div>
                <div><label for="">Confirm Password *</label><input type="text"></div>

                <div>Billing details</div>
                <hr>

                <div><label for="">Company Name</label><input type="text"></div>
                <div><label for="">Title</label>
                    <select name="title" id="">
                        <option value="">Mr</option>
                        <option value="">Mrs</option>
                        <option value="">Other</option>
                    </select>
                </div>
                <div><label for="">First Name *</label><input type="text"></div>
                <div><label for="">Middle Name</label><input type="text"></div>
                <div><label for="">Last Name *</label><input type="text"></div>
                <div><label for="">Address 1 *</label><input type="text"></div>
                <div><label for="">Zip / Postal Code *</label><input type="text"></div>
                <div>
                    <label for="">Country *</label>
                    <select name="country" id="">
                        <option>-- Select --</option>
                        <option>Afghanistan</option>
                        <option>Albania</option>
                        <option>Algeria</option>
                        <option>American Samoa</option>
                        <option>Andorra</option>
                        <option>Angola</option>
                        <option>Anguilla</option>
                        <option>Antarctica</option>
                        <option>Antigua and Barbuda</option>
                        <option>Argentina</option>
                        <option>Armenia</option>
                        <option>Aruba</option>
                        <option>Australia</option>
                        <option>Austria</option>
                        <option>Azerbaijan</option>
                        <option>Bahamas</option>
                        <option>Bahrain</option>
                        <option>Bangladesh</option>
                        <option>Barbados</option>
                        <option>Belarus</option>
                        <option>Belgium</option>
                        <option>Belize</option>
                        <option>Benin</option>
                        <option>Bermuda</option>
                        <option>Bhutan</option>
                        <option>Bolivia</option>
                        <option>Bosnia and Herzegovina</option>
                        <option>Botswana</option>
                        <option>Bouvet Island</option>
                        <option>Brazil</option>
                        <option>British Indian Ocean Territory</option>
                        <option>Brunei Darussalam</option>
                        <option>Bulgaria</option>
                        <option>Burkina Faso</option>
                        <option>Burundi</option>
                        <option>Cambodia</option>
                        <option>Cameroon</option>
                        <option>Canada</option>
                        <option>Canary Islands</option>
                        <option>Cape Verde</option>
                        <option>Cayman Islands</option>
                        <option>Central African Republic</option>
                        <option>Chad</option>
                        <option>Chile</option>
                        <option>China</option>
                        <option>Christmas Island</option>
                        <option>Cocos (Keeling) Islands</option>
                        <option>Colombia</option>
                        <option>Comoros</option>
                        <option>Congo, Republic of the</option>
                        <option>Cook Islands</option>
                        <option>Costa Rica</option>
                        <option>Côte d'Ivoire</option>
                        <option>Croatia</option>
                        <option>Cuba</option>
                        <option>Cyprus</option>
                        <option>Czech Republic</option>
                        <option>Denmark</option>
                        <option>Djibouti</option>
                        <option>Dominica</option>
                        <option>Dominican Republic</option>
                        <option>East Timor</option>
                        <option>East Timor</option>
                        <option>Ecuador</option>
                        <option>Egypt</option>
                        <option>El Salvador</option>
                        <option>Equatorial Guinea</option>
                        <option>Eritrea</option>
                        <option>Estonia</option>
                        <option>Ethiopia</option>
                        <option>Falkland Islands (Malvinas)</option>
                        <option>Faroe Islands</option>
                        <option>Fiji</option>
                        <option>Finland</option>
                        <option>France</option>
                        <option>French Guiana</option>
                        <option>French Polynesia</option>
                        <option>French Southern Territories</option>
                        <option>Gabon</option>
                        <option>Gambia</option>
                        <option>Georgia</option>
                        <option>Germany</option>
                        <option>Ghana</option>
                        <option>Gibraltar</option>
                        <option>Greece</option>
                        <option>Greenland</option>
                        <option>Grenada</option>
                        <option>Guadeloupe</option>
                        <option>Guam</option>
                        <option>Guatemala</option>
                        <option>Guinea</option>
                        <option>Guinea-Bissau</option>
                        <option>Guyana</option>
                        <option>Haiti</option>
                        <option>Heard and McDonald Islands</option>
                        <option>Honduras</option>
                        <option>Hong Kong</option>
                        <option>Hungary</option>
                        <option>Iceland</option>
                        <option>India</option>
                        <option>Indonesia</option>
                        <option>Iran, Islamic Republic of</option>
                        <option>Iraq</option>
                        <option>Ireland</option>
                        <option>Israel</option>
                        <option>Italy</option>
                        <option>Jamaica</option>
                        <option>Japan</option>
                        <option>Jersey</option>
                        <option>Jordan</option>
                        <option>Kazakhstan</option>
                        <option>Kenya</option>
                        <option>Kiribati</option>
                        <option>Korea, Democratic People's Republic of</option>
                        <option>Korea, Republic of</option>
                        <option>Kuwait</option>
                        <option>Kyrgyzstan</option>
                        <option>Lao People's Democratic Republic</option>
                        <option>Latvia</option>
                        <option>Lebanon</option>
                        <option>Lesotho</option>
                        <option>Liberia</option>
                        <option>Libya</option>
                        <option>Liechtenstein</option>
                        <option>Lithuania</option>
                        <option>Luxembourg</option>
                        <option>Macau</option>
                        <option>Macedonia, the former Yugoslav Republic of</option>
                        <option>Madagascar</option>
                        <option>Malawi</option>
                        <option>Malaysia</option>
                        <option>Maldives</option>
                        <option>Mali</option>
                        <option>Malta</option>
                        <option>Marshall Islands</option>
                        <option>Martinique</option>
                        <option>Mauritania</option>
                        <option>Mauritius</option>
                        <option>Mayotte</option>
                        <option>Mexico</option>
                        <option>Micronesia, Federated States of</option>
                        <option>Moldova, Republic of</option>
                        <option>Monaco</option>
                        <option>Mongolia</option>
                        <option>Montserrat</option>
                        <option>Morocco</option>
                        <option>Mozambique</option>
                        <option>Myanmar</option>
                        <option>Namibia</option>
                        <option>Nauru</option>
                        <option>Nepal</option>
                        <option>Netherlands</option>
                        <option>Netherlands Antilles</option>
                        <option>New Caledonia</option>
                        <option>New Zealand</option>
                        <option>Nicaragua</option>
                        <option>Niger</option>
                        <option>Nigeria</option>
                        <option>Niue</option>
                        <option>Norfolk Island</option>
                        <option>Northern Mariana Islands</option>
                        <option>Norway</option>
                        <option>Oman</option>
                        <option>Pakistan</option>
                        <option>Palau</option>
                        <option>Palestinian Territory, Occupied</option>
                        <option>Panama</option>
                        <option>Papua New Guinea</option>
                        <option>Paraguay</option>
                        <option>Peru</option>
                        <option>Philippines</option>
                        <option>Pitcairn</option>
                        <option>Poland</option>
                        <option>Portugal</option>
                        <option>Puerto Rico</option>
                        <option>Qatar</option>
                        <option>Réunion</option>
                        <option>Romania</option>
                        <option>Russian Federation</option>
                        <option>Rwanda</option>
                        <option>Saint Kitts and Nevis</option>
                        <option>Saint Lucia</option>
                        <option>Saint Vincent and the Grenadines</option>
                        <option>Samoa</option>
                        <option>San Marino</option>
                        <option>Sao Tome And Principe</option>
                        <option>Saudi Arabia</option>
                        <option>Senegal</option>
                        <option>Serbia</option>
                        <option>Seychelles</option>
                        <option>Sierra Leone</option>
                        <option>Singapore</option>
                        <option>Saint Martin (French part)</option>
                        <option>Sint Maarten (Dutch part)</option>
                        <option>Slovakia</option>
                        <option>Slovenia</option>
                        <option>Solomon Islands</option>
                        <option>Somalia</option>
                        <option>South Africa</option>
                        <option>South Georgia and the South Sandwich Islands</option>
                        <option>Spain</option>
                        <option>Sri Lanka</option>
                        <option>St. Barthelemy</option>
                        <option>St. Eustatius</option>
                        <option>Saint Helena</option>
                        <option>Saint Pierre and Miquelon</option>
                        <option>Sudan</option>
                        <option>Suriname</option>
                        <option>Svalbard and Jan Mayen</option>
                        <option>Swaziland</option>
                        <option>Sweden</option>
                        <option>Switzerland</option>
                        <option>Syrian Arab Republic</option>
                        <option>Taiwan</option>
                        <option>Tajikistan</option>
                        <option>Tanzania, United Republic of</option>
                        <option>Thailand</option>
                        <option>The Democratic Republic of Congo</option>
                        <option>Togo</option>
                        <option>Tokelau</option>
                        <option>Tonga</option>
                        <option>Trinidad and Tobago</option>
                        <option>Tunisia</option>
                        <option>Turkey</option>
                        <option>Turkmenistan</option>
                        <option>Turks and Caicos Islands</option>
                        <option>Tuvalu</option>
                        <option>Uganda</option>
                        <option>Ukraine</option>
                        <option>United Arab Emirates</option>
                        <option>United Kingdom</option>
                        <option>United States</option>
                        <option>United States Minor Outlying Islands</option>
                        <option>Uruguay</option>
                        <option>Uzbekistan</option>
                        <option>Vanuatu</option>
                        <option>Vatican City State (Holy See)</option>
                        <option>Venezuela</option>
                        <option>Viet Nam</option>
                        <option>Virgin Islands, British</option>
                        <option>Virgin Islands, U.S.</option>
                        <option>Wallis and Futuna</option>
                        <option>Western Sahara</option>
                        <option>Yemen</option>
                        <option>Zambia</option>
                        <option>Zimbabwe</option>
                    </select>
                </div>
                <div><label for="">City *</label><input type="text"></div>
                <div><label for="">Province *</label><input type="text"></div>
                <div><label for="">Phone</label><input type="text"></div>
                <div><label for="">Mobile</label><input type="text"></div>
                <div><label for="">Address 2</label><input type="text"></div>
                <div>
                    <input type="submit" value="REGISTER">
                    <a href="">CANCEL</a>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection