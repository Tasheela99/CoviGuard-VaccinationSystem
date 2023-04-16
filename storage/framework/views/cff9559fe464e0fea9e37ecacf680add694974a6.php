<style>
    /*---------------------------------------Home-page-styles-----------------------------------------*/
    .home-page-outer,
    .about-page-outer,
    .faq-page-outer,
    .contacts-page-outer,
    .resources-page-outer,
    .doctor-page-outer {
        width: 100%;
        height: 100vh;
        font-family: Ubuntu;
    }

    .main-content {
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .page-description,
    .page-image {
        width: 100%;
        height: 100%;
        padding: 20px;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .home-title {
        color: blue;
        font-size: 50px;
        font-weight: 900;
    }
    .page-title{
        margin-top: 50px;
    }
    .page-title h1{
        margin-top: 5px;
        font-size: 70px;
        color: darkblue;
        font-weight: 900;

    }
    .home-description {
        text-align: justify;
    }
    .btn{
        width: 200px;
    }
    /*---------------------------------------Home-page-styles-----------------------------------------*/
    /*---------------------------------------About-page-styles-----------------------------------------*/
    .about-title {
        color: blue;
        font-size: 50px;
    }

    .about-description {
        text-align: justify;
    }
    .about-btn{
        color: white;
    }
    /*---------------------------------------About-page-styles-----------------------------------------*/
    /*---------------------------------------FAQ-page-styles-----------------------------------------*/
    /*---------------------------------------FAQ-page-styles-----------------------------------------*/
    /*---------------------------------------Contacts-page-styles-----------------------------------------*/
    .contact-form-inner{
        width: 450px;
    }
    /*---------------------------------------Contacts-page-styles-----------------------------------------*/

    /*---------------------------------------Resource-page-styles-----------------------------------------*/

    .resource-page-boxes {
        display: flex;
    }

    .resource-page-boxes .card {
        margin: 5px;
    }
    .resources-page-outer,
    .faq-page-outer{
        background-image: url('images/background2.png');
        background-position: center;
        background-size: cover;
    }
    /*---------------------------------------Resource-page-styles-----------------------------------------*/
    /*---------------------------------------Doctor-page-styles-----------------------------------------*/

    .doc-area {
        width: 100vw;
        height: 700px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .doc {
        font-family: Ubuntu, serif;
        position: relative;
        overflow: hidden;
        padding: 20px;
        width: 1440px;
    }

    .doc-container {
        padding: 0 50px;
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
        height: 600px;
        align-items: center;
    }

    .doc-container::-webkit-scrollbar {
        display: none;
    }

    .doc-card {
        flex: 0 0 auto;
        width: 300px;
        height: 400px;
        margin-right: 40px;
        box-shadow: 0 0 10px darkblue;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        border-radius: 5px 5px 5px 5px;
    }

    .doc-image {
        position: relative;
        width: 100%;
        height: 250px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 5px 5px 0 0;
        background-size: cover;
        background-position: center;
    }

    .doc-info {
        width: 100%;
        height: 100%;
        padding: 20px;
    }

    .doc-name {
        text-transform: capitalize;
    }

    .doc-short-description {
        width: 100%;
        height: 20px;
        line-height: 20px;
        overflow: hidden;
        opacity: 0.5;
        text-transform: capitalize;
        margin: 5px 0;
    }

    .pre-btn,
    .nxt-btn {
        border: none;
        width: 10vw;
        height: 100%;
        position: absolute;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        /*background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #fff 100%);*/
        background: transparent;
        cursor: pointer;
        z-index: 8;
    }

    .pre-btn {
        left: 0;
    }

    .nxt-btn {
        right: 0;
    }

    .pre-btn img,
    .nxt-btn img {
        opacity: 0.2;
    }

    .pre-btn:hover img,
    .nxt-btn:hover img {
        opacity: 1;
    }

    .fa-caret-left,
    .fa-caret-right{
        font-size: 100px;
        color: blue;
    }
    /*---------------------------------------Doctor-page-styles-----------------------------------------*/
    /*---------------------------------------all-pages-icon-styles-----------------------------------------*/
    .fa-people-group,
    .fa-person-circle-question,
    .fa-headset,
    .fa-sitemap,
    .fa-user-doctor{
        padding-bottom: 5px;
        font-size: 35px;
        color: blue;
        border-bottom: 5px solid black;

    }

    .small-boxes{
        display: grid;
        grid-template-columns: auto auto auto;
    }

    .resource-box{
        width: 400px;
        height: 200px;
        box-shadow: 0 0 10px black;
        margin: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        border-radius: 10px

    }
    .resource-box .fas{
        font-size: 30px
    }


    /*---------------------------------------all-pages-icon-styles-----------------------------------------*/
    @media only screen and(max-width: 600px){
        .home-image{
            width: 20px;
        }
    }

</style>
<?php /**PATH C:\laragon\www\CoviGuardFinal\resources\views/layouts/welcome-page-styles.blade.php ENDPATH**/ ?>