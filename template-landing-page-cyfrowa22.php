<?php
	/*
 * Template name: Landing Page Konferencja Cyfrowa roznorodnosc 2022
 */

get_header('forum');
?>

<style>


body {
	font-family: Muli-Bold;
	
}

.navbar-fixed-top {
	display: none;
}

body.cookies-visible {
  padding-top: 0px;
}

h1, h2, h3, h4, .landing-page-nav-container h5, strong {
	font-family: Muli-Black;
	font-weight: 400 !important; 
}


h1 {
	font-size: 60px;
}


h2 {
	font-size: 35px;
	margin-bottom: 25px;
}


h3 {
	font-size: 25px;
}


h5 {
	font-size: 20px;
}


p, li {
	font-size: 20px;
	color: #182349;
}

a {
	color: #182349;
	text-decoration: underline;
}

a:focus {
	color: #182349;

}

a:visited {
	color: #182349;

}


a:hover {
	color: #182349;
	text-decoration: underline;
}

a:active {
	color: #182349;

}


p a {
	color: #182349;
	text-decoration: underline;
}

.no-br br{
	display: none;
}

.title-container, .first-text-block, .about, .registration, .programme, .report-premiere, .report-speakers, .lightning-talks, .lt-speakers, .workshops, .rozmowy, .foreign-guests, .premiera {
	width: 100%;
	margin-left: auto;
	margin-right: auto;
}

.title-container {
	background-image: url(<?php  echo the_field('main-image') ?>);
	background-repeat: no-repeat;
	background-size: cover;
	padding-bottom: 60px;
}

.logo-org {
	padding-left: 0;
	padding-right: 0;
	margin-left: 70px;
	display: flex;
	flex-direction: row;
}

.logo-org img {
	max-width: 190px;
}

.white-title h1{
	color: #182349;
	padding-top: 80px;
	padding-bottom: 30px;
	text-align: left;
	letter-spacing: 4px;
	margin-top: 0;
	margin-bottom: 0;
	margin-left: 100px;
}

.white-title h2{
	color: #182349;
	letter-spacing: 3px;
	margin-bottom: 50px;
	margin-top: 0;
	text-align: left;
	margin-left: 100px;
}

.white-title h3{
	color: #182349;
	letter-spacing: 3px;
	margin-bottom: 0px;
	padding-top: 30px;
	text-align: left;
	margin-left: 100px;
}

.niebieska-kreska {
	margin-left: 100px;
}


/* title block */

@media only screen and (max-width: 1400px) {

	.title-container {
		padding-bottom: 80px;
	}

	
}

@media only screen and (max-width: 1241px) {
	.title-container {
		padding-bottom: 50px;
	}

	.white-title h1 {
		font-size: 50px;
		padding-top: 80px;

	}

	.white-title h2{
		font-size: 35px;
	}

	.white-title h3{
		font-size: 25px;
	}

}

@media only screen and (max-width: 1030px) {
	.title-container {
		padding-bottom: 30px;
	}

	.logo-org {
		margin-left: 30px;
	}
	.white-title h1 {
		font-size: 40px;
		margin-left: 60px;
		padding-top: 60px;
		margin-bottom: 0;

	}

	.white-title h2{
		font-size: 30px;
		margin-left: 60px;
	}

	.white-title h3{
		font-size: 20px;
		margin-left: 60px;
		margin-top: 0;
	}
	.niebieska-kreska {
		margin-left: 60px;
	}

}

@media only screen and (max-width: 840px) {
	.logo-org {
		margin-left: 20px;
	}
	.logo-org img {
 		 max-width: 150px;
	}
	
	.white-title h1 {
		font-size: 35px;
		margin-left: 40px;
		padding-top: 30px;
		padding-bottom: 20px;

	}
	.white-title h2{
		font-size: 25px;
		margin-left: 40px;
	}

	.white-title h3{
		font-size: 20px;
		margin-left: 40px;
		padding-top: 10px;
		letter-spacing: 1px;
		
	}
	.niebieska-kreska {
	display: none;
	}

}

@media only screen and (max-width: 768px) {
		.title-container {
		background-color: #FFBD00;
	}

}

@media only screen and (max-width: 640px) {
	
	.white-title h1 {
		font-size: 30px;
		margin-left: 30px;
		padding-top: 20px;
		padding-bottom: 20px;

	}
	.white-title h2{
		font-size: 25px;
		margin-left: 30px;
		padding-bottom: 0px;
	}


	.white-title h3{
		font-size: 18px;
		margin-left: 30px;
		
	}

}

@media only screen and (max-width: 530px) {
	.white-title h1 {
		font-size: 25px;
		margin-left: 20px;
		padding-top: 20px;
		padding-bottom: 10px;

	}
	.white-title h2{
		font-size: 20px;
		margin-left: 20px;
	}

	.white-title h3{
		font-size: 16px;
		margin-left: 20px;
		
	}
}

@media only screen and (max-width: 460px) {
	.logo-org img {
 		 max-width: 120px;
	}

	.white-title h1 {
		font-size: 20px;
		margin-left: 20px;
		padding-top: 15px;
		padding-bottom: 10px;

	}
	.white-title h2{
		font-size: 18px;
		margin-left: 20px;
	}


	.white-title h3{
		font-size: 15px;
		margin-left: 20px;

		
	}
}

@media only screen and (min-width: 451px) {
	.mobile-header {
		display: none;
	}
}


