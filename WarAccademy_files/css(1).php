@charset "UTF-8";

/* --- bb_code.css --- */

/* .bbCodeX classes are designed to exist inside .baseHtml. ie: they have no CSS reset applied */

.bbCodeBlock
{
	background-color: rgb(234,239,240);
margin: 1em 150px 1em 0;
border: 1px solid rgb(205,211,212);
border-radius: 2px;
overflow: auto;

}

	.bbCodeBlock .bbCodeBlock,
	.hasJs .bbCodeBlock .bbCodeSpoilerText,
	.messageList.withSidebar .bbCodeBlock
	{
		margin-right: 0;
	}

	/* mini CSS reset */
	.bbCodeBlock pre,
	.bbCodeBlock blockquote
	{
		margin: 0;
	}

	.bbCodeBlock img
	{
		border: none;
	}

.bbCodeBlock .type
{
	font-size: 13px;
font-family: 'PT Sans', sans-serif;
color: rgb(101, 101, 101);
background-color: rgb(226, 226, 226);
padding: 10px;
border-bottom-style: none;
border-top-left-radius: 2px;
border-top-right-radius: 2px;

}

.bbCodeBlock pre,
.bbCodeBlock .code
{
	font-size: 10pt;
font-family: Consolas, 'Courier New', Courier, monospace;
background-color: rgb(250, 250, 250);
background-repeat: repeat-x;
background-position: top;
padding-right: 10px;
padding-left: 10px;
border-bottom-right-radius: 2px;
border-bottom-left-radius: 2px;
word-wrap: normal;
overflow: auto;
line-height: 26px;
min-height: 30px;
max-height: 500px;
_width: 600px;
direction: ltr;


background-image:-webkit-repeating-linear-gradient(top, rgba(0,0,0,.015) 0px, rgba(0,0,0,.015) 26px, rgba(0,0,0,.045) 26px, rgba(0,0,0,.045) 52px);
background-image:-moz-repeating-linear-gradient(top, rgba(0,0,0,.015) 0px, rgba(0,0,0,.015) 26px, rgba(0,0,0,.045) 26px, rgba(0,0,0,.045) 52px);
background-image:-ms-repeating-linear-gradient(top, rgba(0,0,0,.015) 0px, rgba(0,0,0,.015) 26px, rgba(0,0,0,.045) 26px, rgba(0,0,0,.045) 52px);
background-image:-o-repeating-linear-gradient(top, rgba(0,0,0,.015) 0px, rgba(0,0,0,.015) 26px, rgba(0,0,0,.045) 26px, rgba(0,0,0,.045) 52px);
background-image:repeating-linear-gradient(top, rgba(0,0,0,.015) 0px, rgba(0,0,0,.015) 26px, rgba(0,0,0,.045) 26px, rgba(0,0,0,.045) 52px);

}

.bbCodeBlock .code
{
	white-space: nowrap;
}

.bbCodeQuote
{
	border-left: 3px solid #1ABC9C;

}

.bbCodeQuote .attribution
{
	
}

.bbCodeQuote .quoteContainer
{
	overflow: hidden;
	position: relative;

	font-size: 9pt;
background-color: rgb(250, 250, 250);
background-repeat: repeat-x;
background-position: top;
padding: 10px;
border-radius: 2px;

}


	.bbCodeQuote .quoteContainer .quote
	{
		max-height: 150px;
		overflow: hidden;
		padding-bottom: 1px;
	}

		.NoJs .bbCodeQuote .quoteContainer .quote
		{
			max-height: none;
		}

	.bbCodeQuote .quoteContainer .quoteExpand
	{
		display: none;
		box-sizing: border-box;
		position: absolute;
		height: 80px;
		top: 90px;
		left: 0;
		right: 0;

		font-size: 11px;
		line-height: 1;
		text-align: center;
		color: rgb(96,101,102);
		cursor: pointer;
		padding-top: 65px;
		background: -webkit-linear-gradient(top, rgba(250, 250, 250, 0) 0%, rgb(250, 250, 250) 80%);
		background: -moz-linear-gradient(top, rgba(250, 250, 250, 0) 0%, rgb(250, 250, 250) 80%);
		background: -o-linear-gradient(top, rgba(250, 250, 250, 0) 0%, rgb(250, 250, 250) 80%);
		background: linear-gradient(to bottom, rgba(250, 250, 250, 0) 0%, rgb(250, 250, 250) 80%);

		border-bottom-left-radius: 2px;
		border-bottom-right-radius: 2px;
	}

	.bbCodeQuote .quoteContainer .quoteExpand.quoteCut
	{
		display: block;
	}

	.bbCodeQuote .quoteContainer.expanded .quote
	{
		max-height: none;
	}

	.bbCodeQuote .quoteContainer.expanded .quoteExpand
	{
		display: none;
	}


	.bbCodeQuote img
	{
		max-height: 150px;
	}

	.bbCodeQuote iframe,
	.bbCodeQuote .fb_iframe_widget,
	.bbCodeQuote object,
	.bbCodeQuote embed
	{
		max-width: 200px;
		max-height: 150px;
	}

	.bbCodeQuote iframe:-webkit-full-screen
	{
		max-width: none;
		max-height: none;
	}

	.bbCodeQuote iframe:-moz-full-screen
	{
		max-width: none;
		max-height: none;
	}

	.bbCodeQuote iframe:-ms-fullscreen
	{
		max-width: none;
		max-height: none;
	}

	.bbCodeQuote iframe:fullscreen
	{
		max-width: none;
		max-height: none;
	}

