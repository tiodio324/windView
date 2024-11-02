<?php include $this->resolve("partials/_header.php"); ?>

<main>
    <div class="mainContainer">
        <div class="latestProductBox">
            <div class="latestProductContainer">
                <div class="latestProductInfo">
                    <p class="latestProductQuote">Get Tired Less and Learn More!</p>
                    <p class="latestProductSlogan">Unlock a New Dimension<br>of Reading</p>
                    <p class="latestProductText">Clip Reader is a unique format for efficient reading<br>of e-books.</p>
                    <div class="latestProductBtns">
                        <button class="latestProductBtnDonwload" onclick="window.location.href='apk/clipReader/clipreader-1.0.apk';">Download</button>
                        <button class="latestProductBtnProducts" onclick="window.location.href='/products';">Products</button>
                    </div>
                </div>
                <div class="latestProductImgContainer">
                    <img class="latestProductImg" src="assets/img/latestProduct.png" onclick="this.requestFullscreen();" alt="Image"/>
                </div>
            </div>
        </div>
        <div class="futurePlanBox">
            <div class="futurePlanContainer">
                <div class="futurePlanAdvantagesContainer">
                    <p class="futurePlanTitle">User-Focused App Development</p>
                    <p class="futurePlanText">At windView, we're passionate about crafting Android apps that are not just functional, but delightful to use. As we look towards the future, our software development roadmap centers around enhancing user experience across all our products.</p>
                    <p class="futurePlanText">Here's a glimpse into what we're working on:</p>
                </div>
                <div class="futurePlanSchemeContainer">
                    <p><b>Intuitive Design, Effortless Navigation:</b> We're investing in cutting-edge UI/UX design principles to create apps that are incredibly intuitive and easy to navigate.</p>
                    <p><b>Performance You Can Feel:</b> We know that speed and responsiveness are crucial for a great mobile experience. So, we're optimizing our codebase.</p>
                    <img src="assets/img/futurePlanScheme.png" alt="Scheme" />
                    <p><b>Building for Accessibility:</b> We're committed to making our apps accessible to everyone. Expect to see a renewed focus on accessibility features, ensuring that all users can enjoy our apps to the fullest.</p>
                    <p><b>A Collaborative Future:</b> We value your feedback! We'll be implementing new channels for users to share their thoughts and ideas, shaping the future of windView apps together.</p>
                </div>
            </div>
        </div>
        <div class="helpUsBox">
            <div class="helpUsContainer">
                <div class="helpUsInfoContainer">
                    <p>Please help us improve our community</p>
                    <button onclick="window.location.href='/donate';">Help Us</button>
                </div>
                <img src="assets/img/helpUsGirl.png" alt="Image"/>
            </div>
        </div>
    </div>
</main>

<?php include $this->resolve("partials/_footer.php"); ?>