@media only screen and (max-width: 450px) {

	.title-container {
		background-image: none;
	}

	.mobile-header img {
		display: block;
		width: 100%;
		height: auto;
	}


	.logos {
		margin-bottom: 10px !important;
	}
	.logo-org {
		margin: 0;
		justify-content: center;
	}
	
	.white-title h1 {
		font-size: 25px;
		padding-top: 15px;
		padding-bottom: 20px;
		text-align: center;
		margin-left: 0;
		line-height: 35px;

	}
	.white-title h2{
		font-size: 20px;
		text-align: center;
		margin-left: 0;
		margin-bottom: 30px;
		line-height: 30px;
	}


	.white-title h3{
		font-size: 15px;
		text-align: center;
		margin-left: 0;
		line-height: 25px;

		}
	.niebieska-kreska {
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 100px;
		height: 5px;
		
	}

}


@media only screen and (max-width: 380px) {
	.white-title h1 {
		font-size: 18px;
		padding-top: 15px;
		padding-bottom: 5px;

	}
	.white-title h3{
		font-size: 14px;
				
	}
}

@media only screen and (max-width: 340px) {
	.white-title h1 {
		font-size: 16px;
		padding-top: 10px;
		padding-bottom: 0px;

	}
	.white-title h3{
		font-size: 12px;

	}
}



.first-text-block, .about, .registration, .programme, .report-premiere, .report-speakers, .lightning-talks, .workshops, .foreign-guests, .premiera, .rozmowy, foreign-guests {
	padding-left: 20%;
	padding-right: 20%;
}


.first-text-block {
	padding-top: 80px;
	padding-bottom: 60px;
	background-color: #FFD972;
}

.first-text-block p {
	font-family: Muli-Bold;
	color: #182349;
}

.about {
	font-family: Muli-Bold-SemiBold;
	color: #FFFFFF;
	background-color: #182349;
	padding-top: 20px;
	padding-bottom: 60px;

}


.about br{
	display: none;
}


.registration {
	color: #182349;
	padding-bottom: 50px;
}
.registration h2 {
	padding-top: 40px;
	padding-bottom: 20px;

}

.registration p {
	font-family: Muli-Bold;
}

.registration-buttons {
	padding-top: 1px;
}

.registration-link {
	background-color: #182349;
	font-size: 25px;
	font-family: Muli-Bold;
	padding-top: 20px;
	padding-bottom: 20px;
	padding-left: 20px;
	padding-right: 20px;
	margin-top: 30px;

}

.registration-link {
	color: #FFFFFF !important;
}


.registration-arrow {
	color: #F8C55C;
	float: right;
	padding-top: 7px;
}

.notes-row {
	margin-top: 50px;
	margin-bottom: 20px;
	display: flex;
	display: -webkit-flex;
  	flex-wrap: wrap;
	margin-left: 0px;
	margin-right: 0px;
	
}

.note-column-1, .note-column-2 {
	width: calc(50% - 5px);
}


.registration .col-sm-2 { 
	padding-left: 5px;

}

.registration .col-sm-10 { 
	padding-left: 0px;

}

.note-column-1{
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 40px;
	padding-bottom: 10px;
}


.note-column-1 {
	border: 5px solid #C4D126;
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 40px;
	padding-bottom: 10px; 
}

.yellow-frame {
	border: 5px solid #F18616;
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 40px;
	padding-bottom: 10px; 
}



.note-column-1 {
	margin-right: 5px;
}


.note-column-2 {
	margin-left: 5px;
} 


.note {
	color: #F18616;
	line-height: 110%;
	transform: rotate(-90deg);
	margin-top: 100px;
}

p.note {
	font-size: 20px !important;
	font-family: Muli-black;
}

.registration-info {
	margin-top: 15px;
}

.info-1 {
	padding-left: 0px;
	padding-top: 20px;
}

.orange-frame {
	border: solid 5px #C4D126;
	width: calc(100% - 30px);
	margin-top: 10px;
	margin-left: 15px;
	padding-top: 15px;
	padding-left: 15px;
}

.security {
	margin-top: 80px;
	float: none;
	display: table-cell;
  	vertical-align: top;
}

.info-2 {
	color: #182349;
	
}

.note-column-1 p, .note-column-2 p, .info-1 p, .info-2 p {
	font-size: 18px;
}

.info-2 p {
	margin-bottom: 0;
}


.info-2 br {
	display: none;
}


@media only screen and (max-width: 1313px) {
	.registration-link {
		padding-left: 15px;
		padding-right: 15px;
		font-size: 23px;
	}
	.registration .col-sm-2 {
		padding-right: 5px;
	}

}

@media only screen and (max-width: 1200px) {
	.registration-link {
		font-size: 20px;
		padding-left: 10px;
		padding-right: 10px;

	}	
}

@media only screen and (max-width: 1034px) {
	.registration-link {
		padding-left: 5px;
		padding-right: 5px;
		font-size: 18px;
	}
	p.note {
		font-size: 18px !important;
	}

}

@media only screen and (max-width: 920px) {
	.registration-link {
		padding-left: 5px;
		padding-right: 5px;
		font-size: 16px;
	}
	p.note {
		font-size: 16px !important;
	}
	.registration .col-sm-10 p {
		font-size: 15px;
	}
}



@media only screen and (max-width: 768px) {

	.registration-link {
		padding-left: 10px;
		padding-right: 10px;
		font-size: 18px;
	}

	.note-column-1 .row {
		display: flex;
		flex-wrap: wrap;
		flex-direction: column;
	}

	

	.note-column-2 .row {
		display: flex;
		flex-wrap: wrap;
		flex-direction: column;
	}
	.note {
		transform: none;
	}
	p.note {
		margin-top: 0;
		margin-bottom: 5px;
	}

	.yellow-frame {
		padding-top: 15px;
		padding-left: 30px;
		width: 100%;
	}
	.security {
		margin-top: 0;
	}
	.orange-frame {
		padding-top: 0;
	}
	.info-2 {
		padding-top: 0 !important;
	}
}