.bbCodeSpoilerButton
{
	margin: 5px 0;
	max-width: 99%;
}

	.bbCodeSpoilerButton > span
	{
		display: inline-block;
		max-width: 100%;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}

.hasJs .bbCodeSpoilerText
{
	display: none;
	background-color: #FFFFFF;
padding: 5px;
margin-top: 5px;
margin-right: ;
margin-bottom: 5px;
border: 1px solid rgb(226, 226, 226);
overflow: auto;

}

	.hasJs .bbCodeSpoilerText .bbCodeSpoilerText,
	.hasJs .bbCodeSpoilerText .bbCodeBlock,
	.hasJs .messageList.withSidebar .bbCodeSpoilerText
	{
		margin-right: 0;
	}

.NoJs .bbCodeSpoilerContainer
{
	background-color: rgb(83, 83, 83); /* fallback for browsers without currentColor */
	background-color: currentColor;
}

	.NoJs .bbCodeSpoilerContainer > .bbCodeSpoilerText
	{
		visibility: hidden;
	}

	.NoJs .bbCodeSpoilerContainer:hover
	{
		background-color: transparent;
	}

		.NoJs .bbCodeSpoilerContainer:hover > .bbCodeSpoilerText
		{
			visibility: visible;
		}


@media (max-width:800px)
{
	.Responsive .bbCodeBlock,
	.Responsive.hasJs .bbCodeSpoilerText
	{
		margin-right: 0;
	}
}


/* --- login_bar.css --- */

/** Login bar basics **/

#loginBar .pageContent 
{
	color: rgb(250, 250, 250);
background-color: rgb(101, 101, 101);
box-shadow: inset 0 -1px 0 rgba(255,255,255,.1);

}

	

	#loginBar .pageContent
	{
		padding-top: 0;
		position: relative;
		_height: 0px;
	}

	#loginBar a
	{
		color: rgba(255,255,255,.8);

	}

	#loginBar form
	{
		padding: 20px 0;
margin: 0 auto;
display: none;
line-height: 20px;
position: relative;

	}

		#loginBar .xenForm .ctrlUnit,
		#loginBar .xenForm .ctrlUnit > dt label
		{
			margin: 0;
			border: none;
		}

		#loginBar .xenForm .ctrlUnit > dd
		{
			position: relative;
		}

	#loginBar .lostPassword,
	#loginBar .lostPasswordLogin
	{
		font-size: 11px;
	}

	#loginBar .rememberPassword
	{
		font-size: 11px;
	}

	#loginBar .textCtrl
	{
		color: #FFFFFF;
background: url(rgba.php?r=0&g=0&b=0&a=38); background: rgba(0, 0, 0, 0.15); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#26000000,endColorstr=#26000000);
border-color:  rgb(0, 0, 0); border-color:  rgba(0, 0, 0, 0.15); _border-color:  rgb(0, 0, 0);

	}

	#loginBar .textCtrl[type=text]
	{
		font-weight: bold;

	}

	#loginBar .textCtrl:-webkit-autofill /* http://code.google.com/p/chromium/issues/detail?id=1334#c35 */
	{
		background: url(rgba.php?r=0&g=0&b=0&a=38) !important; background: rgba(0, 0, 0, 0.15) !important; _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#26000000,endColorstr=#26000000);
		color: #FFFFFF;
	}

	#loginBar .textCtrl:focus
	{
		background: url(rgba.php?r=0&g=0&b=0&a=76) none; background: rgba(0, 0, 0, 0.3) none; _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000,endColorstr=#4C000000);

	}

	#loginBar input.textCtrl.disabled
	{
		color: rgb(128, 128, 128);
background-color: #000;
border-style: dashed;

	}

	#loginBar .button
	{
		min-width: 85px;
		*width: 85px;
	}

		#loginBar .button.primary
		{
			font-weight: bold;
		}

