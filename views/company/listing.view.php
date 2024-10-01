<div class="listing-main">
    <h2>Get Your Company Listed</h2>


    <form action="/list" class="listing-form" method="POST" enctype="multipart/form-data">
        <h3>Company Information</h3>
        <div class="form-group">
            <div class="input-group">
                <label for="">Name of Company/Business</label>
                <input type="text" name="company_name" id="" required>
            </div>
            <div class="input-group">
                <label for="">Industry - Sector</label>
                <select id="industrySelect" name="industry" required>
                    <option value="agriculture">Agriculture</option>
                    <option value="automotive">Automotive</option>
                    <option value="aviation">Aviation</option>
                    <option value="beauty_and_cosmetics">Beauty and Cosmetics</option>
                    <option value="biotechnology">Biotechnology</option>
                    <option value="chemical">Chemical</option>
                    <option value="construction">Construction</option>
                    <option value="consulting">Consulting</option>
                    <option value="education">Education</option>
                    <option value="energy">Energy</option>
                    <option value="engineering">Engineering</option>
                    <option value="entertainment">Entertainment</option>
                    <option value="fashion">Fashion</option>
                    <option value="finance">Finance</option>
                    <option value="food_and_beverage">Food and Beverage</option>
                    <option value="healthcare">Healthcare</option>
                    <option value="hospitality">Hospitality</option>
                    <option value="insurance">Insurance</option>
                    <option value="internet">Internet</option>
                    <option value="legal">Legal</option>
                    <option value="logistics">Logistics</option>
                    <option value="manufacturing">Manufacturing</option>
                    <option value="media">Media</option>
                    <option value="mining">Mining</option>
                    <option value="pharmaceutical">Pharmaceutical</option>
                    <option value="publishing">Publishing</option>
                    <option value="real_estate">Real Estate</option>
                    <option value="retail">Retail</option>
                    <option value="software">Software</option>
                    <option value="sports">Sports</option>
                    <option value="technology">Technology</option>
                    <option value="telecommunications">Telecommunications</option>
                    <option value="textile">Textile</option>
                    <option value="travel_and_tourism">Travel and Tourism</option>
                </select>
            </div>
            <div class="input-group">
                <label for="">Business Registration number</label>
                <input type="text" name="business_number" id="" required>
            </div>
            <div class="input-group">
                <label for="">Phone Number</label>
                <input type="text" name="phone_number" id="" required>
            </div>
            <div class="input-group">
                <label for="">⁠Type of Business</label>
                <select id="businessTypeSelect" name="business_type" required>
                    <option value="soleProprietorship">Sole Proprietorship</option>
                    <option value="generalPartnership">Partnership (General & Limited)</option>
                    <option value="corporationC">Corporation (C Corp and S Corp)</option>
                    <option value="limitedLiabilityCompany">Limited Liability Company (LLC)</option>
                    <option value="cooperative">Co-operative</option>
                    <option value="nonProfitOrganization">Non-Profit Organization</option>

                </select>
            </div>
            <div class="input-group">
                <label for="">⁠Website</label>
                <input type="website" name="business_website" id="" required>
            </div>
            <div class="input-group">
                <label for="">⁠Years of Operating</label>
                <select id="yearsSelect" name="years_of_operating" required>
                    <?php
                    for ($i = 1; $i <= 199; $i++) {
                        echo "<option value=\"$i\">$i</option>";
                    }
                    ?>
                    <option value="200+">200+</option>
                </select>
            </div>
        </div>

        <h3>Financial Data</h3>
        <div class="form-group">
            <div class="input-group">
                <label for="">Company Revenue</label>
                <input type="range" name="company_revenue" id="sliderInput" class="sliderInput" min="0" max="500000000" step="1" required>
                <p>₵ <span id="selectedValue" class="selectedValue">250,000,000</span></p>
            </div>
            <div class="input-group">
                <label for="">Income Guarantee per day</label>
                <input type="range" name="income_per_day" id="sliderInput" class="sliderInput" min="0" max="20000" step="1" required>
                <p>₵ <span id="selectedValue" class="selectedValue">10,000</span></p>
            </div>
            <div class="input-group">
                <label for="">Losses made per day</label>
                <input type="range" name="losses_per_day" id="sliderInput" class="sliderInput" min="0" max="20000" step="1" required>
                <p>₵ <span id="selectedValue" class="selectedValue">10,000</span></p>
            </div>
            <div class="input-group">
                <label for="">Financial Statement</label>
                <label for="" id="filelabel" name="financial_statement"> Upload Financial Statement</label>
                <input type="file" name="financial_statement" id="financialStatement" required>
                <p id="fileNameDisplay"></p>

            </div>

        </div>

        <h3>Leadership</h3>
        <div class="form-group">
            <div class="input-group">
                <label for="">Name of Founder/CEO</label>
                <input type="text" name="founder_name" id="" required>
            </div>
            <div class="input-group">
                <label for="">Number of Executives</label>
                <select name="number_of_executive" required>
                    <?php
                    for ($i = 1; $i <= 50; $i++) {
                        echo "<option value=\"$i\">$i</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="input-group">
                <label for="">Number of Board of Directors or Shareholders
                </label>
                <select name="number_of_board" required>
                    <?php
                    for ($i = 1; $i <= 500; $i++) {
                        echo "<option value=\"$i\">$i</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="input-group">
                <label for="">⁠How many branches do you have?
                </label>
                <select name="number_of_branches">
                    <?php
                    for ($i = 1; $i <= 99; $i++) {
                        echo "<option value=\"$i\">$i</option>";
                    }
                    ?>
                    <option value="100+">100+</option>
                </select>
            </div>

        </div>

        <div class="form-group">
            <div class="input-group">
                <h3>Business Model</h3>
                <label for="">What product or services does your company offer to the Market?
                </label>
                <input type="text" name="product_and_services" id="" required>
            </div>

            <div class="input-group">
                <h3>Risk Factors</h3>
                <label for="">What are the potential risks and challenges the company may face?</label>
                <select id="riskFactorsSelect" name="risk_factors" required>
                    <option value="marketCompetition">Market Competition</option>
                    <option value="economicConditions">Economic Conditions</option>
                    <option value="technologicalChanges">Technological Changes</option>
                    <option value="regulatoryChanges">Regulatory Changes</option>
                    <option value="supplyChainDisruptions">Supply Chain Disruptions</option>
                    <option value="cybersecurityThreats">Cybersecurity Threats</option>
                    <option value="reputationalRisks">Reputational Risks</option>
                    <option value="talentManagement">Talent Management</option>
                    <option value="financialRisks">Financial Risks</option>
                    <option value="politicalInstability">Political Instability</option>
                    <option value="environmentalFactors">Environmental Factors</option>
                    <option value="pandemicsAndHealthCrises">Pandemics and Health Crises</option>
                </select>

            </div>

            <div class="input-group">
                <h3>Corporate Governance</h3>
                <label for="">How is this company governed and what are its policies regarding corporate responsibility?
                </label>
                <input type="text" name="company_policy" id="" required>
            </div>

        </div>

        <h3>Shareholders</h3>
        <div id="form-container">
            <div class="form-group" id="form-group">
                <div class="input-group">
                    <label for="">Name of Investor</label>
                    <input type="text" name="name_of_investor[]" id="" required>
                </div>
                <div class="input-group">
                    <label for="">Percentage Owned</label>
                    <input type="text" name="percentage_owned[]" id="" required>
                </div>
                <div class="input-group">
                    <label for="">Interest Structure(Weekly, Monthly, Annually)
                    </label>
                    <select name="interest_structure[]" id="" required>
                        <option value="Weekly">Weekly</option>
                        <option value="Monthly">Monthly</option>
                        <option value="Annually">Anually</option>
                    </select>
                </div>

            </div>
        </div>


        <button type="button" id="addRowBtn">Add Row <i class='bx bxs-plus-circle'></i> </button>
        <button type="submit" class="listBtn">Continue <i class='bx bxs-chevrons-right'></i> </button>

    </form>
</div>


<script>
    function formatNumberWithCommas(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    // Update the displayed value when the slider changes
    document.querySelectorAll('.sliderInput').forEach(function(slider) {
        slider.addEventListener('input', function() {
            const formattedValue = formatNumberWithCommas(this.value);
            this.nextElementSibling.querySelector('.selectedValue').textContent = formattedValue;
        });
    });





    // Trigger file input when the custom button is clicked
    document.getElementById('filelabel').addEventListener('click', function() {
        document.getElementById('financialStatement').click();
    });

    // Optional: Display the selected file name (just for demonstration purposes)
    document.getElementById('financialStatement').addEventListener('change', function() {
        const fileNameDisplay = document.getElementById('fileNameDisplay');
        if (fileNameDisplay) {
            fileNameDisplay.textContent = this.value.split('\\').pop(); // Display only the file name
        }
    });

    document.getElementById('financialStatement').addEventListener('change', function() {
        const selectedImage = document.getElementById('financialStatement');
        if (selectedImage && this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                selectedImage.src = e.target.result;
            };
            reader.readAsDataURL(this.files[0]);
        }
    });

    document.getElementById('addRowBtn').addEventListener('click', function() {
        // Clone the first input-group and append it to the formContainer
        var clonedInputGroup = document.querySelector('.form-group:first-child').cloneNode(true);
        document.getElementById('form-container').appendChild(clonedInputGroup);
    });
</script>