@media only screen and (max-width: 696px) {
	.registration-link {
		padding-left: 10px;
		padding-right: 10px;
		font-size: 16px;
	}

}

@media only screen and (max-width: 624px) {
	.registration-link {
		padding-left: 5px;
		padding-right: 5px;
		font-size: 15px;
	}

}

@media only screen and (max-width: 512px) {
	.registration-arrow {
		display: none;
	}
	.registration .col-sm-10 p {
		font-size: 16px;
	}

}



/* PROGRAM */

.programme {
	color: #182349;
	padding-bottom: 60px;
}

.programme br {
	display: none;
}

.programme-table {
	text-align: center;
	margin-top: 30px;
}

.date {
	text-align: left;
	font-family: Muli-Black;
}


.programme-event {
	padding-left: 5px;
}


.programme-time, .programme-event p {
	font-size: 16px;
}

.programme-time, .programme-event {
	margin-bottom: 5px;
}


.programme-time, .programme-event p {
	margin-bottom: 0;
	margin-top:  10px;
}

.programme-time {
	font-family: Muli-Black;
	padding-left: 0;
	padding-right: 0;
}

.day-2 {
	padding-right: 0;
	padding-left: 40px;
}

p.blue {
	background-color: #98AFDD;
	margin-bottom: 0px;
	padding-bottom: 5px;
}

p.light-yellow {
	background-color: #FFD972;
	margin-bottom: 0px;
	padding-bottom: 5px;
}

p.green {
	background-color: #C4D126;
	margin-bottom: 0px;
	padding-bottom: 5px;
}

p.orange {
	background-color: #F18616;
	margin-bottom: 0px;
	padding-bottom: 5px;
}

p.yellow {
	background-color: #FFBD00;
	margin-bottom: 0px;
	padding-bottom: 3px;
}

p.grey {
	background-color: #D9D9D9;
	margin-bottom: 10px;
	padding-bottom: 5px;
}


@media only screen and (max-width: 1200px) {
	.programme-event {
		width: 70%;
		padding-left: 30px;
	}
	.day-2 {
		padding-left: 30px;
	}
}

@media only screen and (max-width: 830px) {
	.programme-event {
		padding-left: 40px;
		padding-right: 20px;

	}
}	

@media only screen and (max-width: 768px) {
	.programme-event {
		padding-left: 15px;
		padding-right: 15px;
		width: 100%;
	}
	.day-2 {
		padding-left: 15px;
		padding-right: 15px;
	}

	.day-2 .date {
		margin-top: 25px;		
	}


}


/* END PROGRAM */
.report-premiere {
	color: #182349;
	background-color: #FFFFFF;
	padding-top: 20px;
	padding-bottom: 65px;
}

.report-premiere p{
	font-family: Muli-Bold;
}

.report-premiere li{
	font-family: Muli-Bold;
}


@media only screen and (max-width: 1130px) {
	.img-report-cover {
		transform: rotate(0deg);
		margin-left: 35px;
	}
}