/** changes when eAuth is present **/

#loginBar form.eAuth
{
	-x-max-width: 720px; /* normal width + 170px */
}

	#loginBar form.eAuth .ctrlWrapper
	{
		border-right:  1px dotted rgb(250, 250, 250); border-right:  1px dotted rgba(250, 250, 250, .5); _border-right:  1px dotted rgb(250, 250, 250);
		margin-right: 220px;
		box-sizing: border-box;
	}

	#loginBar form.eAuth #eAuthUnit
	{
		position: absolute;
		top: 0px;
		right: 0;
		width: 200px;
	}

		#eAuthUnit li
		{
			margin-top: 10px;
			line-height: 0;
		}

/** handle **/

#loginBar #loginBarHandle label 
{
	font-weight: bold;
font-size: 13px;
color: #FFF;
background-color: rgb(101, 101, 101);
padding: 0 10px;
border-top-left-radius: 0;
border-top-right-radius: 0;
border-bottom-right-radius: 2px;
border-bottom-left-radius: 2px;
position: absolute;
right: 0;
display: inline-block;
text-align: center;
z-index: 1;
line-height: 30px;
height: 30px;

}


@media (max-width:800px)
{
	.Responsive #loginBar form.eAuth .ctrlWrapper
	{
		border-right: none;
		margin-right: 0;
		padding-top: 20px;
	}

	.Responsive #loginBar form.eAuth #eAuthUnit
	{
		position: static;
		width: 200px;
		margin: 0 auto;
	}
}
@media (max-width:610px)
{
	.Responsive #loginBar .xenForm .ctrlUnit > dd {padding-left: 0; padding-right: 0;}
	.Responsive #loginBar form.eAuth #eAuthUnit {width: auto; margin-left: 20px; margin-right: 20px;}
}



/* --- moderator_bar.css --- */

#moderatorBar
{
	background-color: rgb(41, 41, 41);
	border-bottom: 1px solid rgb(208, 208, 208);	
	font-size: 11px;
}

/*#moderatorBar
{
	box-shadow: 0 0 5px rgb(128, 128, 128);
	width: 100%;
	position: fixed;
	top: 0px;
	z-index: 100;
}

body
{
	padding-top: 25px;
}*/

/* clearfix */ #moderatorBar { zoom: 1; } #moderatorBar:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

#moderatorBar .pageContent
{
	padding: 2px 0;
	overflow: auto;
}

#moderatorBar a
{
	display: inline-block;
	padding: 2px 10px;
	border-radius: 3px;
}

#moderatorBar a,
#moderatorBar .itemCount
{
	color: rgb(240, 240, 240);
}

	#moderatorBar a:hover
	{
		text-decoration: none;
		background-color: rgb(101, 101, 101);
		color: rgb(250, 250, 250);
	}

/* TODO: maybe sort out the vertical alignment of the counters so they they are properly centered */

#moderatorBar .itemLabel,
#moderatorBar .itemCount
{
	display: inline-block;
	height: 16px;
	line-height: 16px;
}

#moderatorBar .itemCount
{	
	background: rgb(101, 101, 101);
	padding-left: 6px;
	padding-right: 6px;
	
	text-align: center;
	
	font-weight: bold;
	
	border-radius: 2px;
	text-shadow: none;
}

	#moderatorBar .itemCount.alert
	{
		background: #e03030;
		color: white;
		box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
	}
	
#moderatorBar .adminLink
{
	float: right;
}

#moderatorBar .permissionTest,
#moderatorBar .permissionTest:hover
{
	background: #e03030;
	color: white;
	box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
	font-weight: bold;
}

/* --- node_link.css --- */

/* tbd */

/* --- node_list.css --- */

.nodeList { zoom: 1; }
.nodeList .node {
	zoom: 1;
	vertical-align: bottom;
}

.nodeList .node.level_1
{
	margin-bottom: 20px;
}

.nodeList .node.level_1:last-child
{
	margin-bottom: 0;
}

.nodeList .node.groupNoChildren + .node.groupNoChildren
{
	margin-top: -20px;
}

.node .nodeInfo
{
	overflow: hidden; zoom: 1;
	position: relative;
}

	.node .nodeInfo.primaryContent,
	.node .nodeInfo.secondaryContent
	{
		padding: 0;
	}

