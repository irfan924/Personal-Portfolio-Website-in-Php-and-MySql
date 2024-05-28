<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand&family=Rubik&family=Rubik+Bubbles&display=swap');

    /* CSS Rest */
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
    }

    /* Global Variables */
    :root {
        --darkBgColor: #040b14;
        --textColor: #353535;
        --yellowColor: rgb(235, 235, 14);
        --themeColor: #00a78e;
        --lightThemeColor: #B5F1CC;
        --iconBGColor: #525252;
        --lightBgColor: #f7f7f7;
        --blueColor: #2192FF;
        --primaryFontSize: 20px;
        --secondayFontSize: 30px;
        --primaryFont: 'quicksand', serif;
        --secondaryFont: 'rubik', serif;
        --tertiaryFont: 'Rubik Bubbles';
    }

    a {
        text-decoration: none;
        color: var(--textColor);
        font-size: var(--secondayFontSize);
        font-family: var(--primaryFont);
        letter-spacing: 1px;
    }


    /* --------------- Home Style Start --------------- */
    .container {
        display: flex;
    }

    /* Sidebar Style */
    .sidebar {
        background: var(--darkBgColor);
        width: 300px;
        height: 100vh;
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .sidebar a {
        z-index: 100;
        position: absolute;
        top: 10px;
        left: 50px;
        color: var(--lightThemeColor);
        font-weight: 900;
    }

    .img-outer-view {
        margin-left: 150px;
        background: var(--lightBgColor);
        padding: 50px;
        border-radius: 50%;
        border: 10px solid var(--darkBgColor);
    }

    .sidebar .img-outer-view img {
        width: 250px;
        height: 250px;
        border-radius: 50%;
        object-fit: cover;
    }

    /* sub-container styling */
    .sub-container {
        background: var(--lightBgColor);
        width: 100vw;
        height: 100vh;
        margin-left: 300px;
    }

    .header nav {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        height: 56px;
        /* width: 100%; */
        background: var(--darkBgColor);
        gap: 30px;
        padding-right: 50px;

    }

    .header nav a {
        color: var(--lightBgColor);
        font-weight: 900;
        transition: 0.5s all;
    }

    .header nav a:hover {
        color: var(--yellowColor);
    }

    /* Content styling  */
    .content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-left: 200px;
        padding: 20px;
        height: 90vh;
        justify-content: space-between;
        align-items: center;
    }

    .content .first-para {
        font-size: var(--secondayFontSize);
        font-family: var(--primaryFont);
        color: var(--textColor);
    }

    .content .my-name {
        font-size: 50px;
        font-family: var(--secondaryFont);
        letter-spacing: 1px;
        color: var(--blueColor);
    }

    .content .second-para {
        font-size: var(--secondayFontSize);
        font-family: var(--primaryFont);
        color: var(--textColor);
        width: 50vw;
    }

    .buttons {
        display: flex;
        align-items: center;
        gap: 5rem;
        margin-top: 2rem;
    }

    .buttons a {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        background: var(--blueColor);
        font-size: var(--primaryFontSize);
        padding: 10px;
        border-radius: 5px;
        border: none;
        color: var(--lightBgColor);
        font-family: var(--primaryFont);
        letter-spacing: 1px;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
    }

    .buttons a:hover {
        background: var(--darkBgColor);
    }

    /* social icons styling */
    .social-icons {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    .social-icons a {
        width: 50px;
        height: 50px;
        background: var(--darkBgColor);
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: var(--lightBgColor);
        transition: 0.5s all;
    }

    .social-icons a:hover {
        background-color: var(--blueColor);
    }

    /* --------------- Home Style End --------------- */

    /* --------------- About Style Start --------------- */
    .about-container {
        width: 100%;
        background: var(--lightBgColor);
    }

    .common-navigation {
        width: 100%;
        height: 56px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: var(--darkBgColor);
        padding: 0px 50px;

    }

    .common-navigation a {
        color: var(--lightBgColor);
        font-weight: 900;
        transition: 0.5s all;
        margin: 0 10px;
    }

    .common-navigation a:hover {
        color: var(--yellowColor);
    }

    #about {
        padding: 70px 30px;
    }

    .subHeading {
        font-size: 35px;
        font-family: var(--secondaryFont);
        color: black;
        margin-bottom: 10px;
    }

    .divider {
        width: 80px;
        height: 4px;
        margin-bottom: 5px;
        background-color: var(--blueColor);
        border-radius: 5px;
    }

    .sub-para {
        color: var(--textColor);
        letter-spacing: .5px;
        font-size: var(--primaryFontSize);
        font-weight: 900;
        margin-top: 20px;
        font-family: var(--primaryFont);
    }

    .about-col {
        display: flex;
        gap: 20px;
        margin-top: 50px;
    }

    #about .about-col .img-col {
        flex-basis: 20%;
        text-align: center;
    }

    #about .about-col .img-col img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        object-fit: cover;
        border: 10px solid var(--blueColor);
    }

    #about .about-col .info-col {
        flex-basis: 80%;
    }

    #about .about-col .info-col h2 {
        color: var(--blueColor);
        font-family: var(--secondaryFont);
        font-weight: 700;
        font-size: 35px;
        letter-spacing: .5px;
        margin-top: -10px;
    }

    #about .about-col .info-col .icon-list-col {
        display: flex;
        margin-top: 20px;
        gap: 30px;
    }

    #about .about-col .info-col .icon-list-col ul li {
        list-style: none;
        margin: 15px 0;
        display: grid;
        align-items: center;
        grid-template-columns: 30px 110px 20px auto;
    }

    #about .about-col .info-col .icon-list-col ul li i {
        color: var(--blueColor);
        margin-right: 3px;

    }

    #about .about-col .info-col .icon-list-col ul li strong {
        color: var(--sideBGColor);
        font-weight: 700;
        margin-right: 4px;
        font-family: var(--primaryFont);
        font-size: var(--primaryFontSize);
    }

    #about .about-col .info-col .icon-list-col ul li span {
        color: var(--textColor);
        font-weight: 900;
        font-size: var(--primaryFontSize);
        font-family: var(--primaryFont);
    }

    /* Skill Section Start */

    #skill {
        padding: 70px 30px;
    }

    #skill .skill-row {
        margin-top: 35px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
    }

    #skill .skill-row .skill-box .skill-info {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 4px;
    }

    #skill .skill-row .skill-box .skill-info h2 {
        color: var(--sideBGColor);
        font-weight: 600;
        font-size: 15px;
        font-size: var(--primaryFontSize);
        font-family: var(--primaryFont);
    }

    #skill .skill-row .skill-box .skill-outer-line {
        width: 100%;
        height: 10px;
        background-color: lightgray;
        border-radius: 15px;
    }

    #skill .skill-row .skill-box .skill-outer-line .skill-inner-line {
        height: 10px;
        background-color: var(--themeColor);
        border-radius: 20px;
    }

    /* Facts Section start */
    #facts {
        padding: 50px 30px;
    }

    #facts .fact-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 30px;
        margin: 50px 0px;
    }

    #facts .fact-row i {
        color: var(--themeColor);
        font-size: 40px;
    }

    #facts .fact-row strong {
        color: var(--sideBGColor);
        font-size: 30px;
        margin-left: 5px;
        font-weight: 600;
        font-family: var(--primaryFont);
    }

    #facts .fact-row p {
        color: var(--textColor);
        font-weight: 800;
        font-size: var(--primaryFontSize);
        font-family: var(--primaryFont);
    }

    /* --------------- About Style End --------------- */

    /* --------------- Portfolio Style Start --------------- */
    .folio-container {
        width: 100%;
        background: var(--lightBgColor);
    }

    #portfolio {
        padding: 70px 30px;
    }

    #portfolio .port-row {
        margin-top: 50px;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 35px;
        padding: 0 20px;
    }

    #portfolio .port-row .port-item {
        position: relative;
        border-radius: 30px;
        width: 300px;
        height: 300px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 20%);
    }

    #portfolio .port-row .port-item .port-img img {
        width: 300px;
        height: 300px;
        object-fit: cover;
        border-radius: 10px;
    }

    #portfolio .port-row .port-item .port-info {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--blueColor);
        padding: 0 15px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
        transform: scale(0);
        transition: .3s;
        border-radius: 10px;
        visibility: hidden;
    }

    #portfolio .port-row .port-item:hover .port-info {
        transform: scale(1);
        visibility: visible;
    }

    #portfolio .port-row .port-item .port-info h4 {
        color: var(--lightBgColor);
        font-size: 25px;
        font-weight: 600;
        font-family: var(--primaryFont);
    }

    #portfolio .port-row .port-item .port-info .port-info-para {
        color: var(--lightBgColor);
        font-size: 12px;
        font-family: var(--secondaryFont);
    }

    #portfolio .port-row .port-item .port-info a {
        text-decoration: none;
        display: inline-block;
        font-size: 25px;
        width: 45px;
        height: 45px;
        background-color: var(--lightThemeColor);
        border-radius: 50%;
        color: var(--darkBgColor);
        line-height: 46px;
        transition: 0.4s;
    }

    #portfolio .port-row .port-item .port-info a:hover {
        background-color: var(--blueColor);
    }

    /* --------------- Portfolio Style End --------------- */

    /* --------------- Blogs Style Start --------------- */
    .blog-container {
        background: var(--lightBgColor);
        min-height: 100vh;
    }

    #blogs {
        padding: 70px ;
    }

    #blogs-content {
        margin-top: 50px;
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .blog {
        padding: 20px;
        background: var(--lightThemeColor);
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .blog-title {
        font-size: 24px;
        font-family: var(--secondaryFont);
        letter-spacing: 1px;
        color: var(--blueColor);
        text-decoration: underline;
    }

    .blog-para {
        font-size: 18px;
        font-family: var(--primaryFont);
        letter-spacing: 0.5px;
        font-weight: 900;
    }

    .blog:nth-child(even) {
        background: #e1ffed;
    }

    .read-more-btn {
        font-size: 20px;
        font-weight: 900;
        background: var(--blueColor);
        max-width: 200px;
        text-align: center;
        padding: 10px;
        color: var(--lightBgColor);
        cursor: pointer;
        border-radius: 2px;
        transition: 0.4s all ease-in-out;
    }

    .read-more-btn:hover {
        background: var(--darkBgColor);
    }

    /* --------------- Blogs Style End --------------- */
    /* --------------- Contact Style Start --------------- */
    .contact-container {
        background: var(--lightBgColor);
    }

    #contact {
        padding: 70px 30px;
    }

    #contact .contact-row {
        margin-top: 50px;
        display: flex;
        gap: 20px;
        width: 100%;
    }

    #contact .contact-row .contact-left {
        flex-basis: 40%;
        min-width: 40%;
        background-color: white;
        box-shadow: 0 0 20px rgba(0, 0, 0, 20%);
        border-radius: 10px;
        padding: 30px;
    }

    #contact .contact-row .contact-left .icon-box {
        display: flex;
        gap: 15px;
        align-items: center;
        margin: 30px 0;
    }

    #contact .contact-row .contact-left .icon-box .icon i {
        width: 50px;
        height: 50px;
        color: var(--blueColor);
        border-radius: 50%;
        border: 2px solid var(--blueColor);
        text-align: center;
        line-height: 47px;
        font-size: 20px;
        transition: .4s;
    }

    #contact .contact-row .contact-left .icon-box:hover .icon i {
        color: var(--sideBGColor);
        background-color: var(--blueColor);
    }

    #contact .contact-row .contact-left .icon-box .info h4 {
        font-size: 24px;
        color: var(--sideBGColor);
        font-weight: 600;
        font-family: var(--primaryFont);
    }

    #contact .contact-row .contact-left .icon-box .info h4+p {
        color: var(--textColor);
        font-size: 20px;
        font-weight: 500;
        font-family: var(--secondaryFont);
    }

    /* Contact Right Side */
    #contact .contact-row .contact-right {
        flex-basis: 60%;
        min-width: 60%;
        background-color: white;
        box-shadow: 0 0 20px rgba(0, 0, 0, 20%);
        border-radius: 10px;
        padding: 30px;
    }

    #contact .contact-row .contact-right form input,
    #contact .contact-row .contact-right form textarea {
        display: block;
        width: 100%;
        margin: 30px 0;
        font-size: 18px;
        font-weight: 900;
        color: var(--textColor);
        font-family: var(--primaryFont);
        padding: 10px 20px;
        border: 2px solid lightgray;
        border-radius: 5px;
        outline: none;
        resize: none;
        transition: .5s;
    }

    #contact .contact-row .contact-right form input:focus,
    #contact .contact-row .contact-right form textarea:focus {
        border: 4px solid var(--blueColor);
    }

    #contact .contact-row .contact-right form input[type=submit] {
        background-color: var(--blueColor);
        color: var(--lightBgColor);
        border: 2px solid var(--blueColor);
        border-radius: 5px;
        font-size: 24px;
        font-weight: 900;
        font-family: var(--secondaryFont);
        letter-spacing: 1px;
        cursor: pointer;
    }

    /* --------------- Contact Style End --------------- */
</style>