@media only screen and (max-width: 768px) {
	.img-report-cover {
		max-width: 70%;
		width: 70%;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
	
	.h2-speakers {
		margin-top: 50px;
	}
}



.report-premiere > .row > .col-sm-10 > h2 {
	margin-top: 40px;
}

.report-premiere > .row > .col-sm-10 {
	margin-bottom: 25px;
}


.h2-speakers {
	margin-left: 15px;
}

.report-speakers {
	background-color: #F8C55C;
	padding-bottom: 30px;
}

.report-speakers > .row > .col-sm-3:nth-child(4n+1) {
    clear: both;
	margin-bottom: 40px;
}

.img-speaker-foto {
	max-width: 85%;
	border: 3px solid #C4D126; 
	border-radius: 50%;
	margin-left: auto;
	margin-right: auto;
}

.speaker-name {
	font-family: Muli-Bold;
	color: #182349;
	margin-top: 20px;
	margin-bottom: 5px;
}

.speaker-country {
	font-family: Muli-Bold;
	color: #182349;
	margin-top: 5px;
	margin-bottom: 5px;
	text-transform: uppercase;
}

.lightning-talks {
	color: #182349;
	background-color: #98AFDD;
	padding-top: 15px;
	padding-bottom: 25px;
}

.lightning-talks h2{
	margin-top: 40px;	
}


.lightning-talks p {
	font-family: Muli-Bold;
	margin-top: 40px;
}


.uczestnicy-debaty {
	margin-top: 55px;
}

.uczestnik-debaty-foto {
	max-width: 75% !important;
	border: solid 3px #C4D126;
	border-radius: 50%;
}

.uczestnik-debaty-name, .uczestnik-debaty-afil {
	font-size: 16px;
}

.uczestnik-debaty-name {
	margin-top: 10px !important;
}

.uczestnik-debaty-name {
	font-family: Muli-Black !important;
}

.uczestnik-debaty-afil  {
	text-align: center;
	margin-top: 5px !important;
}

.lt-speakers {
	color: #182349;
	background-color: #FFFFFF;
	/* padding-bottom: 25px; */
	/* padding-top: 25px; */
}

.lt-speakers > .row > .col-sm-3:nth-child(4n+1) {
    clear: both;
}

.lt-speakers > .row > .col-sm-3 {
	margin-bottom: 30px;
}



.lt-speaker-country {
	color: #182349;
}

.lt-speaker-name {
	color: #182349;
	text-align: center;
}

.foreign-guests {
	color: #182349;
	background-color: #FFFFFF;
	padding-bottom: 55px;
	padding-top: 25px;
}

.foreign-guests p{
	font-family: Muli-Black;
}


.zagraniczni-bio-row {
	padding-top: 30px;
}

.lt-theme p {
	font-family: Muli-Bold;
}


@media only screen and (max-width: 768px) {
	.uczestnik-debaty-foto, .img-speaker-foto {
		width: 60% !important;
	}
	.uczestnicy-debaty .col-sm-3 {
		margin-bottom: 45px;
	}

	.zagraniczni-bio-row {
		padding-top: 15px;
	}


	.zagraniczni-bio-row .lt-speaker-name {
		margin-top: 10px;
		margin-bottom: 25px;
	}

	.rozmowy-pary .col-sm-6 {
		padding-left: 15px;
		padding-right: 15px;
	}
}

.workshops {
	color: #182349;
	background-color: #C4D126;
	padding-bottom: 55px;
	padding-top: 25px;

}

.workshops h2{
	margin-bottom: 35px;
}

.workshops h4{
	margin-top: 50px;
	margin-bottom: 40px;
}

.workshops p{
	font-family: Muli-Bold;
}


.show-more {
	color: #182349;
	font-size: 18px;
	text-decoration: underline;
	font-family: Muli-Black;
}

.show-more:hover {
	color: #182349;
	text-decoration: underline;
}

.show-more-small {
	font-size: 16px;
	}

.show-more-small-margin {
	margin-bottom: 10px;
	margin-top: 5px;

}

.big-show-more {
	padding-bottom: 10px;
	font-size: 20px;
	display: inline-block;
}

.premiera {
	color: #182349;
	background-color: #FFD972;
	padding-bottom: 55px;
	padding-top: 25px;
}

.okladka {
	max-width: 300px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 50px;
}

.button-blue {
	margin-left: auto;
	margin-right: auto;
	color: #000000;
	background-color: #98AFDD;
	border-color: #98AFDD;

}

.button-blue:hover {
	background-color: #C4D126;
	border-color: #C4D126;
}

.rozmowy {
	color: #182349;
	padding-bottom: 35px;
	padding-top: 25px;
}

/* .rozmowy p{
	font-family: Muli-Black;
} */

.Muli-Bold {
	font-family: Muli-Bold;
}

.rozmowy-pary {
	padding-top: 40px;
}

.rozmowy-pary .row-2 {
	margin-top: 25px;
}


.rozmowy-para-1 {
	padding-right: 0px;
}

.rozmowy-para-2 {
	padding-left: 0px;
}

.rozmowy-foto {
	border: 3px solid #C4D126;

}

.rozmowy-foto-2 {
	border: 3px solid #FFBD00;

}

.rozmowy-foto-3 {
	border: 3px solid #C4D126;

}

.rozmowy-foto-4 {
	border: 3px solid #FFBD00;

}


.rozmowy-name {
	font-size: 13px;
	font-family: Muli-Black;
	text-align: center;
	margin-top: 10px;
	margin-bottom: 5px;
}

p.rozmowy-afil {
	font-family: Muli-Bold; 
	font-size: 13px;
	text-align: center;

}

.col-md-2 a {
	text-decoration: none;
}

#content-nav-ul ul {
	padding: 0 0;
}


#content-nav-ul li {
	font-size: 16px;
	padding: 4px 10px;
}

#content-nav-ul a {
	text-decoration: none;
	color: #182349;
}

@media only screen and (max-width: 1241px) {
	h2 {
		font-size: 50px;
	}
	p, li {
	font-size: 18px;
	}

}


@media only screen and (max-width: 960px) {
	.info-2 {
		padding-left: 5px;
		font-size: 16px;
	}
	.note-column-1 p, .note-column-2 p, .info-1 p, .info-2 p {
		font-size: 16px;
	}
	.note {
		font-size: 30px !important;
	}
}


@media only screen and (max-width: 768px) {
	h2 {
		font-size: 30px;
	}

	h3 {
		font-size: 26px;
	}

	h4 {
		font-size: 22px;
	}

	.title-container, .first-text-block, .about, .registration, .programme, .report-premiere, .report-speakers, .lightning-talks, .lt-speakers, .workshops, .foreign-guests, .premiera, .rozmowy {
	width: 100%;
	}

	.first-text-block, .about, .registration, .programme, .report-premiere, .report-speakers, .lightning-talks, .lt-speakers, .workshops, .foreign-guests, .premiera, .rozmowy {
	padding-left: 10%;
	padding-right: 10%;
	}


	.first-text-block {
    		padding-top: 40px;
    		padding-bottom: 40px;
	}


	.note-column-1 {
		margin-right: 0;
		margin-bottom: 10px;
		width: 100%;
		padding-top: 15px;
		padding-left: 30px;
	}

	
	.note-column-2 {
		margin-left: 0;
		width: 100%;
		padding-top: 15px;
		padding-left: 15px;

	}

	.note-column-1 .row, .note-column-2 .row {
		display: flex;
	}
	.note {
		margin-top: 20px;
	
	}

	.note-column-1 .col-sm-2, .note-column-2 .col-sm-2 {
	
		padding-left: 0;
	}	

	.note-column-1 p, .note-column-2 p, .info-1 p, .info-2 p {
		font-size: 18px;
	}

	.info-2 {
		width: 100%;
		padding-top: 20px;
		padding-left: 10px;
	}


	.programme h2 {
		margin-top: 0;
	}

	.report-speakers > .row > .col-sm-3:nth-child(4n+1) {
        	margin-bottom: 0px;
	}

	.speaker-country {
		margin-bottom: 40px;
	}

	.img-speaker-foto {
		margin-left: auto;
		margin-right: auto;
	}
	.speaker-name, .speaker-country, .lt-theme {
		text-align: center;
	}

	.speaker-country {
		margin-bottom: 40px;
	}
	.lt-speaker-country {
		margin-bottom: 0px;
	}

	.lt-theme {
		margin-bottom: 40px;
	}
	.logos {
		padding-left: 0;
		padding-right: 0;
		margin-bottom: 50px;
	}
	.flex-container {
		display: block;
		width: 50%;
		height: auto;
		margin-left: auto;
		margin-right: auto;

	}
	.partner-logo {
		max-width: 100%;
		height: auto
		width: 100%;
		margin-left: auto;
		margin-right: auto;
		margin-top: 30px;
	}

	.row-2 .col-sm-4 .row {
	  margin-top: 0;
	}

	.rozmowy-pary .row-2 {
	  margin-top: 0;
	}


	.rozmowy-para-1, .rozmowy-para-2 {
		padding-bottom: 10px;
	}
}