.node .nodeIcon
{
	margin: 10px;
float: left;
width: 32px;
height: 32px;

}

	.node .forumNodeInfo .nodeIcon,
	.node .categoryForumNodeInfo .nodeIcon
	{
		background: rgb(208, 208, 208) url('styles/intrepid/uix/nodeicons.png') no-repeat -32px 0;

	}

	.node .forumNodeInfo.unread .nodeIcon,
	.node .categoryForumNodeInfo.unread .nodeIcon
	{
		background: #1ABC9C url('styles/intrepid/uix/nodeicons.png') no-repeat 0 0;

	}

	.node .pageNodeInfo .nodeIcon
	{
		background: rgb(226, 226, 226) url('styles/intrepid/uix/nodeicons.png') no-repeat -96px 0;

	}

	.node .linkNodeInfo .nodeIcon
	{
		background: rgb(226, 226, 226) url('styles/intrepid/uix/nodeicons.png') no-repeat -64px 0;

	}

.node .nodeText
{
	margin: 10px 270px 10px 56px;
min-height: 40px;

}

	.node .nodeText .nodeTitle
	{
		font-size: 16px;
color: rgb(41, 41, 41);

	}

		.node .unread .nodeText .nodeTitle
		{
			font-weight: bold;
color: #1ABC9C;

		}

	.node .nodeDescription
	{
		font-size: 11px;

	}

	.hasJs .node .nodeDescriptionTooltip
	{
		/* will be shown as a tooltip */
		display: none;
	}

	.Touch .node .nodeDescriptionTooltip
	{
		/* touch browsers don't see description tooltips */
		display: block;
	}

	.node .nodeStats
	{
		font-size: 13px;
background-color: rgb(240, 240, 240);
padding-right: 10px;
padding-left: 10px;
border-bottom-right-radius: 5px;
border-bottom-left-radius: 5px;
line-height: 30px;
position: absolute;
bottom: 0;
left: 0;
right: 0;

	}

	.node .nodeExtraNote
	{
		text-align: right;
		font-size: 11px;
		color: rgb(128, 128, 128);
	}

	.node .subForumList
	{
		overflow: hidden; *zoom: 1;
		margin: -5px 0 10px;
		margin-left: 56px;
	}

		.node .subForumList li
		{
			float: left;
			width: 31%;
			margin: 2px 0 2px 2%;
		}

			.node .subForumList li .nodeTitle
			{
				font-size: 11px;
				overflow: hidden;
				white-space: nowrap;
				word-wrap: normal;
				text-overflow: ellipsis;

				font-size: 13px;
color: rgb(41, 41, 41);

			}

			.node .subForumList .unread .nodeTitle
			{
				font-weight: bold;
color: #1ABC9C;


				
			}

			.node .subForumList li ol,
			.node .subForumList li ul
			{
				display: none;
			}

.node .nodeLastPost
{
	background-color: #FFFFFF;
padding: 10px;
border-bottom: 1px solid rgb(226, 226, 226);


	font-size: 13px;
background-color: transparent;
padding: 5px;
margin: 10px;
border-bottom-width: 0;
border-radius: 2px;
position: absolute;
top: 0;
right: 0;
line-height: 15px;
box-sizing: border-box;
white-space: nowrap;
word-wrap: normal;
overflow: hidden;
width: 220px;
height: 40px;

}

.node .nodeLastPost .lastThreadTitle,
.node .nodeLastPost .lastThreadMeta
{
	text-overflow: ellipsis;
	max-width: 100%;
	display: block;
	overflow: hidden;
}

	.node .nodeLastPost .lastThreadMeta
	{
		display: block;
	}

	.node .nodeLastPost .noMessages
	{
		/* line-height: 28px; */
	}

.node .nodeControls
{
	position: absolute;
	top: 0;
	right: 240px;
	margin: 20px 0;
}

	.node .tinyIcon
	{
		font-size: 16px;
color: #1ABC9C;
background-color: transparent;
background-repeat: no-repeat;
background-position: 0 -448px;
margin: 1px 4px;
display: block;
white-space: nowrap;
overflow: hidden;
opacity: 0.25;
text-align: center;
width: 16px;

	}

	.node .nodeInfo:hover .tinyIcon[href],
	.Touch .node .tinyIcon
	{
		opacity: 1;

	}

		/*.node .feedIcon
		{
			background: transparent url('styles/intrepid/xenforo/xenforo-ui-sprite.png') no-repeat -112px -16px;
		}*/

/* description tooltip */

