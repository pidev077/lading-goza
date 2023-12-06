<?php
/*
Template Name: Landing
*/

?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo:wght@500;600&family=Open+Sans:wght@500&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<style type="text/css">
  *{
    box-sizing: border-box;
  }

  h2.landing-heading{
    color: #222;
    text-align: center;
    font-family: 'Poppins';
    font-size: 40px;
    font-style: normal;
    font-weight: 600;
    line-height: 114.5%; 
    margin:0;
  }

  body.lading-goza{
    margin:0px;
  }
  section.landing-hero {
    background-size: cover;
    padding: 200px 50px;
    background-position: center;
  }
  .landing-container {
    text-align: center;
    max-width: 770px;
    margin: 0 auto;
  }
  section.landing-hero h2{ 
    color: #222; 
    text-align: center;
    font-family: Poppins;
    font-size: 46px;
    font-style: normal;
    font-weight: 700;
    line-height: 63px;
  }
  section.landing-hero p{
    color: #555;
    text-align: center;
    font-family: Lato;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 36px;
  }
  .hero-section--purchase {
    margin-top: 30px;
  }
  .hero-section--purchase a,.about-section--purchase a{
    display: inline-block;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: -webkit-transform;
    transition-property: transform;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    border-radius:10px;
  }
  .hero-section--purchase a,.about-section--purchase a{
    display: inline-block;
    position: relative;
    overflow: hidden;
  }
  .hero-section--purchase a:after,.about-section--purchase a:after{
    background: #fff;
    content: "";
    height: 200px;
    left: -160px;
    opacity: 0.2;
    position: absolute;
    top: -50px;
    transform: rotate(35deg);
    transition: all 950ms cubic-bezier(0.19, 1, 0.22, 1);
    width: 50px;
    z-index: 1;
  }
  .hero-section--purchase a:hover:after,.about-section--purchase a:hover:after{
    left: 130%;
    transition: all 950ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .hero-section--purchase a:hover, .about-section--purchase a:hover{
    -webkit-transform: translateY(-5px);
    -ms-transform: translateY(-5px);
    transform: translateY(-5px);
    box-shadow: 0px 5px 9px rgba(0, 0, 0, 0.2);
  }

  /* css service section */

  .ld-serivces-section .ld-serivces-section-list-items{
    display: flex;
  }

  .ld-serivces-section-list-items .item-service{
    width: calc(100% / 3);
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    padding: 72px 20px;

    position: relative;
    overflow: hidden;

    display: inline-block;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: -webkit-transform;
    transition-property: transform;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  }
  .ld-serivces-section-list-items .item-service:hover{
    -webkit-transform: translateY(-5px);
    -ms-transform: translateY(-5px);
    transform: translateY(-5px);
    box-shadow: 2px 3px 8px rgba(0, 0, 0, 0.2)
  }
  .ld-serivces-section-list-items .item-service:after{
    background: #fff;
    content: "";
    height: 400px;
    left: -160px;
    opacity: 0.2;
    position: absolute;
    top: -50px;
    transform: rotate(35deg);
    transition: all 950ms cubic-bezier(0.19, 1, 0.22, 1);
    width: 50px;
    z-index: 1;
  }
  .ld-serivces-section-list-items .item-service:hover:after{
    left: 130%;
    transition: all 950ms cubic-bezier(0.19, 1, 0.22, 1);
  }

  .ld-serivces-section-list-items .item-service--documentation{
    background: #E35433;
  }

  .ld-serivces-section-list-items .item-service--video_guide{
    background: #823DCD;
  }

  .ld-serivces-section-list-items .item-service--support{
    background: #70B51E;
  }

  .ld-serivces-section-list-items .item-service a{
    text-decoration: none;
  }

  .ld-serivces-section-list-items .item-service .item-service--inner{
    display: flex;
    width: 100%;
    max-width: 333px;
    margin-left: auto;
    margin-right: auto;
  }

  .ld-serivces-section-list-items .item-service .item-service--icon{
    padding-right: 22px;
  }

  .ld-serivces-section-list-items .item-service--heading{
    font-size: 18px;
    font-style: normal;
    font-weight: 600;
    line-height: 133.2%; 
    font-family: 'Poppins';
    color: #fff;
    margin: 0;
  }

  .ld-serivces-section-list-items .item-service--text{
    color: #FFF;
    font-family: 'Lato', sans-serif;
    font-size: 17px;
    font-style: normal;
    font-weight: 500;
    line-height: 30px;
    margin: 5px 0 0 0;
  }

  /* css features-serivces-section */

  .features-serivces-section{
    padding: 109px 0;
  }

  .features-serivces-section > .container{
    width: 100%;
    max-width: 1200px;
    padding-left: 15px;
    padding-right: 15px;
    margin-left: auto;
    margin-right: auto;
  }

  .features-serivces-section-header{
    display: flex;
    align-content: center;
    align-items: center;
  }

  .features-serivces-section-header .features-serivces-section--heading{
    margin: 0;
    color: #222;
    font-family: 'Poppins';
    font-size: 36px;
    font-style: normal;
    font-weight: 600;
    line-height: 114.5%;
    max-width:383px;
  }

  .features-serivces-section-header .features-serivces-section--desc{
    padding-left:117px;
  }

  .features-serivces-section-header .features-serivces-section--desc a, .features-serivces-section-header .features-serivces-section--desc{
    color: #555;
    font-family: 'Lato', sans-serif;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 159%;
    margin: 0;
  }

  .features-serivces-section-header .features-serivces-section--desc a{
    text-decoration-line: underline;
  }

  .features-serivces-section .features-serivces-section-gallerys{
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
  }

  .features-serivces-section .features-serivces-section-gallerys{
    margin: 40px 0 0 0;
  }

  .features-serivces-section-gallerys .gallery-item{
    border-radius: 30px;
    position: relative;
    overflow: hidden;

    display: inline-block;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: -webkit-transform;
    transition-property: transform;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  }
  .features-serivces-section-gallerys .gallery-item:hover{
    -webkit-transform: translateY(-5px);
    -ms-transform: translateY(-5px);
    transform: translateY(-5px);
    box-shadow: 2px 3px 8px rgba(0, 0, 0, 0.2)
  }
  .features-serivces-section-gallerys .gallery-item:after{
    background: #fff;
    content: "";
    height: 500px;
    left: -160px;
    opacity: 0.2;
    position: absolute;
    top: -50px;
    transform: rotate(35deg);
    transition: all 950ms cubic-bezier(0.19, 1, 0.22, 1);
    width: 50px;
    z-index: 1;
  }
  .features-serivces-section-gallerys .gallery-item:hover:after{
    left: 130%;
    transition: all 950ms cubic-bezier(0.19, 1, 0.22, 1);
  }

  .features-serivces-section-gallerys .gallery-item img{
    width:100%;
    height:100%;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center;
    object-position: center;
    border-radius: 30px;
  }

  .features-serivces-section-gallerys .gallery-item:first-child{
    width: calc(60% - 15px);
  }

  .features-serivces-section-gallerys .gallery-item:nth-child(2){
    width: calc(40% - 15px);
  }

  .features-serivces-section-gallerys .gallery-item:last-child{
    width: calc(60% - 15px);
  }

  .features-serivces-section-gallerys .gallery-item:nth-child(3){
    width: calc(40% - 15px);
  }


  /* css prebuild-demo-section */
  .prebuild-demo-section{
    background: #F1F2F6;
    padding: 112px 0 120px 0;
  }

  .prebuild-demo-section .prebuild-demo-section-header-content{
    width: 100%;
    height: auto;
    max-width: 578px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
  } 

  .prebuild-demo-section .prebuild-demo-section--desc{
    color: #555;
    text-align: center;
    font-family: 'Lato', sans-serif;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: 159%;
    margin:10px 0 0 0;
  }

  .prebuild-demo-section > .container{
    width: 100%;
    max-width: 1600px;
    padding-left: 15px;
    padding-right: 15px;
    margin-left: auto;
    margin-right: auto;
  }

  .prebuild-demo-section-header-list-items{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    justify-content: center;
    gap: 30px;
  }
  .prebuild-demo-section-header-list-items .item-prebuild-demo-inner{
    display: inline-block;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: -webkit-transform;
    transition-property: transform;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);

    position: relative;
    overflow: hidden;
  }
  .prebuild-demo-section-header-list-items .item-prebuild-demo-inner:after{
    background: #fff;
    content: "";
    height: 500px;
    left: -160px;
    opacity: 0.2;
    position: absolute;
    top: -50px;
    transform: rotate(35deg);
    transition: all 950ms cubic-bezier(0.19, 1, 0.22, 1);
    width: 50px;
    z-index: 1;
  }
  .prebuild-demo-section-header-list-items .item-prebuild-demo-inner:hover:after{
    left: 130%;
    transition: all 950ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .prebuild-demo-section-header-list-items .item-prebuild-demo-inner:hover{
    -webkit-transform: translateY(-5px);
    -ms-transform: translateY(-5px);
    transform: translateY(-5px);
    box-shadow: 2px 3px 8px rgba(0, 0, 0, 0.2)
  }

  .prebuild-demo-section-header-list-items{
    margin-top:43px;
  }
/* 
  .prebuild-demo-section-header-list-items .item-prebuild-demo{
    width: calc(25% - 15px);
  } */

  .prebuild-demo-section-header-list-items .item-prebuild-demo-inner{
    border-radius: 20px;
    border: 1px solid #D2D2D2;
    background: #FFF;
    box-shadow: 0px 4px 30px 0px rgba(0, 0, 0, 0.10);
    padding: 20px 20px 25px 20px;
  }

  .item-prebuild-demo  a{
    text-decoration: none;
  }
  
  .item-prebuild-demo img{
    width: 100%;
    height: auto;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center;
    object-position: center;
  }

  .item-prebuild-demo .item-prebuild-demo--heading{
    color: #222;
    text-align: center;
    font-family: 'Poppins';
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: 133.2%; 
    margin:25px 0 0 0;
    text-decoration: none;
  }

  .special-offer-section{
    width: 100%;
    height: auto;
    position: relative;
    z-index: 9;
    padding: 112px 0 120px 0;
  }

  .special-offer-section .special-offer-section--bg, .special-offer-section--bg img{
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
  }

  .special-offer-section--bg img{
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center;
    object-position: center;
  }

  .special-offer-section > .container{
    width: 100%;
    max-width: 1106px;
    padding-left: 15px;
    padding-right: 15px;
    margin-left: auto;
    margin-right: auto;
    z-index:3;
    position: relative;
  }

  .special-offer-section .special-offer-section--heading{
    color: #fff;
    text-align:center;
  }

  .special-offer-section--desc{
    color: #D4D4D4;
    text-align: center;
    font-family: 'Lato', sans-serif;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 159%; 
    margin:17px 0 0 0;
    text-align:center;
  }

  .special-offer-section .special-offer-section--btn{
    display:flex;
    justify-content: center;
    margin: 45px 0 0 0;

    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: -webkit-transform;
    transition-property: transform;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  }
  .special-offer-section .special-offer-section--btn:hover{
    -webkit-transform: translateY(-5px);
    -ms-transform: translateY(-5px);
    transform: translateY(-5px); 
  }

  .special-offer-section--btn > a{
    display:flex;
    justify-content: center;
    border-radius: 30px;
    border: 4px solid #ED9913;
    background: rgba(255, 255, 255, 0.05);
    width: 320px;
    max-height:60px;
    height:60px;
    text-decoration: none;
    align-items: center;

    position: relative;
    overflow: hidden;
  }
  .special-offer-section--btn > a:after{
    background: #fff;
    content: "";
    height: 200px;
    left: -160px;
    opacity: 0.2;
    position: absolute;
    top: -100px;
    transform: rotate(35deg);
    transition: all 950ms cubic-bezier(0.19, 1, 0.22, 1);
    width: 50px;
    z-index: 1;
  }
  .special-offer-section--btn > a:hover:after{
    left: 130%;
    transition: all 950ms cubic-bezier(0.19, 1, 0.22, 1);
  }

  .special-offer-section--btn > a > span{
    font-family: 'Poppins';
    color: #FFF;
    font-size: 17px;
    font-style: normal;
    font-weight: 600;
    line-height: 133.2%; /* 22.644px */
    text-transform: uppercase;
    display: inline-block;
    height: auto;
    margin-left: 3px;
  }

  .special-offer-section--list-items{
    width: 100%;
    max-width: 970px;
    margin-left:auto;
    margin-right:auto;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap:30px;
    padding-top: 54px;
    margin-top: 56px;
  }

  .special-offer-section--list-items .item-special-offer{
    height: 100%;
    border-radius: 30px;
    padding: 0 30px 30px 30px;

    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: -webkit-transform;
    transition-property: transform;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  }
 
  .special-offer-section--list-items .item-special-offer:hover{
    -webkit-transform: translateY(-5px);
    -ms-transform: translateY(-5px);
    transform: translateY(-5px); 
  }


  .special-offer-section--list-items .item-special-offer--thumbnail{
    width: 108px;
    height: 108px;
    border-radius: 50%;
    padding: 0;
    position: relative;
    z-index: 9;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    margin-top: -54px;
  }

  .special-offer-section--list-items .item-special-offer--thumbnail:before{
    content: " ";
    display: inline-block;
    width: calc(100% - 16px);
    height: calc(100% - 16px);
    background:#fff;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    z-index: -1;
    border-radius: 50%;
  }

  .special-offer-section--list-items .item-special-offer-inner{
    width: 100%;
    max-width: 340px;
    margin: 0 auto;
    text-align: center;
    color: #fff;
  }

  .special-offer-section--list-items .item-special-offer--heading{
    font-family: 'Poppins';
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: 133.2%;
    margin: 19px auto 0 auto;
    width: 100%;
    max-width: 241px;
  }

  .special-offer-section--list-items .item-special-offer--desc a, .special-offer-section--list-items .item-special-offer--heading > a{
    font-size: inherit;
    font-family: inherit;
    font-weight: inherit;
    letter-spacing: inherit;
    color: inherit;
  }

  .special-offer-section--list-items .item-special-offer--heading > a{
    text-decoration: none;
  }

  .special-offer-section--list-items .item-special-offer--desc{
    color: #FFF;
    text-align: center;
    font-family: 'Lato', sans-serif;
    font-size: 17px;
    font-style: normal;
    font-weight: 500;
    line-height: 30px;
    margin: 6px 0 0 0;
  }

  .special-offer-section--list-items .item-special-offer--desc p{
    margin:0 0 16px 0;
  }


  /* woo-section style */

  .woo-section{
    background: #fff;
    position: relative;
    padding: 120px 0;
    height:auto;
    z-index: 9;
  }

  .woo-section .woo-section--bg{
    width: fit-content;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 67px;
  }

  .woo-section .woo-section--bg img{
    width: 100%;
    height: auto;
    max-width: fit-content;
  }

  .woo-section > .container{
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    padding: 0 15px;
    z-index: 2;
    position: relative;
    max-width: 1196px;
  }

  .woo-section .woo-section-inner{
    display: flex;
    align-items: center;
    gap:32px;
  }
  .woo-section-inner .woo-section--thumbnail{
    position: relative;
    overflow: hidden;
  }
  .woo-section-inner .woo-section--thumbnail:after{
    background: #fff;
    content: "";
    height: 500px;
    left: -160px;
    opacity: 0.2;
    position: absolute;
    top: -100px;
    transform: rotate(35deg);
    transition: all 950ms cubic-bezier(0.19, 1, 0.22, 1);
    width: 50px;
    z-index: 1;
  }
  .woo-section-inner .woo-section--thumbnail:hover:after{
    left: 130%;
    transition: all 950ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .woo-section-inner .woo-section--thumbnail, .woo-section-inner .woo-section--content{
    width: calc(50% - 16px);
  }

  .woo-section-inner .woo-section--thumbnail img{
    width: 100%;
    height: auto;
  }

  .woo-section--content .woo-section--sub-heading{
    color: #555;
    font-family: 'Lato', sans-serif;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: 159%;
    margin: 0;
  }

  .woo-section--content .woo-section--heading{
    color: #222;
    font-family: 'Poppins';
    font-size: 36px;
    font-style: normal;
    font-weight: 600;
    line-height: 114.5%;
    margin:9px 0 0 0;
  }

  .woo-section--content .woo-section--heading > a, .woo-section--content .woo-section--heading > span{
    font-size: inherit;
    font-family: inherit;
    font-weight: inherit;
    letter-spacing: inherit;
    color: inherit;
  }

  .woo-section--content .woo-section--desc{
    color: #555;
    font-family: 'Lato', sans-serif;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: 159%;
    margin:10px 0 0 0;
  }

  .woo-section--list-items{
    display: flex;
    gap: 30px;
    margin-top: 46px;
  }

  .woo-section--list-items .item-woo{
    width: calc(50% - 15px);
  }

  .woo-section--list-items .item-woo--heading{
    color: #222;
    font-family: 'Poppins';
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: 133.2%;
    margin:14px 0 0 0;
  }

  .woo-section--list-items .item-woo--heading > a,  .woo-section--list-items .item-woo--heading > span{
    font-size: inherit;
    font-family: inherit;
    font-weight: inherit;
    letter-spacing: inherit;
    color: inherit;
    text-decoration: none;
  }

  .woo-section--list-items .item-woo--desc{
    color: #555;
    font-family: 'Lato', sans-serif;
    font-size: 17px;
    font-style: normal;
    font-weight: 400;
    line-height: 30px;
    margin:8px 0 0 0;
  }

  /* special section style */

  .special-section{
    padding:120px 0;
  }

  .special-section > .container{
    width: 100%;
    max-width: 1600px;
    padding-left: 15px;
    padding-right: 15px;
    margin-left: auto;
    margin-right: auto;
  }

  .special-section .special-section--desc{
    color: #555;
    text-align: center;
    font-family: 'Lato', sans-serif;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: 159%; 
    margin: 10px 0 0 0;
  }

  .special-section .special-section--list-items{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    justify-content: center;
    gap: 30px;
    margin-top: 42px;
  }

  .special-section--list-items .item-special{
    border-radius: 30px;
    border: 1px solid #D2D2D2;
    background: #FFF;
    box-shadow: 0px 4px 30px 0px rgba(0, 0, 0, 0.05);
    padding:44px 50px;

    display: inline-block;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: -webkit-transform;
    transition-property: transform;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);

    position: relative;
    overflow: hidden;
  }
  .special-section--list-items .item-special:after{
    background: #fff;
    content: "";
    height: 500px;
    left: -160px;
    opacity: 0.2;
    position: absolute;
    top: -50px;
    transform: rotate(35deg);
    transition: all 950ms cubic-bezier(0.19, 1, 0.22, 1);
    width: 50px;
    z-index: 1;
  }
  .special-section--list-items .item-special:hover:after{
    left: 130%;
    transition: all 950ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .special-section--list-items .item-special:hover{
    -webkit-transform: translateY(-5px);
    -ms-transform: translateY(-5px);
    transform: translateY(-5px);
    box-shadow: 2px 3px 8px rgba(0, 0, 0, 0.2)
  }

  .special-section--list-items .item-special--inner{
    text-align: center;
  }

  .special-section--list-items .item-special img{
    margin: 0 auto;
    width: auto;
    height:60px;
  }

  .special-section .special-section--list-items .item-special--heading{
    color: #222;
    text-align: center;
    font-family: 'Lato', sans-serif;
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: 133.2%;
    margin: 19px 0 0 0;
  }

  .special-section .special-section--list-items  .item-special--desc{
    color: #555;
    text-align: center;
    font-family: 'Lato', sans-serif;
    font-size: 17px;
    font-style: normal;
    font-weight: 400;
    line-height: 30px;
    margin: 8px 0 0 0;
  }

  /* about section styles */

  .about-section{
    width: 100%;
    height:auto;
    z-index: 9;
    padding: 74px 0 127px 0;
    position: relative;
  }

  .about-section .about-section--bg, .about-section .about-section--bg img{
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
  }

  .about-section .about-section--bg img{
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center;
    object-position: center;
  }

  .about-section > .container{
    width: 100%;
    max-width: 1200px;
    padding-left: 15px;
    padding-right: 15px;
    margin-left: auto;
    margin-right: auto;
    z-index: 8;
    position: relative;
  }

  .about-section .about-section--header{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    justify-content: center;
    gap: 84px;
    padding-bottom: 54px;
    border-bottom: 1px solid #3C4B5F;
  }

  .about-section--header .item-header-inner{
    display: flex;
  }

  .about-section--header .item-header{
    position: relative;
  }

  .about-section--header .item-header a{
    text-decoration: none;
  }

  .about-section--header .item-header:not(:first-child):before{
    content: " ";
    display: inline-block;
    width: 1px;
    height: 38px;
    background: #3C4B5F;
    position: absolute;
    left: -42px;
    top: 50%;
    transform: translateY(-50%);
  }

  .about-section--header .item-header .item-header--heading{
    color: #FFF;
    font-family: 'Poppins';
    font-size: 18px;
    font-style: normal;
    font-weight: 600;
    line-height: 133.2%;
    margin: 0;
  }

  .about-section--header .item-header .item-header--desc{
    color: #D4D4D4;
    font-family: 'Lato', sans-serif;
    font-size: 17px;
    font-style: normal;
    font-weight: 400;
    line-height: 30px;
    margin: 5px 0 0 0;
  }

  .about-section--header .item-header .item-header--thumbnail{
    padding-right:24px;
  }

  .about-section--body .about-section--body-inner{
    text-align: center;
  }
  .about-section--body {
    padding-top: 50px;
  }

  .about-section--body .about-section--body-sub-heading{
    color: #ED9913;
    text-align: center;
    font-family: 'Lato', sans-serif;
    font-size: 18px;
    font-style: normal;
    font-weight: 500;
    line-height: 159%;
    margin:0;
  }

  .about-section--body .about-section--body-heading{
    color:#fff;
    margin:17px 0 0 0;
  }

  .about-section--body .about-section--body-descriptions{
    color: #D4D4D4;
    text-align: center;
    font-family: 'Lato', sans-serif;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 159%;
    margin:20px auto 0 auto;
    width: 100%;
    max-width:834px;
  }
  .about-section--body-list-items {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 942px;
    margin: 0 auto;
    padding-bottom: 25px;
    padding-top: 10px;
  }
  .about-section--body-list-items .item-body {
    color: #FFF;
    text-align: center;
    font-family: Lato;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
  }
  .about-section--body-list-items .item-body p{
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .about-section--body-list-items .item-body p img{
    margin-right:10px;
  }
  @media only screen and (max-width: 1200px) {
    .special-section--list-items .item-special {
      border-radius: 20px;
      padding: 30px 25px;
    }
  }
  @media only screen and (max-width: 992px) {
    section.landing-hero {
      padding: 110px 150px;
    }
    section.landing-hero h2 {
      font-size: 40px;
      line-height: 50px;
    }
    .ld-serivces-section-list-items .item-service{
      padding: 40px 20px;
    }
    .prebuild-demo-section-header-list-items {
      grid-template-columns: repeat(3, 1fr);
      gap: 25px;
    }
    .special-section .special-section--list-items {
      grid-template-columns: repeat(3, 1fr);
      gap: 25px;
    }
    .about-section .about-section--header {
      gap: 40px;
    }
    .about-section--header .item-header:not(:first-child):before {
      left: -20px;
    }
  }
  @media only screen and (max-width: 767px) {
    section.landing-hero {
      padding: 90px 20px;
    }
    .landing-container { 
      max-width: 550px;
    }
    .ld-serivces-section .ld-serivces-section-list-items {
      flex-direction: column;
    }
    .ld-serivces-section-list-items .item-service {
      width: 100%;
    }
    .features-serivces-section-header {
      flex-direction: column;
    }
    .features-serivces-section-header .features-serivces-section--heading {
      text-align: center;
    }
    .features-serivces-section-header .features-serivces-section--desc {
      padding-left: 0;
      text-align: center;
    }
    .features-serivces-section .features-serivces-section-gallerys {
      flex-direction: column;
    }
    .features-serivces-section-gallerys .gallery-item {
      width: 100% !important;
    }
    .prebuild-demo-section-header-list-items {
      grid-template-columns: repeat(2, 1fr);
    }
    .woo-section .woo-section-inner {
      flex-direction: column;
    }
    .woo-section-inner .woo-section--thumbnail, .woo-section-inner .woo-section--content {
      width: 100%;
    }
    .special-section .special-section--list-items {
      grid-template-columns: repeat(2, 1fr);
    }
    .about-section .about-section--header {
      grid-template-columns: repeat(1, 1fr);
    }
    .about-section--body-list-items {
      flex-direction: column;
    }
    .about-section--body-list-items .item-body p {
      margin: 10px;
    }
  }
  @media only screen and (max-width: 480px) {
    section.landing-hero {
      padding: 70px 20px;
    }
    .landing-container .logo img{
      max-width:200px;
    }
    section.landing-hero h2 {
      font-size: 30px;
      line-height: 40px;
    }
    section.landing-hero p {
      font-size: 18px;
      line-height: 28px;
      margin-bottom: 30px;
    }
    .features-serivces-section {
      padding: 60px 0;
    }
    .prebuild-demo-section {
      padding: 60px 0 70px 0;
    }
    .prebuild-demo-section-header-list-items {
      grid-template-columns: repeat(1, 1fr);
    }
    .woo-section--list-items {
      flex-direction: column;
    }
    .woo-section--list-items .item-woo {
      width: 100%;
    }
    .woo-section {
      padding: 65px 0;
      text-align: center;
    }
    .special-offer-section {
      padding: 65px 0 65px 0;
    }
    .special-offer-section--list-items {
      grid-template-columns: repeat(1, 1fr);
      gap: 80px;
    }
    .special-section {
      padding: 65px 0;
    }
    h2.landing-heading {
      font-size: 30px;
      line-height: 40px;
    }
    .special-section .special-section--list-items {
      grid-template-columns: repeat(1, 1fr);
    }
  }

</style>

<?php 

  // services section options
  $documentation = __get_field('documentation') ? : '';
  $video_guide   = __get_field('video_guide') ? : '';
  $support       = __get_field('support') ? : '';

  // features section options
  $features_hd   = __get_field('heading_features_ld') ? : '';
  $features_desc = __get_field('description_features_ld') ? : '';
  $features_gl   = __get_field('gallerys_features_ld') ? : '';

  // prebuild demo section options
  $prebuild_demo_hd    = __get_field('heading_prebuild_demo') ? : '';
  $prebuild_demo_desc  = __get_field('desc_prebuild_demo') ? : '';
  $prebuild_demo_items = __get_field('list_items_prebuild_demo') ? : '';

  // special offer section options
  $heading_special_offer = __get_field('heading_special_offer') ? : '';
  $desc_special_offer    = __get_field('desc_special_offer') ? : '';
  $btn_special_offer     = __get_field('btn_special_offer') ? : '';
  $bg_special_offer      = __get_field('bg_special_offer') ? : '';
  $items_special_offer   = __get_field('items_special_offer') ? : '';

  // wooo section options
  $heading_woo = __get_field('heading_woo') ? : '';
  $sub_hd_woo  = __get_field('sub_heading_woo') ? : '';
  $desc_woo    = __get_field('desc_woo') ? : '';
  $bg_woo      = __get_field('bg_woo') ? : '';
  $img_woo     = __get_field('img_woo') ? : '';
  $items_woo   = __get_field('items_woo') ? : '';

  // special section options
  $heading_special = __get_field('heading_special') ? : '';
  $desc_special    = __get_field('desc_special') ? : '';
  $items_special   = __get_field('items_special') ? : '';

  // about section options
  $bg_ab_ss   = __get_field('bg_ab_ss') ? : '';
  $header_ab  = __get_field('header_ab_ss') ? : '';
  $body_ab_ss = __get_field('body_ab_ss') ? : '';

  // echo "<pre>";
  // echo print_r($body_ab_ss);  
  // echo "</pre>";
?>

<body class="lading-goza">
  <main id="primary" class="site-landing">
    <section class="landing-hero" style="background-image: url('<?php the_field('landing_hero_bg'); ?>');">
        <div class="landing-container">
          <div class="logo">
          <?php if( get_field('landing_logo') ): ?>
              <img src="<?php the_field('landing_logo'); ?>" />
          <?php endif; ?>
          </div>
          <h2><?php the_field('landing_heading'); ?></h2>
          <p><?php the_field('landing_text'); ?></p>
          <div class="hero-section--purchase"><a href="<?php the_field('landing_url_button'); ?>"><img src="<?php the_field('image_button_hero'); ?>" /></a></div>
        </div>
    </section>

    <section class="ld-serivces-section"> 
        <div class="ld-serivces-section-list-items"> 
          <?php if(!empty($documentation) && isset($documentation)): ?>

            <?php 
              $icon    = $documentation['documentation_image'] ? : '';
              $heading = $documentation['documentation_heading'] ? : '';
              $text    = $documentation['documentation_text'] ? : '';
            ?>

            <div class="item-service item-service--documentation"> 
                <a href="<?= esc_url($documentation['documentation_link']) ?>"> 
                  <div class="item-service--inner"> 
                    <?php if(!empty($icon) && isset($icon)): ?>
                      <div class="item-service--icon"> 
                        <img src="<?= esc_url($icon) ?>" alt="icon" />
                      </div>
                    <?php endif;?>  

                    <div class="item-service--content"> 
                      <?php if(!empty($heading) && isset($heading)): ?>
                        <h3 class="item-service--heading"> <?= $heading ?> </h3>
                      <?php endif;?>

                      <?php if(!empty($text) && isset($text)): ?>
                        <p class="item-service--text"> <?= $text ?> </p>
                      <?php endif;?>
                    </div>
                  </div>
                </a>              
            </div>
          <?php endif; ?>

          <?php if(!empty($video_guide) && isset($video_guide)): ?>
            <?php 
              $icon    = $video_guide['video_guide_image'] ? : '';
              $heading = $video_guide['video_guide_heading'] ? : '';
              $text    = $video_guide['video_guide_text'] ? : '';
            ?>

            <div class="item-service item-service--video_guide"> 
                <a href="<?= esc_url($video_guide['video_guide_link']) ?>"> 
                  <div class="item-service--inner"> 
                    <?php if(!empty($icon) && isset($icon)): ?>
                      <div class="item-service--icon"> 
                        <img src="<?= esc_url($icon) ?>" alt="icon" />
                      </div>
                    <?php endif;?>  

                    <div class="item-service--content"> 
                      <?php if(!empty($heading) && isset($heading)): ?>
                        <h3 class="item-service--heading"> <?= $heading ?> </h3>
                      <?php endif;?>

                      <?php if(!empty($text) && isset($text)): ?>
                        <p class="item-service--text"> <?= $text ?> </p>
                      <?php endif;?>
                    </div>
                  </div>
                </a>              
            </div>
          <?php endif; ?>

          <?php if(!empty($support) && isset($support)): ?>
            <?php 
              $icon    = $support['support_image'] ? : '';
              $heading = $support['support_heading'] ? : '';
              $text    = $support['support_text'] ? : '';
            ?>

            <div class="item-service item-service--support"> 
                <a href="<?= esc_url($support['support_link']) ?>"> 
                  <div class="item-service--inner"> 
                    <?php if(!empty($icon) && isset($icon)): ?>
                      <div class="item-service--icon"> 
                        <img src="<?= esc_url($icon) ?>" alt="icon" />
                      </div>
                    <?php endif;?>  

                    <div class="item-service--content"> 
                      <?php if(!empty($heading) && isset($heading)): ?>
                        <h3 class="item-service--heading"> <?= $heading ?> </h3>
                      <?php endif;?>

                      <?php if(!empty($text) && isset($text)): ?>
                        <p class="item-service--text"> <?= $text ?> </p>
                      <?php endif;?>
                    </div>
                  </div>
                </a>              
            </div>
          <?php endif; ?>
        </div>
    </section>

    <section class="features-serivces-section">  
        <div class="container"> 
          <div class="features-serivces-section-header"> 
              <?php if(!empty($features_hd) && isset($features_hd)): ?>
                <h2 class="features-serivces-section--heading"> <?= $features_hd ?> </h2>
              <?php endif; ?>  

              <?php if(!empty($features_desc) && isset($features_desc)): ?>
                <div class="features-serivces-section--desc"> <?= $features_desc ?> </div>
              <?php endif; ?>  
          </div>

          <?php if(!empty($features_gl) && isset($features_gl)): ?>
            <div class="features-serivces-section-gallerys"> 
              <?php foreach ($features_gl as $key => $value) : ?>
                <div class="gallery-item"> 
                  <img src="<?= esc_url($value) ?>" alt="item gallery" />
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>  
        </div>
    </section>

    <section class="prebuild-demo-section"> 
      <div class="prebuild-demo-section-header"> 
          <div class="prebuild-demo-section-header-content"> 
            <?php if(!empty($prebuild_demo_hd) && isset($prebuild_demo_hd)): ?>
              <h2 class="landing-heading prebuild-demo-section--heading"> <?= $prebuild_demo_hd ?> </h2>
            <?php endif; ?>
          
            <?php if(!empty($prebuild_demo_desc) && isset($prebuild_demo_desc)): ?>
              <p class="prebuild-demo-section--desc"> <?= $prebuild_demo_desc ?> </p>
            <?php endif; ?>
          </div>
      </div>

      <?php if(!empty($prebuild_demo_items) && isset($prebuild_demo_items)): ?>
        <div class="container"> 
          <div class="prebuild-demo-section-header-list-items"> 
            <?php foreach ($prebuild_demo_items as $key => $value) : ?>
              <div class="item-prebuild-demo"> 
                  <a href="<?= esc_url($value['link']) ?>"> 
                    <div class="item-prebuild-demo-inner"> 
                      <?php if(!empty($value['image']) && isset($value['image'])): ?>
                        <img src="<?= esc_url($value['image']) ?>" alt="item prebuild-demo" />
                      <?php endif; ?>  

                      <?php if(!empty($value['name']) && isset($value['name'])): ?>
                        <h3 class="item-prebuild-demo--heading"> <?= $value['name']  ?> </h3>
                      <?php endif; ?>  
                    </div>
                  </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif;?>  
    </section>

    <section class="woo-section"> 
      <div class="woo-section--bg"> 
        <?php if(!empty($bg_woo) && isset($bg_woo)): ?>
          <img src="<?= esc_url($bg_woo) ?>" alt="bg wooo" />
        <?php endif; ?>  
      </div>

      <div class="container"> 
        <div class="woo-section-inner"> 
          <?php if(!empty($img_woo) && isset($img_woo)): ?>
            <div class="woo-section--thumbnail"> 
              <img src="<?= esc_url($img_woo) ?>" alt="img wooo" />
            </div>
          <?php endif; ?>  

          <div class="woo-section--content"> 
            <?php if(!empty($sub_hd_woo) && isset($sub_hd_woo)): ?>
              <p class="woo-section--sub-heading"> <?= $sub_hd_woo ?> </p>
            <?php endif; ?>

            <?php if(!empty($heading_woo) && isset($heading_woo)): ?>
              <h3 class="woo-section--heading"> <?= $heading_woo ?> </h3>
            <?php endif; ?>

            <?php if(!empty($desc_woo) && isset($desc_woo)): ?>
              <p class="woo-section--desc"> <?= $desc_woo ?> </p>
            <?php endif; ?>

            <?php if(!empty($items_woo) && isset($items_woo)): ?>
              <div class="woo-section--list-items"> 
                <?php foreach ($items_woo as $key => $value) : ?>
                  <div class="item-woo"> 
                    <div class="item-woo-inner">  
                        <?php if(!empty($value['icon']) && isset($value['icon'])): ?>
                          <div class="item-woo--thumbnail"> 
                            <img src="<?= esc_url($value['icon']) ?>" alt="icon" />
                          </div>
                        <?php endif;?>  

                        <?php if(!empty($value['heading']) && isset($value['heading'])): ?>
                          <h4 class="item-woo--heading">
                            <?php if(!empty($value['link']) && isset($value['link'])): ?>
                              <a href="<?= esc_url($value['link']) ?>">  <?= $value['heading'] ?> </a>
                            <?php else: ?>
                              <span> <?= $value['heading'] ?> </span>
                            <?php endif; ?>    
                          </h4>
                        <?php endif; ?>

                        <?php if(!empty($value['desc']) && isset($value['desc'])): ?>
                          <p class="item-woo--desc"> <?= $value['desc'] ?> </p>
                        <?php endif; ?>
                    </div>
                  </div>
                <?php endforeach; ?>  
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="special-offer-section"> 
      <div class="special-offer-section--bg"> 
        <?php if(!empty($bg_special_offer) && isset($bg_special_offer)): ?>
          <img src="<?= esc_url($bg_special_offer) ?>" alt="item prebuild-demo" />
        <?php endif; ?>  
      </div>

      <div class="container"> 
        <?php if(!empty($heading_special_offer) && isset($heading_special_offer)): ?>
          <h2 class="landing-heading special-offer-section--heading"> <?= $heading_special_offer ?> </h2>
        <?php endif; ?>  

        <?php if(!empty($desc_special_offer) && isset($desc_special_offer)): ?>
          <p class="special-offer-section--desc"> <?= $desc_special_offer ?> </p>
        <?php endif; ?>  

        <?php if(!empty($btn_special_offer['title']) && !empty($btn_special_offer['url'])): ?>
          <div class="special-offer-section--btn"> 
            <a href="<?= esc_url($btn_special_offer['url']) ?>" target="<?= $btn_special_offer['target'] ?>"> 
              <img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHjSURBVHgB7Za5SwNBGMW/9YBooeIFxoCKImKlhbU2Ftr6B2gnKBZWWvp32FiqWIug4AGiYCM2ppIIEvEADxA1eIxvzFsMye5mlp0UQh78eJmd69vZbzIjUtZ/k1KqASyBC/WnUzAP2qSUwgQDIK38lQLdUgph4E5wz4n2wDCoYJ3+nWTdFUiIbWHQdU6w5lPvgG22WRWbwoAdHDijVyKgXRx8gVedK2KgCjFTP/3AcZxLv0aou4adgRrQKwaqCqrkW4yCcT6qxrMpCdYnfRJtG+F7CCwjYYXOE+BRRVcKDPnN4/hM3glLghjY5+MRcJlT9pNerVawCeJgEDyBLqzEkxi+/SKjX2F5KrdcpO8m246xvMvynFd7vyTsoR9KdG3RE2ECiNOvJbru6a0SIoAa+qtE1wO9WUIE0E6/oZ+DFDiR4tqRbNIlWU7njVlcSJgXJk6dRJTKniG/29G0QyU7fIsFYZxajvfmVe/1CWwmoP571nn0DmI6GDEIwP1WabEnN5daxCCAGN3GDnD1HCaA/B1gQ+5qJkwCcHPgVuzpjl4vBgG42WrzgtlELziMCk5Dlb3Zplm3DI4lmvRRPAM+QG/QhSY3iAVlX7NeczkBQfTBpoHR3S5Aetk38OZHUlZZHvoBXr3h2F7bOjkAAAAASUVORK5CYII='/>
              <span> <?= $btn_special_offer['title'] ?> </span>
            </a>
          </div>
        <?php endif; ?>  

        <?php if(!empty($items_special_offer) && isset($items_special_offer)): ?>
          <div class="special-offer-section--list-items"> 
              <?php foreach ($items_special_offer as $key => $value) : ?>
                <div class="item-special-offer" style="background:<?= $value['background'] ?>"> 
                  <div class="item-special-offer-inner" > 
                    <?php if(!empty($value['icon']) && isset($value['icon'])): ?>
                      <div class="item-special-offer--thumbnail" style="background:<?= $value['background'] ?>">
                        <img src="<?= esc_url($value['icon']) ?>" alt="icon" />
                      </div>
                    <?php endif;?> 

                    <?php if(!empty($value['heading']) && isset($value['heading'])): ?>
                      <h3 class="item-special-offer--heading"> 
                        <a href="<?= esc_url($value['link']) ?>">
                          <?= $value['heading'] ?> 
                        </a>
                      </h3>  
                    <?php endif; ?>

                    <?php if(!empty($value['desc']) && isset($value['desc'])): ?>
                      <div class="item-special-offer--desc"> <?= $value['desc'] ?> </div>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <section class="special-section"> 
      <div class="container"> 
        <div class="special-section-inner"> 
            <?php if(!empty($heading_special) && isset($heading_special)): ?>
              <h2 class="landing-heading special-section--heading"> <?= $heading_special ?> </h2>
            <?php endif;?>   

            <?php if(!empty($heading_special) && isset($heading_special)): ?>
              <p class="special-section--desc"> <?= $desc_special ?> </p>
            <?php endif;?>  

            <?php if(!empty($items_special) && isset($items_special)): ?>
              <div class="special-section--list-items"> 
                <?php foreach ($items_special as $key => $value) : ?>
                  <div class="item-special"> 
                    <div class="item-special--inner"> 
                      <?php if(!empty($value['icon']) && isset($value['icon'])): ?>
                        <img src="<?= esc_url($value['icon']) ?>" alt="icon" />
                      <?php endif;?>  

                      <?php if(!empty($value['heading']) && isset($value['heading'])): ?>
                        <h3 class="item-special--heading"> <?= $value['heading'] ?> </h3>
                      <?php endif;?>  

                      <?php if(!empty($value['desc']) && isset($value['desc'])): ?>
                        <p class="item-special--desc"> <?= $value['desc'] ?> </p>
                      <?php endif;?>
                    </div>
                  </div>
                <?php endforeach;?>  
              </div>
            <?php endif; ?>   
        </div>
      </div>
    </section>

    <section class="about-section"> 
      <?php if(!empty($bg_ab_ss) && isset($bg_ab_ss)): ?>
        <div class="about-section--bg"> 
          <img src="<?= esc_url($bg_ab_ss) ?>" alt="bg" />
        </div>
      <?php endif;?>  

      <div class="container"> 
        <?php if(!empty($header_ab) && isset($header_ab)): ?>
          <div class="about-section--header"> 
            <?php foreach ($header_ab as $key => $value) : ?>
              <div class="item-header"> 
                <a href="<?= esc_url($value['link']) ?>" >
                  <div class="item-header-inner"> 
                    <?php if(!empty($value['icon']) && isset($value['icon'])): ?>
                      <div class="item-header--thumbnail"> 
                        <img src="<?= esc_url($value['icon']) ?>" alt="icon" />
                      </div>
                    <?php endif; ?>  

                    <div class="item-header-content"> 
                      <?php if(!empty($value['heading']) && isset($value['heading'])): ?>
                        <h4 class="item-header--heading"> <?= $value['heading'] ?> </h4>
                      <?php endif;?>  

                      <?php if(!empty($value['desc']) && isset($value['desc'])): ?>
                        <p class="item-header--desc"> <?= $value['desc'] ?> </p>
                      <?php endif;?>  
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach;?>  
          </div>
        <?php endif;?> 

        <?php if(!empty($body_ab_ss) && isset($body_ab_ss)): ?>
          <?php
            $heading      = $body_ab_ss['heading'] ? : '';
            $sub_heading  = $body_ab_ss['sub_heading'] ? : '';
            $descriptions = $body_ab_ss['descriptions'] ? : '';
            $button       = $body_ab_ss['button'] ? : '';
            $icon_check   = $body_ab_ss['icon_check'] ? : '';
            $items        = $body_ab_ss['items'] ? : '';
            $image_button = $body_ab_ss['image_button'] ? : '';
          ?>
          <div class="about-section--body"> 
            <div class="about-section--body-inner"> 
              <?php if(!empty($sub_heading) && isset($sub_heading)): ?>
                <p class="about-section--body-sub-heading"> 
                  <?= $sub_heading ?>
                </p>
              <?php endif;?> 

              <?php if(!empty($heading) && isset($heading)): ?>
                <h2 class="landing-heading about-section--body-heading"> 
                  <?= $heading ?>
                </h2>
              <?php endif;?> 

              <?php if(!empty($descriptions) && isset($descriptions)): ?>
                <p class="about-section--body-descriptions"> 
                  <?= $descriptions ?>
                </p>
              <?php endif;?> 

              <?php if(!empty($items) && isset($items)): ?>
                <div class="about-section--body-list-items"> 
                  <?php foreach ($items as $key => $value) : ?>
                    <div class="item-body"> 
                      <p><img src="<?php echo $icon_check ?>" /><?php echo $value['item'] ?> </p>
                    </div>
                  <?php endforeach;?>  
                </div>
              <?php endif;?> 

              <div class="about-section--purchase"><a href="<?php echo $button; ?>"><img src="<?php echo $image_button; ?>" /></a></div>
            </div>
          </div>
        <?php endif;?> 
      </div>
    </section>
  </main>
</body>
<?php