@media only screen and (max-width: 576px) {
	.first-text-block, .about, .registration, .programme, .report-premiere, .report-speakers, .lightning-talks, .lt-speakers, .workshops, .foreign-guests, .premiera, .rozmowy {
		padding-left: 5%;
		padding-right: 5%;
	}

	.note-column-1 .col-sm-2, .note-column-2 .col-sm-2 {
		padding-right: 0;
		padding-left: 0;

	}
	.note-column-1 .col-sm-10, .note-column-2 .col-sm-10 {
		padding-left: 0;
	}
	.note {
		margin-top: 25px;
	}


	.img-speaker-foto {
		border-width: 2px;
	}
}

@media only screen and (max-width: 450px) {
	.registration-link {
		font-size: 20px;
		padding-right: 10px;
		padding-left: 10px;

	}
}

@media only screen and (max-width: 393px) {
	.info-2 p {
		white-space: normal;
		margin-bottom: 10px;
	}
}


@media only screen and (max-width: 351px) {
	.registration-link {
		font-size: 20px;
		padding-right: 10px;
		padding-left: 10px;
	}
}

@media only screen and (max-width: 297px) {
	.registration-arrow {
		display: none;
	}
	.registration-link {
		font-size: 18px;
		
	}
}

.website-end {
	height: 100px;
	background-color: #FFD000;
	/* background-image: url(<?php  echo the_field('main-image-mobile') ?>);
	background-repeat: no-repeat;
	background-size: cover; */

}

.website-end img {
	width: 100%;
	height: 100px;
	margin-left: auto;
  	margin-right: auto;
	
}

.kontakt-ola {
	text-align: center;
	margin-top: 40px;
	font-size: 18px;
}

.logo-footer {
	justify-content: center;
	margin-left: 0;
}

.logo-UE {
	max-width: 50%;
	margin-left: auto;
	margin-right: auto;
	margin-top: -40px;
}

@media only screen and (max-width: 768px) {
	.logo-UE {
	max-width: 100%;
	margin-left: auto;
	margin-right: auto;
	margin-top: -20px;
	}
	
	.logo-footer img {
		max-width: 100px;
	}

}


</style>

<div class="page-container">

	<div class="title-container white-title">
		<div class="mobile-header">
		<img src="<?php the_field('main-image-mobile'); ?>">
	</div> <!-- END mobile-header -->

		<div class="logos">
			<div class="logo-org">
				<a href="https://centrumcyfrowe.pl/spoled/"><img class="img-responsive" src="<?php the_field('logo-spoled')?>"></a>
				<a href="https://ceo.org.pl/" target="_blank"><img class="img-responsive" src="<?php the_field('logo-ceo')?>"></a>
				<a href="https://centrumcyfrowe.pl/"><img class="img-responsive" src="<?php the_field('logo-fcc')?>"></a>
			</div>

		</div><!-- END row logos -->
		<?php the_field('event-title')?>
	</div> <!-- END title-container> -->

	<div class="first-block-background">
	<div class="first-text-block">
		<?php the_field('first-text-block')?>
	</div> <!-- END first-text-block> -->
	</div> <!-- END first-block-background> -->

	
	<div class="registration">
		<?php the_field('registration')?>
		<div class="registration-buttons">
		<a target="_blank" href="<?php the_field('registration-link')?>"><p class="registration-link"><?php the_field('registration-button')?><i class="fa fa-caret-right registration-arrow"></i></p></a> 
		<!-- <a target="_blank" href="<?php the_field('registration-link_2')?>"><p class="registration-link"><?php the_field('registration-button_2')?><i class="fa fa-caret-right registration-arrow"></i></p></a> -->
		</div>
	<div class="row notes-row">
	<div class="col-sm-6 note-column-1">
	<div class="row">
	<div class="col-sm-2">
		<p class="note">Konferencja stacjonarna</p>
	</div>
	<div class="col-sm-10">
		<?php the_field('note-1')?>
	</div>
	</div>
	</div>
	<div class="col-sm-6 note-column-2">
	<div class="row">
	<div class="col-sm-12 yellow-frame">
	<div class="row">
	<div class="col-sm-2">
		<p class="note">Konferencja online</p>
	</div>
	<div class="col-sm-10">
		<?php the_field('note-2')?>
	</div>
	</div>
	</div>
	<div class="row">
	<div class="col-sm-12 orange-frame">
	<div class="row notes-row registration-info">
	<div class="col-sm-2 security">
		<p class="note">Bezpieczeństwo</p>
	</div>
	<div class="col-sm-10 info-2">
		<?php the_field('registration-contact')?>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div> <!-- END notes-row -->

	</div> <!-- END registrationt> -->

	<div class="programme">
		<?php the_field('programme')?>

		  <div class="row programme-table">
   	<div class="col-sm-6 day-1">
      			   <p class="date"><?php the_field('day_1') ?></p>
       			 <?php	
			if( have_rows('programme_1_day') ):
    			while ( have_rows('programme_1_day') ) : the_row();
			    $time_1 = get_sub_field('time_1');
        		$event_1 = get_sub_field('event_1');
			    $link = get_sub_field('zobacz_wiecej_5');

        			echo "<div class='row'><div class='col-sm-3 programme-time'>  $time_1</div>
                    <div class='col-sm-9 programme-event'>  $event_1</div></div>";
                    if( $link ): 
                        $link_url = $link['url'];
                         $link_title = $link['title'];
                         $link_target = $link['target'] ? $link['target'] : '_self';
                        echo "<div class='row'><div class='col-sm-3'></div><div class='col-sm-9 show-more-small-margin'><a class='show-more show-more-small' href=' $link_url' target= '$link_target'> $link_title </a></div></div>";
                    
            
                        endif;
                endwhile;
			else :
    			// no rows found
				endif;		
               
			?>