.nodeDescriptionTip
{
	padding: 4px 10px;
margin-top: -22px;
line-height: 1.5;
width: 350px;
height: auto;

}

	.nodeDescriptionTip .arrow
	{
		border: 6px solid transparent;
border-right-color:  rgb(94, 94, 94); border-right-color:  rgba(94, 94, 94, 0.9); _border-right-color:  rgb(94, 94, 94);
border-left: 1px none black;
top: 6px;
left: -6px;
bottom: auto;

	}

	.nodeDescriptionTip.arrowBottom .arrow
	{
		top: auto;
		left: 10px;
		bottom: -6px;
		border: 6px solid transparent;
		border-top-color:  rgb(94, 94, 94); border-top-color:  rgba(94, 94, 94, 0.9); _border-top-color:  rgb(94, 94, 94);
		border-bottom: 1px none black;
	}

/* main area - used for L2 categories and most other nodes */

.nodeList .categoryForumNodeInfo,
.nodeList .forumNodeInfo,
.nodeList .pageNodeInfo,
.nodeList .linkNodeInfo
{
	background-color: #FFFFFF;
padding: 10px;
border-bottom: 1px solid rgb(226, 226, 226);


	padding: 0;
}

/* category strip - used for L1 categories and group headers */

.categoryStrip.subHeading {display: none;}

.nodeList .categoryStrip
{
	font-size: 13px;
color: rgb(101, 101, 101);
text-decoration: none;
background-color: rgb(240, 240, 240);
padding: 10px;
margin: 0 auto;
border-bottom: 1px solid rgb(226, 226, 226);
border-radius: 5px;
border-bottom-right-radius: 0;
border-bottom-left-radius: 0;


	color: #FFFFFF;
background-color: rgb(96,101,102);
margin: 0 0 5px;
border-style: none;
border-radius: 5px;
min-height: 6px;
position: relative;

}

	.nodeList .categoryStrip .nodeTitle
	{
		font-size: 18px;
font-family: 'Squada One', sans-serif;
color: #FFFFFF;
font-weight: normal;

	}

		.nodeList .categoryStrip .nodeTitle a
		{
			color: #FFFFFF;
		}

	.nodeList .categoryStrip .nodeDescription
	{
		font-size: 11px;

	}

		.nodeList .categoryStrip .nodeDescription a
		{
			color: ;
		}

.nodeList .node.groupNoChildren + .node.groupNoChildren .categoryStrip
{
	display: none;
}

/* node stats area */

.nodeStats
{
	overflow: hidden; zoom: 1;
}

.nodeStats dl,
.subForumsPopup
{
	float: left;
	display: block;
	margin-right: 3px;
}

.subForumsPopup.Popup .PopupControl.PopupOpen
{
	background-image: none;
}

.subForumsPopup a.PopupControl
{
	padding-left: 5px;
	padding-right: 5px;
}

.subForumsPopup .dt
{
	color: rgb(128, 128, 128);
}

.subForumsPopup .PopupOpen .dt
{
	color: rgb(83, 83, 83);
}

.subForumsMenu .node .node /* for depths 2+ */
{
	padding-left: 10px;
}

	.subForumsMenu .node .nodeTitle
	{
		font-size: 11px;
	}

	.subForumsMenu .node .unread .nodeTitle
	{
		font-weight: bold;
color: #1ABC9C;

	}

/** new discussion button below nodelist **/

.nodeListNewDiscussionButton
{
	margin-top: 10px;
	text-align: right;
}


@media (max-width:610px)
{
	.Responsive .node .nodeText
	{
		margin-right: 0;
	}

	.Responsive.Touch .node .nodeDescriptionTooltip,
	.Responsive .node .nodeDescription
	{
		display: none;
	}

	

	.Responsive .node .nodeControls
	{
		display: none;
	}

	.Responsive .node .subForumList
	{
		display: none;
	}

	.Responsive .nodeDescriptionTip
	{
		width: auto;
		max-width: 350px;
	}
}

@media (max-width:480px)
{
	.Responsive .subForumsPopup
	{
		display: none;
	}
}





