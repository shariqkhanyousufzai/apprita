<!--begin::Page Custom Styles(used by this page)-->
<link href="<?=$assets?>/css/pages/wizard/wizard-5.css" rel="stylesheet" type="text/css" />
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Create Advertisement
                            <span class="d-block text-muted pt-2 font-size-sm">Make your desired Advertisement</span>
                        </h3>
                    </div>
                </div>
                <div class="card-body p-0">
                    <!--begin: Wizard-->
                    <div class="wizard wizard-5" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="false">
                        <!--begin: Wizard Nav-->
                        <div class="w-lg-50 border-bottom border-bottom-lg-0 border-right-lg">
                            <div class="py-8 px-8 py-lg-20 px-lg-10">
                                <div class="wizard-steps">
                                    <!--begin::Wizard Step-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-label">1</div>
                                    </div>
                                    <!--end::Wizard Step-->
                                    <!--begin::Wizard Step-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">2</div>
                                    </div>
                                    <!--end::Wizard Step-->
                                    <!--begin::Wizard Step-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">3</div>
                                    </div>
                                    <!--end::Wizard Step-->
                                    <!--begin::Wizard Step-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">4</div>
                                    </div>
                                    <!--end::Wizard Step-->
                                </div>
                                <div class="text-center py-10">
                                    <div data-wizard-type="step-info">
                                        <h3 class="font-weight-bolder mb-5">Setup Your Advertisement</h3>
                                        <p class="font-size-lg text-dark-50">To start off, please enter your username,
                                            <br />email address and password.</p>
                                            <img src="<?=$assets?>/media/svg/illustrations/process-setup.svg" alt="image" class="mt-10 h-300px" />
                                        </div>
                                        <div data-wizard-type="step-info">
                                            <h3 class="font-weight-bolder mb-5">Setup Your Location</h3>
                                            <p class="font-size-lg text-dark-50">Please enter your name and contact number.
                                                <br />Your mailing address is optional.</p>
                                                <img src="<?=$assets?>/media/location.png" alt="image" class="mt-10 h-300px" />
                                            </div>
                                            <div data-wizard-type="step-info">
                                                <h3 class="font-weight-bolder mb-5">Setup Your Pricing Details</h3>
                                                <p class="font-size-lg text-dark-50">Please ensure your billing details are up-to-date
                                                    <br />and accurate for us to server you better.</p>
                                                    <img style="height: 266px" src="<?=$assets?>/media/price.png" alt="image" class="mt-10" />
                                                </div>
                                                <div data-wizard-type="step-info">
                                                    <h3 class="font-weight-bolder mb-5">Confirm Your Settings</h3>
                                                    <p class="font-size-lg text-dark-50">Please read our Terms and Conditions and check to agree
                                                        <br />before you can complete your registration.</p>
                                                        <img src="<?=$assets?>/media/svg/illustrations/process-verify.svg" alt="image" class="mt-10 h-300px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Nav-->
                                        <!--begin: Wizard Body-->
                                        <div class="w-lg-50">
                                            <div class="py-8 px-8 pt-lg-30 pb-lg-20 px-lg-20">
                                                <!--begin: Wizard Form-->
                                                <form method="post" action="<?=base_url()?>" class="form" id="kt_form">
                                                    <!--begin: Wizard Step 1-->
                                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Enter your Account Details</h4>
                                                        <!--begin::Input-->
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="fname" placeholder="First Name" value="" />
                                                            <span class="form-text text-muted">Please enter your first name.</span>
                                                        </div>
                                                        <!--end::Input-->
                                                        <!--begin::Input-->
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="lname" placeholder="Last Name" value="" />
                                                            <span class="form-text text-muted">Please enter your last name.</span>
                                                        </div>
                                                        <!--end::Input-->
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Phone</label>
                                                                    <input type="tel" class="form-control form-control-solid form-control-lg" name="phone" placeholder="phone" value="+61412345678" />
                                                                    <span class="form-text text-muted">Please enter your phone number.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input type="email" class="form-control form-control-solid form-control-lg" name="email" placeholder="Email" value="john.wick@reeves.com" />
                                                                    <span class="form-text text-muted">Please enter your email address.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end: Wizard Step 1-->
                                                    <!--begin: Wizard Step 2-->
                                                    <div class="pb-5" data-wizard-type="step-content">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Setup Your Current Location</h4>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Address Line 1</label>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="address1" placeholder="Address Line 1" value="Address Line 1" />
                                                                    <span class="form-text text-muted">Please enter your Address.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Address Line 2</label>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="address2" placeholder="Address Line 2" value="Address Line 2" />
                                                                    <span class="form-text text-muted">Please enter your Address.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Postcode</label>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="postcode" placeholder="Postcode" value="3000" />
                                                                    <span class="form-text text-muted">Please enter your Postcode.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>City</label>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="city" placeholder="City" value="Melbourne" />
                                                                    <span class="form-text text-muted">Please enter your City.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>State</label>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="state" placeholder="State" value="VIC" />
                                                                    <span class="form-text text-muted">Please enter your State.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <!--begin::Select-->
                                                                <div class="form-group">
                                                                    <label>Country</label>
                                                                    <select name="country" class="form-control form-control-solid form-control-lg">
                                                                        <option value="">Select</option>
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="AX">Åland Islands</option>
                                                                        <option value="AL">Albania</option>
                                                                        <option value="DZ">Algeria</option>
                                                                        <option value="AS">American Samoa</option>
                                                                        <option value="AD">Andorra</option>
                                                                        <option value="AO">Angola</option>
                                                                        <option value="AI">Anguilla</option>
                                                                        <option value="AQ">Antarctica</option>
                                                                        <option value="AG">Antigua and Barbuda</option>
                                                                        <option value="AR">Argentina</option>
                                                                        <option value="AM">Armenia</option>
                                                                        <option value="AW">Aruba</option>
                                                                        <option value="AU" selected="selected">Australia</option>
                                                                        <option value="AT">Austria</option>
                                                                        <option value="AZ">Azerbaijan</option>
                                                                        <option value="BS">Bahamas</option>
                                                                        <option value="BH">Bahrain</option>
                                                                        <option value="BD">Bangladesh</option>
                                                                        <option value="BB">Barbados</option>
                                                                        <option value="BY">Belarus</option>
                                                                        <option value="BE">Belgium</option>
                                                                        <option value="BZ">Belize</option>
                                                                        <option value="BJ">Benin</option>
                                                                        <option value="BM">Bermuda</option>
                                                                        <option value="BT">Bhutan</option>
                                                                        <option value="BO">Bolivia, Plurinational State of</option>
                                                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                                        <option value="BW">Botswana</option>
                                                                        <option value="BV">Bouvet Island</option>
                                                                        <option value="BR">Brazil</option>
                                                                        <option value="IO">British Indian Ocean Territory</option>
                                                                        <option value="BN">Brunei Darussalam</option>
                                                                        <option value="BG">Bulgaria</option>
                                                                        <option value="BF">Burkina Faso</option>
                                                                        <option value="BI">Burundi</option>
                                                                        <option value="KH">Cambodia</option>
                                                                        <option value="CM">Cameroon</option>
                                                                        <option value="CA">Canada</option>
                                                                        <option value="CV">Cape Verde</option>
                                                                        <option value="KY">Cayman Islands</option>
                                                                        <option value="CF">Central African Republic</option>
                                                                        <option value="TD">Chad</option>
                                                                        <option value="CL">Chile</option>
                                                                        <option value="CN">China</option>
                                                                        <option value="CX">Christmas Island</option>
                                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                                        <option value="CO">Colombia</option>
                                                                        <option value="KM">Comoros</option>
                                                                        <option value="CG">Congo</option>
                                                                        <option value="CD">Congo, the Democratic Republic of the</option>
                                                                        <option value="CK">Cook Islands</option>
                                                                        <option value="CR">Costa Rica</option>
                                                                        <option value="CI">Côte d'Ivoire</option>
                                                                        <option value="HR">Croatia</option>
                                                                        <option value="CU">Cuba</option>
                                                                        <option value="CW">Curaçao</option>
                                                                        <option value="CY">Cyprus</option>
                                                                        <option value="CZ">Czech Republic</option>
                                                                        <option value="DK">Denmark</option>
                                                                        <option value="DJ">Djibouti</option>
                                                                        <option value="DM">Dominica</option>
                                                                        <option value="DO">Dominican Republic</option>
                                                                        <option value="EC">Ecuador</option>
                                                                        <option value="EG">Egypt</option>
                                                                        <option value="SV">El Salvador</option>
                                                                        <option value="GQ">Equatorial Guinea</option>
                                                                        <option value="ER">Eritrea</option>
                                                                        <option value="EE">Estonia</option>
                                                                        <option value="ET">Ethiopia</option>
                                                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                                                        <option value="FO">Faroe Islands</option>
                                                                        <option value="FJ">Fiji</option>
                                                                        <option value="FI">Finland</option>
                                                                        <option value="FR">France</option>
                                                                        <option value="GF">French Guiana</option>
                                                                        <option value="PF">French Polynesia</option>
                                                                        <option value="TF">French Southern Territories</option>
                                                                        <option value="GA">Gabon</option>
                                                                        <option value="GM">Gambia</option>
                                                                        <option value="GE">Georgia</option>
                                                                        <option value="DE">Germany</option>
                                                                        <option value="GH">Ghana</option>
                                                                        <option value="GI">Gibraltar</option>
                                                                        <option value="GR">Greece</option>
                                                                        <option value="GL">Greenland</option>
                                                                        <option value="GD">Grenada</option>
                                                                        <option value="GP">Guadeloupe</option>
                                                                        <option value="GU">Guam</option>
                                                                        <option value="GT">Guatemala</option>
                                                                        <option value="GG">Guernsey</option>
                                                                        <option value="GN">Guinea</option>
                                                                        <option value="GW">Guinea-Bissau</option>
                                                                        <option value="GY">Guyana</option>
                                                                        <option value="HT">Haiti</option>
                                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                                        <option value="VA">Holy See (Vatican City State)</option>
                                                                        <option value="HN">Honduras</option>
                                                                        <option value="HK">Hong Kong</option>
                                                                        <option value="HU">Hungary</option>
                                                                        <option value="IS">Iceland</option>
                                                                        <option value="IN">India</option>
                                                                        <option value="ID">Indonesia</option>
                                                                        <option value="IR">Iran, Islamic Republic of</option>
                                                                        <option value="IQ">Iraq</option>
                                                                        <option value="IE">Ireland</option>
                                                                        <option value="IM">Isle of Man</option>
                                                                        <option value="IL">Israel</option>
                                                                        <option value="IT">Italy</option>
                                                                        <option value="JM">Jamaica</option>
                                                                        <option value="JP">Japan</option>
                                                                        <option value="JE">Jersey</option>
                                                                        <option value="JO">Jordan</option>
                                                                        <option value="KZ">Kazakhstan</option>
                                                                        <option value="KE">Kenya</option>
                                                                        <option value="KI">Kiribati</option>
                                                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                                                        <option value="KR">Korea, Republic of</option>
                                                                        <option value="KW">Kuwait</option>
                                                                        <option value="KG">Kyrgyzstan</option>
                                                                        <option value="LA">Lao People's Democratic Republic</option>
                                                                        <option value="LV">Latvia</option>
                                                                        <option value="LB">Lebanon</option>
                                                                        <option value="LS">Lesotho</option>
                                                                        <option value="LR">Liberia</option>
                                                                        <option value="LY">Libya</option>
                                                                        <option value="LI">Liechtenstein</option>
                                                                        <option value="LT">Lithuania</option>
                                                                        <option value="LU">Luxembourg</option>
                                                                        <option value="MO">Macao</option>
                                                                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                                        <option value="MG">Madagascar</option>
                                                                        <option value="MW">Malawi</option>
                                                                        <option value="MY">Malaysia</option>
                                                                        <option value="MV">Maldives</option>
                                                                        <option value="ML">Mali</option>
                                                                        <option value="MT">Malta</option>
                                                                        <option value="MH">Marshall Islands</option>
                                                                        <option value="MQ">Martinique</option>
                                                                        <option value="MR">Mauritania</option>
                                                                        <option value="MU">Mauritius</option>
                                                                        <option value="YT">Mayotte</option>
                                                                        <option value="MX">Mexico</option>
                                                                        <option value="FM">Micronesia, Federated States of</option>
                                                                        <option value="MD">Moldova, Republic of</option>
                                                                        <option value="MC">Monaco</option>
                                                                        <option value="MN">Mongolia</option>
                                                                        <option value="ME">Montenegro</option>
                                                                        <option value="MS">Montserrat</option>
                                                                        <option value="MA">Morocco</option>
                                                                        <option value="MZ">Mozambique</option>
                                                                        <option value="MM">Myanmar</option>
                                                                        <option value="NA">Namibia</option>
                                                                        <option value="NR">Nauru</option>
                                                                        <option value="NP">Nepal</option>
                                                                        <option value="NL">Netherlands</option>
                                                                        <option value="NC">New Caledonia</option>
                                                                        <option value="NZ">New Zealand</option>
                                                                        <option value="NI">Nicaragua</option>
                                                                        <option value="NE">Niger</option>
                                                                        <option value="NG">Nigeria</option>
                                                                        <option value="NU">Niue</option>
                                                                        <option value="NF">Norfolk Island</option>
                                                                        <option value="MP">Northern Mariana Islands</option>
                                                                        <option value="NO">Norway</option>
                                                                        <option value="OM">Oman</option>
                                                                        <option value="PK">Pakistan</option>
                                                                        <option value="PW">Palau</option>
                                                                        <option value="PS">Palestinian Territory, Occupied</option>
                                                                        <option value="PA">Panama</option>
                                                                        <option value="PG">Papua New Guinea</option>
                                                                        <option value="PY">Paraguay</option>
                                                                        <option value="PE">Peru</option>
                                                                        <option value="PH">Philippines</option>
                                                                        <option value="PN">Pitcairn</option>
                                                                        <option value="PL">Poland</option>
                                                                        <option value="PT">Portugal</option>
                                                                        <option value="PR">Puerto Rico</option>
                                                                        <option value="QA">Qatar</option>
                                                                        <option value="RE">Réunion</option>
                                                                        <option value="RO">Romania</option>
                                                                        <option value="RU">Russian Federation</option>
                                                                        <option value="RW">Rwanda</option>
                                                                        <option value="BL">Saint Barthélemy</option>
                                                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                                        <option value="LC">Saint Lucia</option>
                                                                        <option value="MF">Saint Martin (French part)</option>
                                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                                        <option value="WS">Samoa</option>
                                                                        <option value="SM">San Marino</option>
                                                                        <option value="ST">Sao Tome and Principe</option>
                                                                        <option value="SA">Saudi Arabia</option>
                                                                        <option value="SN">Senegal</option>
                                                                        <option value="RS">Serbia</option>
                                                                        <option value="SC">Seychelles</option>
                                                                        <option value="SL">Sierra Leone</option>
                                                                        <option value="SG">Singapore</option>
                                                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                                                        <option value="SK">Slovakia</option>
                                                                        <option value="SI">Slovenia</option>
                                                                        <option value="SB">Solomon Islands</option>
                                                                        <option value="SO">Somalia</option>
                                                                        <option value="ZA">South Africa</option>
                                                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                        <option value="SS">South Sudan</option>
                                                                        <option value="ES">Spain</option>
                                                                        <option value="LK">Sri Lanka</option>
                                                                        <option value="SD">Sudan</option>
                                                                        <option value="SR">Suriname</option>
                                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                                        <option value="SZ">Swaziland</option>
                                                                        <option value="SE">Sweden</option>
                                                                        <option value="CH">Switzerland</option>
                                                                        <option value="SY">Syrian Arab Republic</option>
                                                                        <option value="TW">Taiwan, Province of China</option>
                                                                        <option value="TJ">Tajikistan</option>
                                                                        <option value="TZ">Tanzania, United Republic of</option>
                                                                        <option value="TH">Thailand</option>
                                                                        <option value="TL">Timor-Leste</option>
                                                                        <option value="TG">Togo</option>
                                                                        <option value="TK">Tokelau</option>
                                                                        <option value="TO">Tonga</option>
                                                                        <option value="TT">Trinidad and Tobago</option>
                                                                        <option value="TN">Tunisia</option>
                                                                        <option value="TR">Turkey</option>
                                                                        <option value="TM">Turkmenistan</option>
                                                                        <option value="TC">Turks and Caicos Islands</option>
                                                                        <option value="TV">Tuvalu</option>
                                                                        <option value="UG">Uganda</option>
                                                                        <option value="UA">Ukraine</option>
                                                                        <option value="AE">United Arab Emirates</option>
                                                                        <option value="GB">United Kingdom</option>
                                                                        <option value="US">United States</option>
                                                                        <option value="UM">United States Minor Outlying Islands</option>
                                                                        <option value="UY">Uruguay</option>
                                                                        <option value="UZ">Uzbekistan</option>
                                                                        <option value="VU">Vanuatu</option>
                                                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                                        <option value="VN">Viet Nam</option>
                                                                        <option value="VG">Virgin Islands, British</option>
                                                                        <option value="VI">Virgin Islands, U.S.</option>
                                                                        <option value="WF">Wallis and Futuna</option>
                                                                        <option value="EH">Western Sahara</option>
                                                                        <option value="YE">Yemen</option>
                                                                        <option value="ZM">Zambia</option>
                                                                        <option value="ZW">Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end: Wizard Step 2-->
                                                    <!--begin: Wizard Step 3-->
                                                    <div class="pb-5" data-wizard-type="step-content">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Select your Service Price</h4>
                                                        <!--begin::Select-->
                                                        <div class="form-group">
                                                            <label>Service Type:</label>
                                                            <select name="delivery" class="form-control form-control-solid form-control-lg">
                                                                <option value="">Select a Service Type Option</option>
                                                                <option value="overnight" selected="selected">Overnight Delivery (within 48 hours)</option>
                                                                <option value="express">Express Delivery (within 5 working days)</option>
                                                                <option value="basic">Basic Delivery (within 5 - 10 working days)</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Select-->
                                                        <!--begin::Select-->
                                                        <div class="form-group">
                                                            <label>Price</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="price" placeholder="price" value="0" />
                                                            <span class="form-text text-muted">Please enter your Price.</span>
                                                        </div>
                                                        <!--end::Select-->
                                                        <!--begin::Select-->
                                                        <div> <label>Upload A Advertisement Picture:</label></div>
                                                        <div class="form-group">

                                                            <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar" style="background-image: url(http://localhost/apprita/assets/media/advertising.png);background-size: contain;background-position: 0px;">
                                                                <div class="image-input-wrapper"></div>
                                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                                    <input type="file" name="advertisement_avatar" accept=".png, .jpg, .jpeg">
                                                                    <input type="hidden" name="advertisement_avatar_remove">
                                                                </label>
                                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                </span>
                                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!--end::Select-->
                                                    </div>
                                                    <!--end: Wizard Step 3-->
                                                    <!--begin: Wizard Step 4-->
                                                    <div class="pb-5" data-wizard-type="step-content">
                                                        <!--begin::Section-->
                                                        <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>
                                                        <h6 class="font-weight-bolder mb-3">Current Address:</h6>
                                                        <div class="text-dark-50 line-height-lg">
                                                            <div>Address Line 1</div>
                                                            <div>Address Line 2</div>
                                                            <div>Melbourne 3000, VIC, Australia</div>
                                                        </div>
                                                        <div class="separator separator-dashed my-5"></div>
                                                        <!--end::Section-->
                                                        <!--begin::Section-->
                                                        <h6 class="font-weight-bolder mb-3">Delivery Details:</h6>
                                                        <div class="text-dark-50 line-height-lg">
                                                            <div>Package: Complete Workstation (Monitor, Computer, Keyboard &amp; Mouse)</div>
                                                            <div>Weight: 25kg</div>
                                                            <div>Dimensions: 110cm (w) x 90cm (h) x 150cm (L)</div>
                                                        </div>
                                                        <div class="separator separator-dashed my-5"></div>
                                                        <!--end::Section-->
                                                        <!--begin::Section-->
                                                        <h6 class="font-weight-bolder mb-3">Delivery Service Type:</h6>
                                                        <div class="text-dark-50 line-height-lg">
                                                            <div>Overnight Delivery with Regular Packaging</div>
                                                            <div>Preferred Morning (8:00AM - 11:00AM) Delivery</div>
                                                        </div>
                                                        <div class="separator separator-dashed my-5"></div>
                                                        <!--end::Section-->
                                                        <!--begin::Section-->
                                                        <h6 class="font-weight-bolder mb-3">Delivery Address:</h6>
                                                        <div class="text-dark-50 line-height-lg">
                                                            <div>Address Line 1</div>
                                                            <div>Address Line 2</div>
                                                            <div>Preston 3072, VIC, Australia</div>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end: Wizard Step 4-->
                                                    <!--begin: Wizard Actions-->
                                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                        <div class="mr-2">
                                                            <button type="button" id="prev-step" class="btn btn-light-primary font-weight-bolder px-10 py-4" data-wizard-type="action-prev">
                                                                <span class="svg-icon svg-icon-md mr-3">
                                                                    <!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Navigation/Arrow-left.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                            <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>Previous</button>
                                                            </div>
                                                            <div>
                                                                <button type="button" class="btn btn-primary font-weight-bolder px-10 py-4" data-wizard-type="action-submit">Submit
                                                                    <span class="svg-icon svg-icon-md ml-3">
                                                                        <!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Navigation/Check.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002)" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span></button>
                                                                    <button type="button" id="next-step" class="btn btn-primary font-weight-bolder px-10 py-4" data-wizard-type="action-next">Next
                                                                        <span class="svg-icon svg-icon-md ml-3">
                                                                            <!--begin::Svg Icon | path:<?=$assets?>/media/svg/icons/Navigation/Arrow-right.svg-->
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                                                </g>
                                                                            </svg>
                                                                            <!--end::Svg Icon-->
                                                                        </span></button>
                                                                    </div>
                                                                </div>
                                                                <!--end: Wizard Actions-->
                                                            </form>
                                                            <!--end: Wizard Form-->
                                                        </div>
                                                    </div>
                                                    <!--end: Wizard Body-->
                                                </div>
                                                <!--end: Wizard-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Container-->
                                </div>
                                <!--end::Entry-->
                            </div>
                            <!--begin::Page Scripts(used by this page)-->
                            <script src="<?=$assets?>/js/pages/custom/wizard/wizard-5.js"></script>
<!--end::Page Scripts-->