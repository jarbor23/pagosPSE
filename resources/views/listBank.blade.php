<!DOCTYPE html>
<html>
    @include('head')
    <body>
        @include('nav')
        <div class="container">
            <div class="row"><br><br><br>
                    <!--si el formulario contiene errores de validación-->
                    @if($errors->has())
                        <div class='alert alert-danger'>
                            <!--recorremos los errores en un loop y los mostramos-->
                            @foreach ($errors->all('<p>:message</p>') as $message)
                                {{ $message }}
                            @endforeach
                        </div>
                    @endif

            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9  ">
                <div class="row">

                    <form action="{{ action('SoapController@transaction') }}" method="POST" >
                        {{ csrf_field() }}
                        <!-- Informacion del ciente  -->
                        <div class="form-group col-xs-12 col-sm-12">
                            <h4><p class="text-center">Información Del Cliente</p></h4>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="documento">Documento*</label>
                            <input type="text" class="form-control" id="document" name="personCliente_document" placeholder="Ingrese su documento" required="">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="documentType">Tipo de Documento*</label>
                            <select class="form-control" id="documentType" name="personCliente_documentType"       required="">
                                <option value="CC">Cédula de ciudanía</option> 
                                <option value="CE">Cédula de extranjería</option>
                                <option value="TI">Tarjeta de identidad</option> 
                                <option value="PPN">Pasaporte</option>
                                <option value="NIT"> Número de identificación tributaria(NIT)</option> 
                                <option value="SSN">Social Security Number</option>
                            </select>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="firstName">Nombre*</label>
                            <input type="text" class="form-control " id="firstName" name="personCliente_firstName"  placeholder="Ingresa sus nombres" required="">
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="lastName">Apellido*</label>
                            <input type="text" class="form-control " id="lastName" name="personCliente_lastName"  placeholder="Ingresa sus apellido" required="">
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="company">Compañia</label>
                            <input type="text" class="form-control " id="company" name="personCliente_company"  placeholder="">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="emailAddress">Email*</label>
                            <input type="email" class="form-control" id="emailAddress" name="personCliente_emailAddress" placeholder="Ingresa email" required="">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="address">Dirección</label>
                            <input type="text" class="form-control " id="address" name="personCliente_address"  placeholder="">
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="city">Ciudad</label>
                            <input type="text" class="form-control " id="city" name="personCliente_city"  placeholder="">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="province">Departamento</label>
                            <input type="text" class="form-control " id="province" name="personCliente_province"  placeholder="">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="country">País*</label>
                            <select class="form-control" id="country" name="personCliente_country" >
                                <option value="AR">Argentina</option> 
                                <option value="BR">Brasil</option> 
                                <option value="CA">Canada</option> 
                                <option value="CL">Chile</option> 
                                <option value="CO" selected="">Colombia</option> 
                                <option value="FR">Francia</option> 
                                <option value="DE">Alemania</option> 
                                <option value="GR">Grecia</option> 
                                <option value="IT">Italia</option> 
                                <option value="MX">México</option> 
                                <option value="PA">Panamá</option> 
                                <option value="PY">Paraguay</option> 
                                <option value="PE">Perú</option> 
                                <option value="PT">Portugal</option> 
                                <option value="ES">España</option> 
                                <option value="GB">United Kingdom</option> 
                                <option value="US">United States</option> 
                                <option value="AF">Afghanistan</option> 
                                <option value="AX">Åland Islands</option> 
                                <option value="AL">Albania</option> 
                                <option value="DZ">Algeria</option> 
                                <option value="AS">American Samoa</option> 
                                <option value="AD">Andorra</option> 
                                <option value="AO">Angola</option> 
                                <option value="AI">Anguilla</option> 
                                <option value="AQ">Antarctica</option> 
                                <option value="AG">Antigua And Barbuda</option> 
                                <option value="AM">Armenia</option> 
                                <option value="AW">Aruba</option> 
                                <option value="AU">Australia</option> 
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
                                <option value="BO">Bolivia, Plurinational State Of</option> 
                                <option value="BQ">Bonaire, Sint Eustatius And Saba</option> 
                                <option value="BA">Bosnia And Herzegovina</option> 
                                <option value="BW">Botswana</option> 
                                <option value="BV">Bouvet Island</option> 
                                <option value="IO">British Indian Ocean Territory</option> 
                                <option value="BN">Brunei Darussalam</option> 
                                <option value="BG">Bulgaria</option> 
                                <option value="BF">Burkina Faso</option> 
                                <option value="BI">Burundi</option> 
                                <option value="KH">Cambodia</option> 
                                <option value="CM">Cameroon</option> 
                                <option value="CV">Cape Verde</option> 
                                <option value="KY">Cayman Islands</option> 
                                <option value="CF">Central African Republic</option> 
                                <option value="TD">Chad</option> 
                                <option value="CN">China</option> 
                                <option value="CX">Christmas Island</option> 
                                <option value="CC">Cocos (keeling) Islands</option> 
                                <option value="KM">Comoros</option> 
                                <option value="CG">Congo</option> 
                                <option value="CD">Congo, The Democratic Republic Of The</option> 
                                <option value="CK">Cook Islands</option> 
                                <option value="CR">Costa Rica</option> 
                                <option value="CI">Côte D'ivoire</option> 
                                <option value="HR">Croatia</option> 
                                <option value="CU">Cuba</option> 
                                <option value="CW">Curacao</option> 
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
                                <option value="FK">Falkland Islands (malvinas)</option> 
                                <option value="FO">Faroe Islands</option> 
                                <option value="FJ">Fiji</option> 
                                <option value="FI">Finland</option> 
                                <option value="GF">French Guiana</option> 
                                <option value="PF">French Polynesia</option> 
                                <option value="TF">French Southern Territories</option> 
                                <option value="GA">Gabon</option> 
                                <option value="GM">Gambia</option> 
                                <option value="GE">Georgia</option> 
                                <option value="GH">Ghana</option> 
                                <option value="GI">Gibraltar</option> 
                                <option value="GL">Greenland</option> 
                                <option value="GD">Grenada</option> 
                                <option value="GP">Guadeloupe</option> 
                                <option value="GU">Guam</option> 
                                <option value="GT">Guatemala</option> 
                                <option value="GG">Guernsey</option> 
                                <option value="GN">Guinea</option> 
                                <option value="GW">Guinea-bissau</option> 
                                <option value="GY">Guyana</option> 
                                <option value="HT">Haiti</option> 
                                <option value="HM">Heard Island And Mcdonald Islands</option> 
                                <option value="VA">Holy See (vatican City State)</option> 
                                <option value="HN">Honduras</option> 
                                <option value="HK">Hong Kong</option> 
                                <option value="HU">Hungary</option> 
                                <option value="IS">Iceland</option> 
                                <option value="IN">India</option> 
                                <option value="ID">Indonesia</option> 
                                <option value="IR">Iran, Islamic Republic Of</option> 
                                <option value="IQ">Iraq</option> 
                                <option value="IE">Ireland</option> 
                                <option value="IM">Isle Of Man</option> 
                                <option value="IL">Israel</option> 
                                <option value="JM">Jamaica</option> 
                                <option value="JP">Japan</option> 
                                <option value="JE">Jersey</option> 
                                <option value="JO">Jordan</option> 
                                <option value="KZ">Kazakhstan</option> 
                                <option value="KE">Kenya</option> 
                                <option value="KI">Kiribati</option> 
                                <option value="KP">Korea, Democratic People's Republic Of</option> 
                                <option value="KR">Korea, Republic Of</option> 
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
                                <option value="MK">Macedonia, The Former Yugoslav Republic Of</option> 
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
                                <option value="FM">Micronesia, Federated States Of</option> 
                                <option value="MD">Moldova, Republic Of</option> 
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
                                <option value="PG">Papua New Guinea</option> 
                                <option value="PH">Philippines</option> 
                                <option value="PN">Pitcairn</option> 
                                <option value="PL">Poland</option> 
                                <option value="PR">Puerto Rico</option> 
                                <option value="QA">Qatar</option> 
                                <option value="RE">Réunion</option> 
                                <option value="RO">Romania</option> 
                                <option value="RU">Russian Federation</option> 
                                <option value="RW">Rwanda</option> 
                                <option value="BL">Saint Barthelemy</option> 
                                <option value="SH">Saint Helena, Ascension And Tristan Da Cunha</option> 
                                <option value="KN">Saint Kitts And Nevis</option> 
                                <option value="LC">Saint Lucia</option> 
                                <option value="MF">Saint Martin (french Part)</option> 
                                <option value="PM">Saint Pierre And Miquelon</option> 
                                <option value="VC">Saint Vincent And The Grenadines</option> 
                                <option value="WS">Samoa</option> 
                                <option value="SM">San Marino</option> 
                                <option value="ST">Sao Tome And Principe</option> 
                                <option value="SA">Saudi Arabia</option> 
                                <option value="SN">Senegal</option> 
                                <option value="RS">Serbia</option> 
                                <option value="SC">Seychelles</option> 
                                <option value="SL">Sierra Leone</option> 
                                <option value="SG">Singapore</option> 
                                <option value="SX">Sint Maarten (dutch Part)</option> 
                                <option value="SK">Slovakia</option> 
                                <option value="SI">Slovenia</option> 
                                <option value="SB">Solomon Islands</option> 
                                <option value="SO">Somalia</option> 
                                <option value="ZA">South Africa</option> 
                                <option value="GS">South Georgia And The South Sandwich Islands</option> 
                                <option value="LK">Sri Lanka</option> 
                                <option value="SD">Sudan</option> 
                                <option value="SR">Suriname</option> 
                                <option value="SS">South Sudan</option> 
                                <option value="SJ">Svalbard And Jan Mayen</option> 
                                <option value="SZ">Swaziland</option> 
                                <option value="SE">Sweden</option> 
                                <option value="CH">Switzerland</option> 
                                <option value="SY">Syrian Arab Republic</option> 
                                <option value="TW">Taiwan, Province Of China</option> 
                                <option value="TJ">Tajikistan</option> 
                                <option value="TZ">Tanzania, United Republic Of</option> 
                                <option value="TH">Thailand</option> 
                                <option value="TL">Timor-leste</option> 
                                <option value="TG">Togo</option> 
                                <option value="TK">Tokelau</option> 
                                <option value="TO">Tonga</option> 
                                <option value="TT">Trinidad And Tobago</option> 
                                <option value="TN">Tunisia</option> 
                                <option value="TR">Turkey</option> 
                                <option value="TM">Turkmenistan</option> 
                                <option value="TC">Turks And Caicos Islands</option> 
                                <option value="TV">Tuvalu</option> 
                                <option value="UG">Uganda</option> 
                                <option value="UA">Ukraine</option> 
                                <option value="AE">United Arab Emirates</option> 
                                <option value="UM">United States Minor Outlying Islands</option> 
                                <option value="UY">Uruguay</option> 
                                <option value="UZ">Uzbekistan</option> 
                                <option value="VU">Vanuatu</option> 
                                <option value="VE">Venezuela, Bolivarian Republic Of</option> 
                                <option value="VN">Viet Nam</option> 
                                <option value="VG">Virgin Islands, British</option> 
                                <option value="VI">Virgin Islands, U.s.</option> 
                                <option value="WF">Wallis And Futuna</option> 
                                <option value="EH">Western Sahara</option> 
                                <option value="YE">Yemen</option> 
                                <option value="ZM">Zambia</option> 
                                <option value="ZW">Zimbabwe</option> 
                            </select>
                        </div>

                        
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="phone">Teléfono</label>
                            <input type="text" class="form-control" id="phone" name="personCliente_phone" placeholder="Ingresa teléfono">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="mobile">celular</label>
                            <input type="text" class="form-control" id="mobile" name="personCliente_mobile" placeholder="Ingresa celular">
                        </div> 

                        <!-- Informacion del Pagador  -->
                        
                        <div class="form-group col-xs-12 col-sm-12">
                            <h4><p class="text-center">Información Del Pagador</p></h4>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="documento">Documento</label>
                            <input type="text" class="form-control" id="document" name="personPagador_document" placeholder="" >
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="documentType">Tipo de Documento</label>
                            <select class="form-control" id="documentType" name="personPagador_documentType"       >
                                <option value="CC">Cédula de ciudanía</option> 
                                <option value="CE">Cédula de extranjería</option>
                                <option value="TI">Tarjeta de identidad</option> 
                                <option value="PPN">Pasaporte</option>
                                <option value="NIT"> Número de identificación tributaria(NIT)</option> 
                                <option value="SSN">Social Security Number</option>
                            </select>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="firstName">Nombre</label>
                            <input type="text" class="form-control " id="firstName" name="personPagador_firstName"  placeholder="">
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="lastName">Apellido</label>
                            <input type="text" class="form-control " id="lastName" name="personPagador_lastName"  placeholder="">
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="company">Compañia</label>
                            <input type="text" class="form-control " id="company" name="personPagador_company"  placeholder="">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="emailAddress">Email</label>
                            <input type="email" class="form-control" id="emailAddress" name="personPagador_emailAddress" placeholder="Ingresa email" >
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="address">Dirección</label>
                            <input type="text" class="form-control " id="address" name="personPagador_address"  placeholder="">
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="city">Ciudad</label>
                            <input type="text" class="form-control " id="city" name="personPagador_city"  placeholder="">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="province">Departamento</label>
                            <input type="text" class="form-control " id="province" name="personPagador_province"  placeholder="">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="country">País</label>
                            <select class="form-control" id="country" name="personPagador_country" >
                                <option value="AR">Argentina</option> 
                                <option value="BR">Brasil</option> 
                                <option value="CA">Canada</option> 
                                <option value="CL">Chile</option> 
                                <option value="CO" selected="">Colombia</option> 
                                <option value="FR">Francia</option> 
                                <option value="DE">Alemania</option> 
                                <option value="GR">Grecia</option> 
                                <option value="IT">Italia</option> 
                                <option value="MX">México</option> 
                                <option value="PA">Panamá</option> 
                                <option value="PY">Paraguay</option> 
                                <option value="PE">Perú</option> 
                                <option value="PT">Portugal</option> 
                                <option value="ES">España</option> 
                                <option value="GB">United Kingdom</option> 
                                <option value="US">United States</option> 
                                <option value="AF">Afghanistan</option> 
                                <option value="AX">Åland Islands</option> 
                                <option value="AL">Albania</option> 
                                <option value="DZ">Algeria</option> 
                                <option value="AS">American Samoa</option> 
                                <option value="AD">Andorra</option> 
                                <option value="AO">Angola</option> 
                                <option value="AI">Anguilla</option> 
                                <option value="AQ">Antarctica</option> 
                                <option value="AG">Antigua And Barbuda</option> 
                                <option value="AM">Armenia</option> 
                                <option value="AW">Aruba</option> 
                                <option value="AU">Australia</option> 
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
                                <option value="BO">Bolivia, Plurinational State Of</option> 
                                <option value="BQ">Bonaire, Sint Eustatius And Saba</option> 
                                <option value="BA">Bosnia And Herzegovina</option> 
                                <option value="BW">Botswana</option> 
                                <option value="BV">Bouvet Island</option> 
                                <option value="IO">British Indian Ocean Territory</option> 
                                <option value="BN">Brunei Darussalam</option> 
                                <option value="BG">Bulgaria</option> 
                                <option value="BF">Burkina Faso</option> 
                                <option value="BI">Burundi</option> 
                                <option value="KH">Cambodia</option> 
                                <option value="CM">Cameroon</option> 
                                <option value="CV">Cape Verde</option> 
                                <option value="KY">Cayman Islands</option> 
                                <option value="CF">Central African Republic</option> 
                                <option value="TD">Chad</option> 
                                <option value="CN">China</option> 
                                <option value="CX">Christmas Island</option> 
                                <option value="CC">Cocos (keeling) Islands</option> 
                                <option value="KM">Comoros</option> 
                                <option value="CG">Congo</option> 
                                <option value="CD">Congo, The Democratic Republic Of The</option> 
                                <option value="CK">Cook Islands</option> 
                                <option value="CR">Costa Rica</option> 
                                <option value="CI">Côte D'ivoire</option> 
                                <option value="HR">Croatia</option> 
                                <option value="CU">Cuba</option> 
                                <option value="CW">Curacao</option> 
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
                                <option value="FK">Falkland Islands (malvinas)</option> 
                                <option value="FO">Faroe Islands</option> 
                                <option value="FJ">Fiji</option> 
                                <option value="FI">Finland</option> 
                                <option value="GF">French Guiana</option> 
                                <option value="PF">French Polynesia</option> 
                                <option value="TF">French Southern Territories</option> 
                                <option value="GA">Gabon</option> 
                                <option value="GM">Gambia</option> 
                                <option value="GE">Georgia</option> 
                                <option value="GH">Ghana</option> 
                                <option value="GI">Gibraltar</option> 
                                <option value="GL">Greenland</option> 
                                <option value="GD">Grenada</option> 
                                <option value="GP">Guadeloupe</option> 
                                <option value="GU">Guam</option> 
                                <option value="GT">Guatemala</option> 
                                <option value="GG">Guernsey</option> 
                                <option value="GN">Guinea</option> 
                                <option value="GW">Guinea-bissau</option> 
                                <option value="GY">Guyana</option> 
                                <option value="HT">Haiti</option> 
                                <option value="HM">Heard Island And Mcdonald Islands</option> 
                                <option value="VA">Holy See (vatican City State)</option> 
                                <option value="HN">Honduras</option> 
                                <option value="HK">Hong Kong</option> 
                                <option value="HU">Hungary</option> 
                                <option value="IS">Iceland</option> 
                                <option value="IN">India</option> 
                                <option value="ID">Indonesia</option> 
                                <option value="IR">Iran, Islamic Republic Of</option> 
                                <option value="IQ">Iraq</option> 
                                <option value="IE">Ireland</option> 
                                <option value="IM">Isle Of Man</option> 
                                <option value="IL">Israel</option> 
                                <option value="JM">Jamaica</option> 
                                <option value="JP">Japan</option> 
                                <option value="JE">Jersey</option> 
                                <option value="JO">Jordan</option> 
                                <option value="KZ">Kazakhstan</option> 
                                <option value="KE">Kenya</option> 
                                <option value="KI">Kiribati</option> 
                                <option value="KP">Korea, Democratic People's Republic Of</option> 
                                <option value="KR">Korea, Republic Of</option> 
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
                                <option value="MK">Macedonia, The Former Yugoslav Republic Of</option> 
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
                                <option value="FM">Micronesia, Federated States Of</option> 
                                <option value="MD">Moldova, Republic Of</option> 
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
                                <option value="PG">Papua New Guinea</option> 
                                <option value="PH">Philippines</option> 
                                <option value="PN">Pitcairn</option> 
                                <option value="PL">Poland</option> 
                                <option value="PR">Puerto Rico</option> 
                                <option value="QA">Qatar</option> 
                                <option value="RE">Réunion</option> 
                                <option value="RO">Romania</option> 
                                <option value="RU">Russian Federation</option> 
                                <option value="RW">Rwanda</option> 
                                <option value="BL">Saint Barthelemy</option> 
                                <option value="SH">Saint Helena, Ascension And Tristan Da Cunha</option> 
                                <option value="KN">Saint Kitts And Nevis</option> 
                                <option value="LC">Saint Lucia</option> 
                                <option value="MF">Saint Martin (french Part)</option> 
                                <option value="PM">Saint Pierre And Miquelon</option> 
                                <option value="VC">Saint Vincent And The Grenadines</option> 
                                <option value="WS">Samoa</option> 
                                <option value="SM">San Marino</option> 
                                <option value="ST">Sao Tome And Principe</option> 
                                <option value="SA">Saudi Arabia</option> 
                                <option value="SN">Senegal</option> 
                                <option value="RS">Serbia</option> 
                                <option value="SC">Seychelles</option> 
                                <option value="SL">Sierra Leone</option> 
                                <option value="SG">Singapore</option> 
                                <option value="SX">Sint Maarten (dutch Part)</option> 
                                <option value="SK">Slovakia</option> 
                                <option value="SI">Slovenia</option> 
                                <option value="SB">Solomon Islands</option> 
                                <option value="SO">Somalia</option> 
                                <option value="ZA">South Africa</option> 
                                <option value="GS">South Georgia And The South Sandwich Islands</option> 
                                <option value="LK">Sri Lanka</option> 
                                <option value="SD">Sudan</option> 
                                <option value="SR">Suriname</option> 
                                <option value="SS">South Sudan</option> 
                                <option value="SJ">Svalbard And Jan Mayen</option> 
                                <option value="SZ">Swaziland</option> 
                                <option value="SE">Sweden</option> 
                                <option value="CH">Switzerland</option> 
                                <option value="SY">Syrian Arab Republic</option> 
                                <option value="TW">Taiwan, Province Of China</option> 
                                <option value="TJ">Tajikistan</option> 
                                <option value="TZ">Tanzania, United Republic Of</option> 
                                <option value="TH">Thailand</option> 
                                <option value="TL">Timor-leste</option> 
                                <option value="TG">Togo</option> 
                                <option value="TK">Tokelau</option> 
                                <option value="TO">Tonga</option> 
                                <option value="TT">Trinidad And Tobago</option> 
                                <option value="TN">Tunisia</option> 
                                <option value="TR">Turkey</option> 
                                <option value="TM">Turkmenistan</option> 
                                <option value="TC">Turks And Caicos Islands</option> 
                                <option value="TV">Tuvalu</option> 
                                <option value="UG">Uganda</option> 
                                <option value="UA">Ukraine</option> 
                                <option value="AE">United Arab Emirates</option> 
                                <option value="UM">United States Minor Outlying Islands</option> 
                                <option value="UY">Uruguay</option> 
                                <option value="UZ">Uzbekistan</option> 
                                <option value="VU">Vanuatu</option> 
                                <option value="VE">Venezuela, Bolivarian Republic Of</option> 
                                <option value="VN">Viet Nam</option> 
                                <option value="VG">Virgin Islands, British</option> 
                                <option value="VI">Virgin Islands, U.s.</option> 
                                <option value="WF">Wallis And Futuna</option> 
                                <option value="EH">Western Sahara</option> 
                                <option value="YE">Yemen</option> 
                                <option value="ZM">Zambia</option> 
                                <option value="ZW">Zimbabwe</option> 
                            </select>
                        </div>

                        
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="phone">Teléfono</label>
                            <input type="text" class="form-control" id="phone" name="personPagador_phone" placeholder="Ingresa teléfono">
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                            <label for="mobile">celular</label>
                            <input type="text" class="form-control" id="mobile" name="personPagador_mobile" placeholder="Ingresa celular">
                        </div>
                        <div class="form-group col-xs-12 col-sm-12">
                            <h4><p class="text-center">Entidad Bancaria </p></h4>
                        </div>
                        <!-- cargando lista de bancos aceptados por pse -->
                    	<div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8">
        				    <label for="bankInterface">indique el tipo de cuenta con la cual realizará el pago</label>
        				    <select class="form-control" id="bankInterface" name="bankInterface" required="">
        						  <option value="0">Personas</option>
        						  <option value="1">Empresas</option>
        					</select>
        				</div>
        				<div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
        				    <label for="bankCode">Seleccione del listado la entidad finaciera con la que desea realizar el pago</label>
        				    <select class="form-control" id="bankCode" name="bankCode" required="">
        						@foreach ($listBank as $bank)
        						  <option value="{{$bank->bankCode}}">{{$bank->bankName}}</option>
        						@endforeach
        					</select>
        				</div>
        				<div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
                        	<input type="submit" class="btn-success btn" value="Pagar con PSE">
                        </div>
                    </form>
                    <br>
                </div>
                
            </div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
	</body>
</html>