</div> <!-- END day-1-->  

			 <div class="col-sm-6 day-2">
      			   <p class="date"><?php the_field('day_2') ?></p>
       			 <?php	
			if( have_rows('programme_2_day') ):
    			while ( have_rows('programme_2_day') ) : the_row();
			$time_2 = get_sub_field('time_2');
        		$event_2 = get_sub_field('event_2');
        		$link = get_sub_field('zobacz_wiecej_6');

        			echo "<div class='row'><div class='col-sm-3 programme-time'>  $time_2</div>
                    <div class='col-sm-9 programme-event'>  $event_2</div></div>";
                    if( $link ): 
                        $link_url = $link['url'];
                         $link_title = $link['title'];
                         $link_target = $link['target'] ? $link['target'] : '_self';
                        echo "<div class='row'><div class='col-sm-3'></div><div class='col-sm-9 show-more-small-margin'><a class='show-more show-more-small' href=' $link_url' target= '$link_target'> $link_title </a></div></div>";
                    
            
                        endif;
                endwhile;
			else :
    			// no rows found
				endif;			?>
    		</div> <!-- END day-2-->   

	</div> <!-- END programme-table -->




	</div> <!-- END programme -->
	

	<div class="lightning-talks">
		<?php the_field('lightning-talks')?>
		<?php 
				$link = get_field('zobacz_wiecej_3');
				if( $link ): 
   					 $link_url = $link['url'];
    					 $link_title = $link['title'];
    					 $link_target = $link['target'] ? $link['target'] : '_self';
			?>
    		<a class="show-more" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>

		<div class="row uczestnicy-debaty"> 
			<?php	
			if( have_rows('lt-speakers') ):
    			while ( have_rows('lt-speakers') ) : the_row();
			$lt_speaker_foto = get_sub_field('lt-speaker-foto');
        		$lt_speaker_name = get_sub_field('lt-speaker-name');
			$lt_speaker_country = get_sub_field('lt-speaker-country');
			$lt_theme = get_sub_field('lt-theme');
        		echo "<div class='col-sm-3'> <img class='img-responsive img-speaker-foto uczestnik-debaty-foto' src='$lt_speaker_foto'> <p class='speaker-name lt-speaker-name uczestnik-debaty-name'> $lt_speaker_name </p> <p class='lt-speaker-country uczestnik-debaty-afil'> $lt_speaker_country</p></div>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>
		</div> <!-- END row -->

	</div> <!-- END lightning-talks -->

	<div class="report-premiere">
		<?php the_field('cyfrowe-opowiesci')?>
		<?php 
				$link = get_field('zobacz_wiecej_4');
				if( $link ): 
   					 $link_url = $link['url'];
    					 $link_title = $link['title'];
    					 $link_target = $link['target'] ? $link['target'] : '_self';
			?>
    		<a class="show-more" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>

	
	</div> <!-- END report-premiere -->

	<div class="workshops">
		<?php the_field('workshops')?>
		<?php 
				$link = get_field('zobacz_wiecej_7');
				if( $link ): 
   					 $link_url = $link['url'];
    					 $link_title = $link['title'];
    					 $link_target = $link['target'] ? $link['target'] : '_self';
			?>
    		<a class="show-more big-show-more" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
		<br>
				<?php 
				$link = get_field('zobacz_wiecej_8');
				if( $link ): 
   					 $link_url = $link['url'];
    					 $link_title = $link['title'];
    					 $link_target = $link['target'] ? $link['target'] : '_self';
			?>
    		<a class="show-more big-show-more" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>



	</div> <!-- END workshops -->

	<div class="foreign-guests">
		<?php the_field('zagraniczni_goscie')?>

		<div class="lt-speakers">
		<div class="row"> 
			<?php	
			if( have_rows('zagraniczni-bio') ):
    			while ( have_rows('zagraniczni-bio') ) : the_row();
			$lt_speaker_foto = get_sub_field('zagraniczni-bio-foto');
        		$lt_speaker_name = get_sub_field('zagraniczni-bio-name');
			$lt_theme = get_sub_field('zagraniczni-bio-theme');
        		echo "<div class='row zagraniczni-bio-row'><div class='col-sm-3'> <img class='img-responsive img-speaker-foto' src='$lt_speaker_foto'> <p class='speaker-name lt-speaker-name'> $lt_speaker_name </p></div> <div class='col-sm-9 lt-theme'> $lt_theme </div> </div>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>
			<div class="row">
			<div class= "col-sm-3"></div>
			<div class= "col-sm-9">
			<?php 
				$link = get_field('zobacz_wiecej');
				if( $link ): 
   					 $link_url = $link['url'];
    					 $link_title = $link['title'];
    					 $link_target = $link['target'] ? $link['target'] : '_self';
			?>
    		<a class="show-more" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
		</div>	
		</div>

		</div> <!-- END row -->
	     </div> <!-- END lt-speakers -->
         </div> <!-- END foreign-guests -->

	<div class="premiera">
		<?php the_field('premiera')?>
<!--		<img class="img-responsive okladka" src="<?php the_field('okladka-obrazek')?>">
		<a class="button button-blue" href="<?php the_field('link-do-publikacji')?>" target="_blank"><?php the_field('napis-na-przycisku')?></a>
