<div class="option-main <?= isset($_SESSION['user']['user_no']) ? 'user-option-main' : '' ?>">
    <h2>News & Insights</h2>
    <div class="options-container">
        <button class="option active" onclick="showSection(1)" id="option1">Economic</button>
        <button class="option" onclick="showSection(2)" id="option2">Agriculture</button>
        <button class="option" onclick="showSection(3)" id="option3">Development</button>
        <button class="option" onclick="showSection(4)" id="option4">Investment</button>
    </div>

    <div class="news-container section economic" id="section1" style="display: grid;">
        <div class="news-card">
            <img src="/public/resource/images/gdp.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Ghana's GDP Growth Surpasses Projections in Q1 2024</h3>
                <p>Ghana's economy outperformed expectations, with a robust GDP growth of X% in the first quarter of 2024. Factors such as increased investment, stable inflation, and a growing services sector contributed to this positive economic momentum.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Foreign Direct Investment Surges in Key Sectors</h3>
                <p> Key sectors in Ghana, including energy and technology, experience a significant surge in foreign direct investment. This influx of capital reflects international confidence in Ghana's economic stability and potential for high returns.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/jobs.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Government Initiatives Drive Job Creation and Economic Expansion</h3>
                <p>Government-led initiatives focusing on job creation and economic expansion yield positive results. Various programs and policies contribute to reducing unemployment and fostering sustainable growth in key industries.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/inflation.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Stable Inflation Rates Provide Favorable Investment Environment</h3>
                <p>Ghana maintains stable inflation rates, creating a favorable environment for investors. The Central Bank's effective monetary policies contribute to price stability, instilling confidence in both local and international investors.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Trade Surplus Boosts Ghana's External Reserves</h3>
                <p>Ghana achieves a trade surplus, bolstering the country's external reserves. Increased exports and prudent trade policies contribute to a strengthened economic position on the global stage.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Digital Transformation Drives Economic Modernization</h3>
                <p>Ghana's commitment to digital transformation accelerates economic modernization. Increased adoption of technology in various sectors enhances efficiency, innovation, and overall competitiveness in the global market.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>

    </div>
    <div class="news-container section agriculture" id="section2">
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Cocoa Prices Reach Record High, Boosting Ghana's Economy</h3>
                <p> International cocoa prices hit a record high, providing a significant boost to Ghana's economy. As one of the world's largest cocoa producers, this surge positively impacts the livelihoods of farmers and strengthens the agricultural sector.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Agricultural Innovation Spurs Growth in Non-Traditional Exports</h3>
                <p>Ghana's focus on agricultural innovation leads to a surge in non-traditional exports. Diversification of crops and adoption of modern farming techniques contribute to increased revenue from exports.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Aquaculture Investment Soars, Driving Growth in Fish Exports</h3>
                <p>Increased investment in aquaculture propels growth in Ghana's fish exports. The aquaculture sector flourishes, providing sustainable solutions to meet both local demand and international market needs.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Government Initiatives Boost Smallholder Farmers' Productivity</h3>
                <p>Government initiatives supporting smallholder farmers result in increased productivity. Programs focusing on access to resources, training, and technology empower farmers, contributing to overall agricultural growth.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Agribusiness Investment Spurs Growth in the Shea Butter Industry</h3>
                <p>Agribusiness investments drive growth in the shea butter industry. Ghana leverages its position as a leading shea butter producer, attracting investments that benefit local communities and contribute to global demand.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Sustainable Agriculture Practices Gain Traction in Ghana</h3>
                <p>Sustainable agriculture practices gain momentum in Ghana, with farmers adopting eco-friendly techniques. This shift towards sustainability aligns with global trends and positions Ghana as a responsible and environmentally conscious agricultural producer.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>

    </div>
    <div class="news-container section development" id="section3">
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Major Road Infrastructure Projects Transform Transportation Networks</h3>
                <p>Ongoing road infrastructure projects redefine Ghana's transportation landscape, enhancing connectivity and accessibility. Improved road networks support economic activities and create opportunities for regional development.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Green Energy Initiatives Drive Renewable Infrastructure Projects</h3>
                <p>Green energy initiatives lead to an increase in renewable infrastructure projects. Ghana's commitment to sustainable energy sources results in the development of wind, solar, and hydropower projects, contributing to a greener future.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Smart Cities Development Takes Center Stage in Urban Planning</h3>
                <p>Ghana embraces smart cities development, incorporating technology to enhance urban living. Innovative urban planning initiatives aim to create sustainable, efficient, and technologically advanced cities.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Port Expansion Projects Position Ghana as a Regional Trade Hub</h3>
                <p>Expansion projects at key ports position Ghana as a regional trade hub. Upgrades and expansions enhance maritime infrastructure, facilitating increased trade activities and strengthening Ghana's economic ties with neighboring countries.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Affordable Housing Initiatives Address Urban Housing Challenges</h3>
                <p>Government-backed affordable housing initiatives tackle urban housing challenges. Projects aim to provide quality and affordable housing options, contributing to improved living standards and sustainable urban development.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Educational Infrastructure Projects Enhance Learning Environments</h3>
                <p>Investment in educational infrastructure projects enhances learning environments across the country. Modernized schools and educational facilities contribute to improved access to quality education and human capital development.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>

    </div>
    <div class="news-container section investment" id="section4">
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Navigating Investment Opportunities in Ghana's Tech Sector</h3>
                <p>Insights into the burgeoning tech sector in Ghana offer investors guidance on
                    navigating opportunities. The article provides strategic tips for those looking to invest in the country's dynamic and rapidly growing technology industry.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Diversification Strategies for a Robust Investment Portfolio</h3>
                <p>Exploring the importance of diversification, the article provides investors with strategies to build a robust and well-balanced investment portfolio. Tips include spreading investments across different sectors and asset classes for risk mitigation.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Real Estate Investment Tips for Ghana's Growing Property Market</h3>
                <p>As Ghana's real estate market flourishes, the article offers valuable tips for investors looking to capitalize on property opportunities. Insights cover key areas such as location analysis, market trends, and considerations for successful real estate investment.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Navigating Risk in Emerging Markets: Ghana Investment Guide</h3>
                <p>Providing a comprehensive guide to navigating risks in emerging markets, the article focuses on Ghana's investment landscape. It offers strategic insights into understanding and managing risks associated with investments in the country.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Sustainable Investing in Ghana: ESG Factors and Beyond</h3>
                <p>Highlighting the importance of sustainable investing, the article explores environmental, social, and governance (ESG) factors in Ghana's context. Investors gain insights into making ethical and responsible investment decisions aligned with sustainable practices.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>
        <div class="news-card">
            <img src="/public/resource/images/background.jpg" alt="" class="news-img">
            <div class="news-content">
                <h3>Navigating Forex Markets: Tips for Currency Traders in Ghana</h3>
                <p>For investors engaged in currency trading, the article provides tips for navigating the forex markets in Ghana. It covers factors influencing exchange rates, risk management strategies, and considerations for successful currency trading.</p>
                <a href="" class="read-more">Read more</a>
            </div>
        </div>

    </div>
</div>

<script>
    function showSection(sectionNumber) {
        // Hide all sections
        hideAllSections();

        // Show the clicked section
        document.getElementById(`section${sectionNumber}`).style.display = "grid";
        document.getElementById(`option${sectionNumber}`).classList.add("active");
    }

    function hideAllSections() {
        // Hide all sections
        const sections = document.getElementsByClassName("section");
        for (let i = 0; i < sections.length; i++) {
            sections[i].style.display = "none";
        }

        const options = document.getElementsByClassName("option");
        for (let i = 0; i < sections.length; i++) {
            options[i].classList.remove('active');
        }
    }
</script>