.node .nodeInfo.Metropolis span.nodeIcon {
    background: url(https://i.imgur.com/zFNgXLq.png);
    background-position: center;
    background-size: cover;
    height: 60px;
    width: 60px;
    margin-top: 24px;
    margin-right: 20px;
}
.node .Metropolis .nodeText {margin-top: 24px;min-height: 0px;}


.node .nodeInfo.SkyBlock span.nodeIcon {
    background: url(https://imgur.com/Uu4AubB.png);
    background-position: center;
    background-size: cover;
    height: 60px;
    width: 60px;
    margin-top: 24px;
    margin-right: 20px;
}
.node .SkyBlock .nodeText {margin-top: 24px;min-height: 0px;}

.node .nodeInfo.BedWars span.nodeIcon {
    background: url(https://imgur.com/YzzRQ6f.png);
    background-position: center;
    background-size: cover;
    height: 60px;
    width: 60px;
    margin-top: 24px;
    margin-right: 20px;
}
.node .BedWars .nodeText {margin-top: 24px;min-height: 0px;}


.node .nodeInfo.Pixelmon span.nodeIcon {
    background: url(https://i.imgur.com/ASERZQ3.png);
    background-position: center;
    background-size: cover;
    height: 60px;
    width: 60px;
    margin-top: 24px;
    margin-right: 20px;
}
.node .Pixelmon .nodeText {margin-top: 24px;min-height: 0px;}


.node .nodeInfo.Creative span.nodeIcon {
    background: url(https://i.imgur.com/U9YB91k.png);
    background-position: center;
    background-size: cover;
    height: 60px;
    width: 60px;
    margin-top: 24px;
    margin-right: 20px;
}
.node .Creative .nodeText {margin-top: 24px;min-height: 0px;}


.node .nodeInfo.Factions span.nodeIcon {
    background: url(https://i.imgur.com/aTpacwq.png);
    background-position: center;
    background-size: cover;
    height: 60px;
    width: 60px;
    margin-top: 24px;
    margin-right: 20px;
}
.node .Factions .nodeText {margin-top: 24px;min-height: 0px;}


.node .nodeInfo.Practice span.nodeIcon {
    background: url(https://cdn.cosmicpvp.com/prisons/BuyCraft/1167436.png?6);
    background-position: center;
    background-size: cover;
    height: 60px;
    width: 60px;
    margin-top: 24px;
    margin-right: 20px;
}
.node .Practice .nodeText {margin-top: 24px;min-height: 0px;}


.node .nodeInfo.Vanilla span.nodeIcon {
    background: url(https://imgur.com/0acaaWI.png);
    background-position: center;
    background-size: cover;
    height: 60px;
    width: 60px;
    margin-top: 24px;
    margin-right: 20px;
}
.node .Vanilla .nodeText {margin-top: 24px;min-height: 0px;}


.node .nodeInfo.FazioniCS span.nodeIcon {
    background: url(https://imgur.com/sA5T39F.png);
    background-position: center;
    background-size: cover;
    height: 60px;
    width: 60px;
    margin-top: 24px;
    margin-right: 20px;
}
.node .FazioniCS .nodeText {margin-top: 24px;min-height: 0px;}


.node .nodeInfo.OPPrison span.nodeIcon {
    background: url(https://imgur.com/Wk3eobq.png);
    background-position: center;
    background-size: cover;
    height: 60px;
    width: 60px;
    margin-top: 24px;
    margin-right: 20px;
}
.node .OPPrison .nodeText {margin-top: 24px;min-height: 0px;}


.node .nodeInfo.KitPvP span.nodeIcon {
    background: url(https://imgur.com/AWwxuhl.png);
    background-position: center;
    background-size: cover;
    height: 60px;
    width: 60px;
    margin-top: 24px;
    margin-right: 20px;
}
.node .KitPvP .nodeText {margin-top: 24px;min-height: 0px;}





/* --- notices.css --- */

.hasJs .FloatingContainer .Notice
{
	display: none;
}

.FloatingContainer
{
	position: fixed;
	width: 300px;
	z-index: 9997;
	top: auto;
	left: auto;
	bottom: 0;
	right: 20px;
}

.Notices .Notice .blockImage
{
	padding: 10px 0 5px 10px;
}

.Notices .Notice .blockImage,
.FloatingContainer .floatingImage
{
	float: left;
}

.Notices .Notice .blockImage img,
.FloatingContainer .floatingImage img
{
	max-width: 48px;
	max-height: 48px;
}

.Notices .hasImage,
.FloatingContainer .hasImage
{
	margin-left: 64px;
	min-height: 52px;
}

.FloatingContainer .floatingItem
{
	display: block;
	padding: 10px;
	font-size: 11px;
	position: relative;
	margin-bottom: 20px;
	border: 1px solid transparent;
	border-radius: 6px;
	box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
}

.FloatingContainer .floatingItem.primary
{
	background-color: #FFFFFF;
	border-color: rgb(240, 240, 240);
}

.FloatingContainer .floatingItem.secondary
{
	color: rgb(96,101,102);
	background-color: rgb(205,211,212);
	border-color: rgb(234,239,240);
}

.FloatingContainer .floatingItem.dark
{
	color: #fff;
	background: black;
	background: url(rgba.php?r=0&g=0&b=0&a=204); background: rgba(0,0,0, 0.8); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#CC000000,endColorstr=#CC000000);
	border-color: #333;
}

.FloatingContainer .floatingItem.light
{
	color: #000;
	background: white;
	background: url(rgba.php?r=255&g=255&b=255&a=204); background: rgba(255,255,255, 0.8); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#CCFFFFFF,endColorstr=#CCFFFFFF);
	border-color: #ddd;
}

.FloatingContainer .floatingItem .title
{
	font-size: 14px;
	padding-bottom: 5px;
	font-weight: bold;
	display: block;
}

.FloatingContainer .floatingItem .DismissCtrl
{
	position: static;
	float: right;
	margin-left: 5px;
	margin-right: -5px;
	margin-top: -5px;
}

.Notices
{
	display: none;
}


	@media (max-width:800px)
	{
		.Responsive .Notice.wide { display: none !important; }
	}
	
	@media (max-width:610px)
	{
		.Responsive .Notice.medium { display: none !important; }
	}
	
	@media (max-width:480px)
	{
		.Responsive .Notice.narrow { display: none !important; }
		
		.Responsive .FloatingContainer
		{
			right: 50%;
			margin-right: -150px;
		}
	}


/* --- panel_scroller.css --- */

.hasJs .Notices.PanelScroller { display: none; }

.PanelScroller .scrollContainer,
.PanelScrollerOff .panel
{
	background-color: rgb(205,211,212);
margin-bottom: 10px;
border: 1px solid rgb(181,190,192);
border-radius: 2px;
font-size: 13pt;

}

.PanelScroller .PanelContainer
{
	position: relative;
	clear: both;
	width: 100%;
	overflow: auto;
}

	.hasJs .PanelScroller .Panels
	{
		position: absolute;
	}

	.PanelScroller .Panels
	{
		clear: both;
		margin: 0;
		padding: 0;
	}
	
		.PanelScroller .panel,
		.PanelScrollerOff .panel
		{
			overflow: hidden;
			position: relative;
			padding: 0 !important;

			background-color: rgb(205,211,212);
padding: 10px;
color: rgb(96,101,102);

		}
			
		.PanelScroller .panel .noticeContent,
		.PanelScrollerOff .panel .noticeContent
		{
			padding: 10px;
		}

/** panel scroller nav **/

.PanelScroller .navContainer
{
	margin: -13px 10px 10px 21px;
overflow: hidden;
zoom: 1;

}

.PanelScroller .navControls
{
	float: right;
}

/* clearfix */ .PanelScroller .navControls { zoom: 1; } .PanelScroller .navControls:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	.PanelScroller .navControls a
	{
		font-size: 9px;
color: rgb(83, 83, 83);
background-color: rgb(234,239,240);
padding: 5px 6px 4px;
margin-left: -1px;
float: left;
display: block;
position: relative;

		
		border: 1px solid rgb(181,190,192);
border-radius: 2px;
		border-radius: 0;
	}
	
		.PanelScroller .navControls > a:first-child
		{
			border-bottom-left-radius: 2px;
		}
		
		.PanelScroller .navControls > a:last-child
		{
			border-bottom-right-radius: 2px;
		}
		
		.PanelScroller .navControls a:hover
		{
			text-decoration: none;
background-color: #FFFFFF;

		}
		
		.PanelScroller .navControls a.current
		{
			background-color: rgb(255,255,255);

		}
		
			.PanelScroller .navControls a .arrow
			{
				display: none;
			}
			
			.PanelScroller .navControls a.current span
			{
				display: block;
				line-height: 0px;
				width: 0px;
				height: 0px;
				border-top: 5px solid rgb(240, 240, 240);
				border-right: 5px solid transparent;
				border-bottom: 1px none black;
				border-left: 5px solid transparent;
				-moz-border-bottom-colors: rgb(240, 240, 240);
				position: absolute;
			}
			
			.PanelScroller .navControls a.current .arrow
			{
				border-top-color: rgb(181,190,192);
				top: 0px;
				left: 50%;
				margin-left: -5px;
			}
			
				.PanelScroller .navControls a .arrow span
				{
					border-top-color: rgb(205,211,212);
					top: -6px;
					left: -5px;
				}
				
/* notices */

.Notices .panel .noticeContent
{
	padding-right: 25px;
}

/* --- profile_post_list_simple.css --- */

.profilePostListItem
{
	overflow: hidden; zoom: 1;

	margin: 5px 0;
	padding-top: 5px;
	border-top: 1px solid rgb(226, 226, 226);
}

:not(.nonInitial) > .profilePostListItem:first-child
{
	border-top: none;
	padding-top: 0;
}

.profilePostListItem .avatar
{
	float: left;
	font-size: 0;
}

	.profilePostListItem .avatar img
	{
		width: 24px;
		height: 24px;
	}

.profilePostListItem .messageInfo
{
	margin-left: 34px;
}


.profilePostListItem .messageContent article,
.profilePostListItem .messageContent blockquote
{
	display: inline;
}

.profilePostListItem .poster
{
	font-weight: bold;
}

.profilePostListItem .messageMeta
{
	overflow: hidden; zoom: 1;
	font-size: 11px;
	line-height: 14px;
	padding-top: 4px;
}

.profilePostListItem .privateControls
{
	float: left;
}

	.profilePostListItem .privateControls .item
	{
		float: left;
		margin-right: 10px;
	}

.profilePostListItem .publicControls
{
	float: right;
}

	.profilePostListItem .publicControls .item
	{
		float: left;
		margin-left: 10px;
	}

.sidebar .statusPoster textarea
{
	width: 100%;
	margin: 0;
	box-sizing: border-box;
	resize: vertical;
	overflow: hidden;
}

.sidebar .statusPoster .submitUnit
{
	margin-top: 5px;
	text-align: right;
}

/* --- sidebar_share_page.css --- */

.sidebar .sharePage .shareControl
{
	margin-top: 10px;
	min-height: 23px;
}

.sidebar .sharePage iframe
{
	width: 200px;
	height: 20px;
}

.sidebar .sharePage iframe.fb_ltr
{
	_width: 200px !important;
}

.sidebar .sharePage .facebookLike iframe
{
	z-index: 52;
}

.mast .sharePage .secondaryContent
{
	overflow: visible !important;
}




@media (max-width:480px)
{
	.Responsive .sidebar .sharePage
	{
		display: none;
	}
}


/* --- thread_list_simple.css --- */

.threadListItem
{
	overflow: hidden; zoom: 1;

	margin: 5px 0;
	padding-top: 5px;
	border-top: 1px solid rgb(250, 250, 250);
}

.threadListItem:first-child
{
	border-top: none;
	padding-top: 0;
}

.threadListItem .avatar
{
	float: left;
	font-size: 0;
}

	.threadListItem .avatar img
	{
		width: 24px;
		height: 24px;
	}
	
.threadListItem .messageInfo
{
	margin-left: 34px;
}

.threadListItem .title
{
	padding: 1px 0;
}

.threadListItem .title,
.threadListItem .additionalRow
{
	overflow: hidden;
	white-space: nowrap;
	word-wrap: normal;
	text-overflow: ellipsis;
}

/* --- uix_welcomeBlock.css --- */

#uix_welcomeBlock {
	-moz-transition: opacity 0.4s ease;
	-o-transition: opacity 0.4s ease;
	-webkit-transition: opacity 0.4s ease;
	transition: opacity 0.4s ease;

	opacity: 1;

	font-size: 16px;
color: #FFF;
background: #E45045 url('styles/intrepid/intrepid/welcomeBlock_shuttle.jpg') no-repeat -20px 0;
padding: 60px 0;
border-style: none;
text-align: center;
line-height: 1.5;

}

.uix_welcomeBlock__content {
	position: relative;

	
	
}

#uix_welcomeBlock a.close {
	display: none;
	position: absolute;
	z-index: 1;
	top: 10px;
	right: 10px;
	height: 24px;
	width: 24px;
	text-align:center;

	cursor: pointer;
}

#uix_welcomeBlock .uix_welcomeBlock__header {
	font-size: 28pt;
font-family: 'Squada One', sans-serif;

}

#uix_welcomeBlock .uix_welcomeBlock__message { margin-bottom: 20px; }

#uix_welcomeBlock .uix_welcomeBlock__message a {
	font-weight: bold;
color: #FFF;
text-decoration: underline;
;
}

#uix_welcomeBlock .uix_welcomeBlock__message a:hover {
	color: #1ABC9C;
text-decoration: underline;
;
}

.uix_welcomeBlock__icon {
	font-size: 40px;
color: rgba(255, 255, 255, .7);
padding-right: 20px;
float: left;
line-height: 1;

}





@media (max-width:610px) {

	.Responsive #uix_welcomeBlock.uix_welcomeBlock_fixed {
		width: auto;
		left: 10px;
		right: 10px;
		bottom: 10px;
	}
}

@media (max-width: 480px) {

	.Responsive #uix_welcomeBlock a.signupButton {
		min-width: 60%;
		text-align: center;
	}

	.Responsive .uix_welcomeBlock__icon {
		display: block;
		float: none;
		width: 100%;
		margin: 0;
	}

	.Responsive #uix_welcomeBlock { text-align: center; }
}