-->
	</div> <!-- END premiera -->


	<div class="rozmowy">
		<?php the_field('rozmowy')?>
		<?php 
				$link = get_field('zobacz_wiecej_2');
				if( $link ): 
   					 $link_url = $link['url'];
    					 $link_title = $link['title'];
    					 $link_target = $link['target'] ? $link['target'] : '_self';
			?>
    		<a class="show-more" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>

		<div class="rozmowy-pary">
		  <div class="row row-1">
		     <div class="col-sm-4"> 
			<?php	
			if( have_rows('rozmowy-osoby-1') ):
    			while ( have_rows('rozmowy-osoby-1') ) : the_row();
			$lt_speaker_foto = get_sub_field('rozmowy-osoby-foto-1');
        		$lt_speaker_name = get_sub_field('rozmowy-osoby-nazwisko-1');
			$lt_speaker_country = get_sub_field('rozmowy-osoby-afiliacja-1');

			$lt_speaker_foto_2 = get_sub_field('rozmowy-osoby-foto-2');
        		$lt_speaker_name_2 = get_sub_field('rozmowy-osoby-nazwisko-2');
			$lt_speaker_country_2 = get_sub_field('rozmowy-osoby-afiliacja-2');
        		echo "<div class='row'><div class='col-sm-6 rozmowy-para-1'> <img class='img-responsive img-speaker-foto rozmowy-foto' src='$lt_speaker_foto'> <p class='rozmowy-name'> $lt_speaker_name </p> <p class='rozmowy-afil'> $lt_speaker_country</p></div><div class='col-sm-6 rozmowy-para-2'> <img class='img-responsive img-speaker-foto rozmowy-foto' src='$lt_speaker_foto_2'> <p class='rozmowy-name'> $lt_speaker_name_2 </p> <p class='rozmowy-afil'> $lt_speaker_country_2</p></div></div>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>
		</div> <!-- ENd col-sm-4 -->
		<div class="col-sm-4"> 
			<?php	
			if( have_rows('rozmowy-osoby-2') ):
    			while ( have_rows('rozmowy-osoby-2') ) : the_row();
			$lt_speaker_foto_3 = get_sub_field('rozmowy-osoby-foto-3');
        		$lt_speaker_name_3 = get_sub_field('rozmowy-osoby-nazwisko-3');
			$lt_speaker_country_3 = get_sub_field('rozmowy-osoby-afiliacja-3');

			$lt_speaker_foto_4 = get_sub_field('rozmowy-osoby-foto-4');
        		$lt_speaker_name_4 = get_sub_field('rozmowy-osoby-nazwisko-4');
			$lt_speaker_country_4 = get_sub_field('rozmowy-osoby-afiliacja-4');
        		echo "<div class='row'><div class='col-sm-6 rozmowy-para-1'> <img class='img-responsive img-speaker-foto rozmowy-foto-2' src='$lt_speaker_foto_3'> <p class='rozmowy-name'> $lt_speaker_name_3 </p> <p class='rozmowy-afil'> $lt_speaker_country_3</p></div><div class='col-sm-6 rozmowy-para-2'> <img class='img-responsive img-speaker-foto rozmowy-foto-2' src='$lt_speaker_foto_4'> <p class='rozmowy-name'> $lt_speaker_name_4 </p> <p class='rozmowy-afil'> $lt_speaker_country_4</p></div></div>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>
		</div> <!-- ENd col-sm-4 -->

		<div class="col-sm-4"> 
			<?php	
			if( have_rows('rozmowy-osoby-3') ):
    			while ( have_rows('rozmowy-osoby-3') ) : the_row();
			$lt_speaker_foto_5 = get_sub_field('rozmowy-osoby-foto-5');
        		$lt_speaker_name_5 = get_sub_field('rozmowy-osoby-nazwisko-5');
			$lt_speaker_country_5 = get_sub_field('rozmowy-osoby-afiliacja-5');

			$lt_speaker_foto_6 = get_sub_field('rozmowy-osoby-foto-6');
        		$lt_speaker_name_6 = get_sub_field('rozmowy-osoby-nazwisko-6');
			$lt_speaker_country_6 = get_sub_field('rozmowy-osoby-afiliacja-6');
        		echo "<div class='row'><div class='col-sm-6 rozmowy-para-1'> <img class='img-responsive img-speaker-foto rozmowy-foto-3' src='$lt_speaker_foto_5'> <p class='rozmowy-name'> $lt_speaker_name_5 </p> <p class='rozmowy-afil'> $lt_speaker_country_5</p></div><div class='col-sm-6 rozmowy-para-2'> <img class='img-responsive img-speaker-foto rozmowy-foto-3' src='$lt_speaker_foto_6'> <p class='rozmowy-name'> $lt_speaker_name_6 </p> <p class='rozmowy-afil'> $lt_speaker_country_6</p></div></div>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>
		</div> <!-- ENd col-sm-4 -->
	    </div> <!-- END row -->

		<div class="row row-2">
		     <div class="col-sm-4"> 
			<?php	
			if( have_rows('rozmowy-osoby-4') ):
    			while ( have_rows('rozmowy-osoby-4') ) : the_row();
			$lt_speaker_foto_7 = get_sub_field('rozmowy-osoby-foto-7');
        		$lt_speaker_name_7 = get_sub_field('rozmowy-osoby-nazwisko-7');
			$lt_speaker_country_7 = get_sub_field('rozmowy-osoby-afiliacja-7');

			$lt_speaker_foto_8 = get_sub_field('rozmowy-osoby-foto-8');
        		$lt_speaker_name_8 = get_sub_field('rozmowy-osoby-nazwisko-8');
			$lt_speaker_country_8 = get_sub_field('rozmowy-osoby-afiliacja-8');
        		echo "<div class='row'><div class='col-sm-6 rozmowy-para-1'> <img class='img-responsive img-speaker-foto rozmowy-foto-2' src='$lt_speaker_foto_7'> <p class='rozmowy-name'> $lt_speaker_name_7 </p> <p class='rozmowy-afil'> $lt_speaker_country_7</p></div><div class='col-sm-6 rozmowy-para-2'> <img class='img-responsive img-speaker-foto rozmowy-foto-2' src='$lt_speaker_foto_8'> <p class='rozmowy-name'> $lt_speaker_name_8 </p> <p class='rozmowy-afil'> $lt_speaker_country_8</p></div></div>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>
		</div> <!-- ENd col-sm-4 -->
		<div class="col-sm-4"> 
			<?php	
			if( have_rows('rozmowy-osoby-5') ):
    			while ( have_rows('rozmowy-osoby-5') ) : the_row();
			$lt_speaker_foto_9 = get_sub_field('rozmowy-osoby-foto-9');
        		$lt_speaker_name_9 = get_sub_field('rozmowy-osoby-nazwisko-9');
			$lt_speaker_country_9 = get_sub_field('rozmowy-osoby-afiliacja-9');

			$lt_speaker_foto_10 = get_sub_field('rozmowy-osoby-foto-10');
        		$lt_speaker_name_10 = get_sub_field('rozmowy-osoby-nazwisko-10');
			$lt_speaker_country_10 = get_sub_field('rozmowy-osoby-afiliacja-10');
        		echo "<div class='row'><div class='col-sm-6 rozmowy-para-1'> <img class='img-responsive img-speaker-foto rozmowy-foto' src='$lt_speaker_foto_9'> <p class='rozmowy-name'> $lt_speaker_name_9 </p> <p class='rozmowy-afil'> $lt_speaker_country_9</p></div><div class='col-sm-6 rozmowy-para-2'> <img class='img-responsive img-speaker-foto rozmowy-foto' src='$lt_speaker_foto_10'> <p class='rozmowy-name'> $lt_speaker_name_10 </p> <p class='rozmowy-afil'> $lt_speaker_country_10</p></div></div>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>
		</div> <!-- ENd col-sm-4 -->

	<!--	<div class="col-sm-4"> 
			<?php	
			if( have_rows('rozmowy-osoby-6') ):
    			while ( have_rows('rozmowy-osoby-6') ) : the_row();
			$lt_speaker_foto_11 = get_sub_field('rozmowy-osoby-foto-11');
        		$lt_speaker_name_11 = get_sub_field('rozmowy-osoby-nazwisko-11');
			$lt_speaker_country_11 = get_sub_field('rozmowy-osoby-afiliacja-11');

			$lt_speaker_foto_12 = get_sub_field('rozmowy-osoby-foto-12');
        		$lt_speaker_name_12 = get_sub_field('rozmowy-osoby-nazwisko-12');
			$lt_speaker_country_12 = get_sub_field('rozmowy-osoby-afiliacja-12');
        		echo "<div class='row'><div class='col-sm-6 rozmowy-para-1'> <img class='img-responsive img-speaker-foto rozmowy-foto-4' src='$lt_speaker_foto_11'> <p class='rozmowy-name'> $lt_speaker_name_11 </p> <p class='rozmowy-afil'> $lt_speaker_country_11</p></div><div class='col-sm-6 rozmowy-para-2'> <img class='img-responsive img-speaker-foto rozmowy-foto-4' src='$lt_speaker_foto_12'> <p class='rozmowy-name'> $lt_speaker_name_12 </p> <p class='rozmowy-afil'> $lt_speaker_country_12</p></div></div>";
    			endwhile;
			else :
    			// no rows found
				endif;		
			?>
		</div> <!-- ENd col-sm-4 --> 


	       </div> <!-- END row -->

	    </div> <!-- END rozmowy-pary -->



	</div> <!-- END rozmowy -->

	<div class="website-end">
		  <img src="<?php the_field('main-image-mobile'); ?>"> 
	</div> <!-- END website-end --> 
	<div class="kontakt">
		<p class="kontakt-ola">Jeśli masz pytania dotyczące konferencji,<br> skontaktuj się z Aleksandrą Czetwertyńską (aczetwertynska@centrumcyfrowe.pl)</p>
	</div> <!-- END kontakt -->
	<div class="loga-UE">
		<div class="logos">
			<div class="logo-org logo-footer">
				<a href="https://centrumcyfrowe.pl/spoled/"><img class="img-responsive" src="<?php the_field('logo-spoled')?>"></a>
				<a href="https://ceo.org.pl/" target="_blank"><img class="img-responsive" src="<?php the_field('logo-ceo')?>"></a>
				<a href="https://centrumcyfrowe.pl/"><img class="img-responsive" src="<?php the_field('logo-fcc')?>"></a>
			</div>

		<img class="img-responsive logo-UE"  src="<?php the_field('loga-ue'); ?>">

	</div> <!-- END loga UE -->
	
  </div> <!-- END page-container -->		

<div class="content-nav">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-sm-12 hidden-xs">
                <ul id="content-nav-ul">
			<li><a href="#rejestracja">rejestracja</a></li>
			<li><a href="#program">program</a></li>
			<li><a href="#debata">debata</a></li>
			<li><a href="#cyfrowe-opowiesci">cyfrowe opowieści</a></li>
			<li><a href="#warsztaty">warsztaty</a></li> 
			<li><a href="#spotkania">spotkania</a></li> 
			<li><a href="#premiera">premiera</a></li> 
			<li><a href="#rozmowy">rozmowy</a></li> 

                </ul>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>
