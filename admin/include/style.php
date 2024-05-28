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
        --whiteColor: #fff;
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
        font-family: var(--primaryFont);
        letter-spacing: 1px;
    }

    .container {
        width: 100%;
        height: 100%;
        background: var(--lightBgColor);
    }

    /* Navigation Style Start */
    .navigation {
        width: 300px;
        height: 100vh;
        background: var(--darkBgColor);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 10;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        padding: 20px 0;
    }

    .navigation img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
    }

    .profile-name {
        font-size: var(--secondayFontSize);
        color: var(--lightBgColor);
        font-family: var(--primaryFont);
    }

    .navbar {
        display: flex;
        flex-direction: column;
        width: 90%;
        gap: 15px;
    }

    .navbar a {
        color: var(--lightBgColor);
        display: flex;
        align-items: center;
        gap: 20px;
        font-size: 20px;
    }

    .navbar a i {
        border-radius: 50%;
        border: 2px solid var(--lightBgColor);
        padding: 10px;
    }

    .footer-detail {
        color: var(--lightBgColor);
        font-family: var(--secondaryFont);
        font-size: 16px;
        transition: 0.5s all;
    }

    .footer-detail:hover {
        color: var(--blueColor);
    }

    /* Navigation Style End */

    /* Main Content Styling Start */
    .main-content {
        margin-left: 300px;
    }

    /* Dashboard Style Start */
    #dashboard {
        padding: 20px 70px;
        height: 100vh;
    }

    .sub-heading {
        font-size: var(--secondayFontSize);
        font-family: var(--secondaryFont);
        color: var(--darkBgColor);

    }

    .divider {
        width: 100px;
        height: 5px;
        border-radius: 5px;
        background: var(--blueColor);
    }

    .dashboard-content {
        width: 100%;
        /* background: var(--blueColor); */
        padding: 50px;
        display: flex;
        flex-direction: column;
        gap: 50px;
    }

    .box-div {
        width: 100%;
        display: flex;
        gap: 20px;
    }

    .dash-box {
        border: 4px solid var(--blueColor);
        flex: 1;
        display: grid;
        grid-template-columns: 50px auto;
        align-items: center;
        padding: 20px;
        border-radius: 10px;
    }

    .dash-box .icon {
        font-size: 60px;
        color: var(--darkBgColor);
    }

    .dash-box-detail {
        display: flex;
        flex-direction: column;
        gap: 30px;
        align-items: center;
    }

    .dash-box-detail-title,
    .dash-box-detail-para {
        font-size: var(--secondayFontSize);
        font-family: var(--secondaryFont);
        color: var(--blueColor);
    }

    .dash-box-detail-title {
        font-size: 50px;
    }

    .dash-detail {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 100%;
    }

    .dash-detail-box {
        border: 4px solid var(--blueColor);
        border-radius: 8px;
        padding: 30px 20px;
        display: flex;
        justify-content: space-between;
    }

    .dash-detail-box h1 {
        font-family: var(--primaryFont);
        font-size: var(--secondayFontSize);
    }

    /* Dashboard Style End */
    /* =================== */

    /* Projects Style Start */
    #projects {
        padding: 20px 70px;
        height: 100vh;
        background: var(--whiteColor);
    }

    #project-form {
        margin: 50px 0;
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 100%;
    }

    .form-box {
        display: grid;
        grid-template-columns: 250px 20px auto;
    }

    .form-box label,
    .form-box input,
    .form-box strong,
    .form-box textarea {
        font-size: var(--secondayFontSize);
        font-family: var(--secondaryFont);
    }

    .form-box input,
    .form-box textarea {
        outline: none;
        background: transparent;
        border: none;
        border: 2px solid var(--darkBgColor);
        border-radius: 5px;
        outline: none;
        resize: none;
        transition: .5s;
        padding: 5px 10px;
    }

    .form-box input:focus,
    .form-box textarea:focus {
        border: 2px solid var(--blueColor);

    }

    #submitBtn {
        height: 56px;
        border: none;
        background: var(--blueColor);
        width: 78.5%;
        border-radius: 8px;
        align-self: flex-end;
        font-size: 34px;
        font-family: var(--primaryFont);
        color: var(--lightBgColor);
    }

    /* Project Style End */
    /* ================ */

    /* Skills Style Style */
    #skill {
        padding: 20px 70px;
        background: var(--lightBgColor);
        height: 100vh;
    }

    .radio-box {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-top: 10px;
    }

    .radios {
        display: flex;
        gap: 30px;
        font-size: var(--secondayFontSize);
        font-family: var(--primaryFont);
    }

    .radios input {
        font: inherit;
        color: var(--blueColor);
        width: 1.15em;
        height: 1.15em;
        border: 0.15em solid var(--blueColor);
        border-radius: 50%;
    }

    /* Skills Style End */
    /* =============== */

    /* Blogs Style Start */
    #blogs {
        height: 100vh;
        background: var(--whiteColor);
        padding: 20px 70px;
    }

    /* Blogs Style End */
    /* ============== */

    /* Clients Style Start */
    #clients {
        height: 100vh;
        padding: 20px 70px;
    }

    /* Clients Style End */
    /* ================ */

    /* Pending Orders Style Start */
    #pending-orders {
        height: 100vh;
        padding: 20px 70px;
        background: var(--whiteColor);
    }

    /* Pending Orders Style End */

    /* Login Page Design Start */
    .login-container {
        width: 100vw;
        height: 100vh;
        background: linear-gradient(90deg, var(--blueColor), var(--darkBgColor));
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-content {
        background: #fff;
        width: 400px;
        height: 550px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        padding: 30px 0;
        border-radius: 5px;
        box-shadow: 0 0 20px #040b14;
        position: relative;
    }

    #login-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 90%;
        padding: 0 10px;
        position: relative;
    }

    .login-form-box {
        display: grid;
        grid-template-columns: 120px auto;
    }

    .login-form-box label,
    .login-form-box input {
        width: 100%;
        font-size: var(--primaryFontSize);
        font-family: var(--secondaryFont);
        padding: 10px 5px;
        border-radius: 5px;
    }

    .login-form-box input {
        border: 2px solid var(--iconBGColor);
        background: transparent;
        outline: none;
        transition: 0.5s all ease-in-out;
    }

    .login-form-box input:focus {
        border: 2px solid var(--blueColor);
    }

    #login-form input[type=submit] {
        font-size: var(--secondayFontSize);
        width: 100%;
        padding: 5px;
        font-family: var(--primaryFont);
        color: var(--whiteColor);
        background: var(--blueColor);
        border: none;
        cursor: pointer;
        border-radius: 5px;
        transition: 0.5s all ease-in-out;
    }

    #login-form input[type=submit]:hover {
        background-color: var(--darkBgColor);
    }

    .error{
        position: absolute;
        top: 200px;
        left: 47%;
        z-index: 20;
        font-size: 16px;
        color: red;
        font-family: var(--primaryFont);

    }

    /* Login Page Design End */
    /* Summary */

    .summary-header{
        background: var(--darkBgColor);
        height: 56px;
        display: flex;
        justify-content: flex-end;
        padding: 0 30px;
        align-items: center;
        gap: 20px;
    }
    .summary-header a{
        color: var(--whiteColor);
        font-weight: 800;
        font-size: 20px;
    }

    .common-heading{
        margin: 10px 35px;
        font-family: var(--secondaryFont);
    }

    .common-content{
        width: 100%;
        margin: 20px 0;
        position: relative;
        display: flex;
        justify-content: center;
    }
    .common-content table{
        width: 95%;
        border: 1px solid grey;
    }
    .common-content table thead tr{
        background: var(--blueColor);
        text-align: center;
    }
    .common-content table thead tr td{
        padding: 10px;
        color: #fff;
        font-family: var(--secondaryFont);
    }
    .common-content table tbody tr{
        background: var(--lightBgColor);
        text-align: center;
    }
    .common-content table tbody tr:nth-child(even){
        background: var(--lightThemeColor);
        
    }
    .common-content table tbody tr td{
        padding: 10px;
        font-family: var(--primaryFont);
    }


</style>